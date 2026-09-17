@extends('layouts.guest')

@section('title', 'EduCare - ' . $quiz->title)

@section('content')
<div class="min-h-screen bg-white dark:bg-black transition-colors duration-200">

    {{-- Top Bar --}}
    <div class="bg-white dark:bg-[#1a1a1a] border-b border-[#E2E8F0] dark:border-[#2a2a2a] sticky top-0 z-30 transition-colors duration-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">
            <div>
                <h1 class="font-bold text-[#111827] dark:text-[#ededed]">{{ $quiz->title }}</h1>
                <p class="text-sm text-[#64748B] dark:text-[#a3a3a3]">{{ $quiz->material->title ?? '' }}</p>
            </div>
            <div class="flex items-center gap-4">
                {{-- Timer --}}
                <div id="timer" class="flex items-center gap-2 bg-[#F8FAFC] dark:bg-[#111111] px-4 py-2 rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] transition-colors duration-200">
                    <svg class="w-5 h-5 text-[#2563EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span id="timeDisplay" class="font-mono font-bold text-[#111827] dark:text-[#ededed]">{{ $quiz->duration }}:00</span>
                </div>
                <a href="{{ url('/quiz') }}" class="text-sm text-[#64748B] dark:text-[#a3a3a3] hover:text-[#DC2626] transition-colors">Keluar</a>
            </div>
        </div>
    </div>

    {{-- Quiz Content --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8">

        {{-- Progress Indicator --}}
        <div class="mb-8">
            <div class="flex items-center justify-between text-sm mb-2">
                <span class="text-[#64748B] dark:text-[#a3a3a3]">Soal <span id="currentNumber">1</span> / {{ $questions->count() }}</span>
                <span id="answeredCount" class="text-[#2563EB] font-medium">0 terjawab</span>
            </div>
            <div class="h-2 bg-[#E2E8F0] dark:bg-[#2a2a2a] rounded-full overflow-hidden">
                <div id="progressBar" class="h-full bg-[#2563EB] rounded-full transition-all duration-300" style="width: 0%"></div>
            </div>
        </div>

        {{-- Questions --}}
        <form id="quizForm" onsubmit="return submitQuiz(event)">
            @csrf
            @foreach($questions as $index => $question)
                <div class="question-card bg-white dark:bg-[#1a1a1a] rounded-2xl border border-[#E2E8F0] dark:border-[#2a2a2a] p-6 sm:p-8 mb-6 {{ $index > 0 ? 'hidden' : '' }}" data-index="{{ $index }}">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-10 bg-[#2563EB] text-white rounded-xl flex items-center justify-center font-bold">{{ $index + 1 }}</span>
                        <h2 class="text-lg font-bold text-[#111827] dark:text-[#ededed]">Soal {{ $index + 1 }}</h2>
                    </div>

                    <p class="text-[#111827] dark:text-[#ededed] mb-6 text-lg leading-relaxed">{{ $question->question }}</p>

                    <div class="space-y-3">
                        @foreach(['A', 'B', 'C', 'D'] as $option)
                            <label class="flex items-start gap-4 p-4 bg-[#F8FAFC] dark:bg-[#111111] rounded-xl border-2 border-transparent hover:border-[#2563EB]/30 cursor-pointer transition-all option-label" data-question="{{ $index }}" data-option="{{ $option }}">
                                <input type="radio" name="question_{{ $index }}" value="{{ $option }}" class="sr-only" onchange="selectAnswer({{ $index }}, '{{ $option }}')">
                                <span class="w-8 h-8 shrink-0 rounded-lg border-2 border-[#E2E8F0] dark:border-[#475569] flex items-center justify-center text-sm font-bold text-[#64748B] dark:text-[#a3a3a3] option-circle transition-all">{{ $option }}</span>
                                <span class="text-[#111827] dark:text-[#ededed] pt-1">{{ $question->{'option_' . strtolower($option)} }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </form>

        {{-- Navigation --}}
        <div class="flex items-center justify-between mt-8">
            <button type="button" id="prevBtn" onclick="prevQuestion()" class="px-6 py-3 bg-white dark:bg-[#1a1a1a] text-[#111827] dark:text-[#ededed] font-medium rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] hover:border-[#2563EB] transition-colors disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                &larr; Sebelumnya
            </button>

            <div class="flex items-center gap-2" id="questionDots">
                @foreach($questions as $index => $q)
                    <button type="button" onclick="goToQuestion({{ $index }})" class="w-3 h-3 rounded-full bg-[#E2E8F0] dark:bg-[#475569] hover:bg-[#2563EB]/50 transition-colors dot" data-dot="{{ $index }}"></button>
                @endforeach
            </div>

            <button type="button" id="nextBtn" onclick="nextQuestion()" class="px-6 py-3 bg-[#2563EB] text-white font-medium rounded-xl hover:bg-[#1D4ED8] transition-colors">
                Selanjutnya &rarr;
            </button>
        </div>

        {{-- Submit Button --}}
        <div class="mt-8 text-center hidden" id="submitSection">
            <button type="button" onclick="submitQuiz()" class="px-8 py-3 bg-[#16A34A] text-white font-medium rounded-xl hover:bg-[#15803D] transition-colors">
                Selesai & Submit
            </button>
        </div>
    </div>
</div>

<script>
    const totalQuestions = {{ $questions->count() }};
    const duration = {{ $quiz->duration }};
    let currentQuestion = 0;
    let answers = {};
    let timeLeft = duration * 60;

    // Timer
    function startTimer() {
        const timer = setInterval(() => {
            timeLeft--;
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            document.getElementById('timeDisplay').textContent =
                String(minutes).padStart(2, '0') + ':' + String(seconds).padStart(2, '0');

            if (timeLeft <= 0) {
                clearInterval(timer);
                submitQuiz();
            }
        }, 1000);
    }
    startTimer();

    // Navigation
    function showQuestion(index) {
        document.querySelectorAll('.question-card').forEach(card => card.classList.add('hidden'));
        document.querySelectorAll('.question-card')[index].classList.remove('hidden');
        document.getElementById('currentNumber').textContent = index + 1;

        document.getElementById('prevBtn').disabled = index === 0;

        if (index === totalQuestions - 1) {
            document.getElementById('nextBtn').classList.add('hidden');
            document.getElementById('submitSection').classList.remove('hidden');
        } else {
            document.getElementById('nextBtn').classList.remove('hidden');
            document.getElementById('submitSection').classList.add('hidden');
        }

        // Update dots
        document.querySelectorAll('.dot').forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-[#2563EB]', 'w-6');
                dot.classList.remove('bg-[#E2E8F0]');
            } else if (answers[i]) {
                dot.classList.add('bg-[#2563EB]/50');
                dot.classList.remove('bg-[#E2E8F0]');
            } else {
                dot.classList.remove('bg-[#2563EB]', 'bg-[#2563EB]/50', 'w-6');
                dot.classList.add('bg-[#E2E8F0]');
            }
        });
    }

    function nextQuestion() {
        if (currentQuestion < totalQuestions - 1) {
            currentQuestion++;
            showQuestion(currentQuestion);
        }
    }

    function prevQuestion() {
        if (currentQuestion > 0) {
            currentQuestion--;
            showQuestion(currentQuestion);
        }
    }

    function goToQuestion(index) {
        currentQuestion = index;
        showQuestion(currentQuestion);
    }

    function selectAnswer(questionIndex, option) {
        answers[questionIndex] = option;

        // Update selected style
        const labels = document.querySelectorAll(`.option-label[data-question="${questionIndex}"]`);
        labels.forEach(label => {
            const circle = label.querySelector('.option-circle');
            if (label.dataset.option === option) {
                label.classList.add('border-[#2563EB]', 'bg-[#EFF6FF]', 'dark:bg-[#2563EB]/15');
                label.classList.remove('border-transparent');
                circle.classList.add('bg-[#2563EB]', 'text-white', 'border-[#2563EB]');
                circle.classList.remove('border-[#E2E8F0]', 'dark:border-[#475569]', 'text-[#64748B]', 'dark:text-[#a3a3a3]');
            } else {
                label.classList.remove('border-[#2563EB]', 'bg-[#EFF6FF]', 'dark:bg-[#2563EB]/15');
                label.classList.add('border-transparent');
                circle.classList.remove('bg-[#2563EB]', 'text-white', 'border-[#2563EB]');
                circle.classList.add('border-[#E2E8F0]', 'dark:border-[#475569]', 'text-[#64748B]', 'dark:text-[#a3a3a3]');
            }
        });

        // Update progress
        const answered = Object.keys(answers).length;
        document.getElementById('answeredCount').textContent = answered + ' terjawab';
        document.getElementById('progressBar').style.width = (answered / totalQuestions * 100) + '%';
    }

    function submitQuiz() {
        const answered = Object.keys(answers).length;
        if (answered < totalQuestions) {
            if (!confirm(`Kamu baru menjawab ${answered} dari ${totalQuestions} soal. Yakin ingin submit?`)) {
                return;
            }
        }

        // Store answers in hidden inputs and submit
        let form = document.getElementById('quizForm');
        for (let i = 0; i < totalQuestions; i++) {
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'answer_' + i;
            input.value = answers[i] || '';
            form.appendChild(input);
        }
        form.action = '{{ url("/quiz/" . $quiz["id"] . "/result") }}';
        form.method = 'POST';
        form.submit();
    }

    // Init
    showQuestion(0);
</script>
@endsection
