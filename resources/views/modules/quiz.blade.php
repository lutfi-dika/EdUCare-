@extends('layouts.dashboard')

@section('title', 'Quiz - ' . $course['title'] . ' - EduCare')
@section('page-title', $course['title'])

@section('sidebar')
    @include('components.sidebar-student')
@endsection

@section('content')
<div class="max-w-4xl mx-auto">

    {{-- Breadcrumb --}}
    <nav class="flex items-center gap-2 text-sm text-[#64748B] dark:text-[#a3a3a3] mb-6">
        <a href="{{ url('/modules') }}" class="hover:text-[#2563EB] dark:hover:text-[#60a5fa] transition-colors">Modul</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
        <a href="{{ url('/modules/' . $course['id']) }}" class="hover:text-[#2563EB] dark:hover:text-[#60a5fa] transition-colors">{{ $course['title'] }}</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
        <span class="text-[#111827] dark:text-[#ededed] font-medium">Quiz</span>
    </nav>

    {{-- Quiz Header --}}
    <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-8 text-center mb-8">
        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl flex items-center justify-center" style="background: {{ $course['color'] }}15">
            <svg class="w-8 h-8" style="color: {{ $course['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
        </div>
        <h1 class="text-2xl font-bold dark:text-[#ededed] mb-2">{{ $quiz['title'] }}</h1>
        <p class="text-[#64748B] dark:text-[#a3a3a3] mb-6">{{ $quiz['description'] }}</p>

        @if($quizResult && $quizResult['passed'])
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded-xl font-semibold text-sm mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Sudah Lulus - Nilai: {{ $quizResult['score'] }}%
            </div>
            <div class="flex items-center justify-center gap-3">
                <a href="{{ url('/modules/' . $course['id'] . '/quiz/result') }}" class="px-6 py-3 bg-[#2563EB] text-white rounded-xl text-sm font-semibold hover:bg-[#1d4ed8] transition-colors">
                    Lihat Hasil
                </a>
                <a href="{{ url('/modules/' . $course['id']) }}" class="px-6 py-3 bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] text-[#64748B] dark:text-[#a3a3a3] rounded-xl text-sm font-semibold hover:border-[#2563EB] dark:hover:border-[#2563EB] transition-colors">
                    Kembali
                </a>
            </div>
        @elseif($quizResult && !$quizResult['passed'])
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 rounded-xl font-semibold text-sm mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Belum Lulus - Nilai: {{ $quizResult['score'] }}%
            </div>
            <div class="flex items-center justify-center gap-3">
                <a href="{{ url('/modules/' . $course['id'] . '/quiz/result') }}" class="px-6 py-3 bg-[#F59E0B] text-white rounded-xl text-sm font-semibold hover:bg-[#D97706] transition-colors">
                    Ulangi Quiz
                </a>
                <a href="{{ url('/modules/' . $course['id']) }}" class="px-6 py-3 bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] text-[#64748B] dark:text-[#a3a3a3] rounded-xl text-sm font-semibold hover:border-[#2563EB] dark:hover:border-[#2563EB] transition-colors">
                    Kembali
                </a>
            </div>
        @else
            <div class="flex items-center justify-center gap-6 text-sm text-[#64748B] dark:text-[#a3a3a3]">
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    {{ count($quiz['questions']) }} Soal
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    {{ $quiz['duration'] }} Menit
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                    Min. {{ $quiz['passing_score'] }}%
                </span>
            </div>
        @endif
    </div>

    {{-- Quiz Form - only show if not passed --}}
    @if(!($quizResult && $quizResult['passed']))
    <form method="POST" action="{{ url('/modules/' . $course['id'] . '/quiz/submit') }}" id="quizForm">
        @csrf

        <div class="space-y-6" id="questionsContainer">
            @foreach($quiz['questions'] as $qId => $question)
                <div class="bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-2xl p-6 question-card" data-question="{{ $qId }}">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center text-sm font-bold text-white flex-shrink-0" style="background: {{ $course['color'] }}">
                            {{ $loop->iteration }}
                        </div>
                        <h3 class="text-base font-semibold dark:text-[#ededed]">{{ $question['question'] }}</h3>
                    </div>

                    <div class="space-y-3 ml-12">
                        @foreach($question['options'] as $key => $option)
                            <label class="flex items-center gap-3 p-4 rounded-xl border border-[#E2E8F0] dark:border-[#2a2a2a] cursor-pointer hover:border-[#2563EB] dark:hover:border-[#2563EB] transition-colors option-label" data-option="{{ $key }}">
                                <input type="radio" name="answer_{{ $qId }}" value="{{ $key }}" class="hidden" onchange="selectOption(this)">
                                <div class="w-5 h-5 rounded-full border-2 border-[#D1D5DB] dark:border-[#64748B] flex items-center justify-center flex-shrink-0 radio-circle">
                                    <div class="w-2.5 h-2.5 rounded-full bg-[#2563EB] scale-0 transition-transform radio-dot"></div>
                                </div>
                                <span class="text-sm text-[#64748B] dark:text-[#a3a3a3]"><strong>{{ $key }}.</strong> {{ $option }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Navigation --}}
        <div class="mt-8 flex items-center justify-between">
            <div class="text-sm text-[#64748B] dark:text-[#a3a3a3]" id="answeredCount">
                0/{{ count($quiz['questions']) }} soal terjawab
            </div>
            <div class="flex gap-3">
                <button type="button" onclick="prevQuestion()" class="px-5 py-2.5 bg-white dark:bg-[#1a1a1a] border border-[#E2E8F0] dark:border-[#2a2a2a] rounded-xl text-sm font-medium text-[#64748B] dark:text-[#a3a3a3] hover:border-[#2563EB] dark:hover:border-[#2563EB] transition-colors">
                    Sebelumnya
                </button>
                <button type="button" onclick="nextQuestion()" class="px-5 py-2.5 bg-[#2563EB] text-white rounded-xl text-sm font-medium hover:bg-[#1d4ed8] transition-colors" id="nextBtn">
                    Selanjutnya
                </button>
                <button type="submit" class="px-5 py-2.5 bg-[#22C55E] text-white rounded-xl text-sm font-medium hover:bg-[#16A34A] transition-colors hidden" id="submitBtn" onclick="return confirmSubmit()">
                    Kirim Jawaban
                </button>
            </div>
        </div>

        {{-- Question Dots --}}
        <div class="mt-6 flex flex-wrap gap-2 justify-center" id="questionDots">
            @foreach($quiz['questions'] as $qId => $question)
                <button type="button" onclick="goToQuestion({{ $qId }})" class="w-8 h-8 rounded-lg text-xs font-semibold transition-colors dot-btn {{ $loop->first ? 'bg-[#2563EB] text-white' : 'bg-gray-100 dark:bg-[#2a2a2a] text-[#64748B] dark:text-[#a3a3a3]' }}" data-dot="{{ $qId }}">
                    {{ $loop->iteration }}
                </button>
            @endforeach
        </div>
    </form>
    @endif

</div>

@push('scripts')
<script>
    const questions = @json(array_keys($quiz['questions']));
    let currentIndex = 0;

    function selectOption(input) {
        const card = input.closest('.question-card');
        const qId = card.dataset.question;

        card.querySelectorAll('.option-label').forEach(label => {
            label.classList.remove('border-[#2563EB]', 'bg-[#EFF6FF]', 'dark:bg-[#2563EB]/10');
            label.querySelector('.radio-dot').classList.add('scale-0');
        });

        const selectedLabel = input.closest('.option-label');
        selectedLabel.classList.add('border-[#2563EB]', 'bg-[#EFF6FF]', 'dark:bg-[#2563EB]/10');
        selectedLabel.querySelector('.radio-dot').classList.remove('scale-0');

        updateProgress();
        updateDots();
    }

    function updateProgress() {
        const answered = document.querySelectorAll('input[type="radio"]:checked').length;
        const total = questions.length;
        document.getElementById('answeredCount').textContent = `${answered}/${total} soal terjawab`;

        const submitBtn = document.getElementById('submitBtn');
        const nextBtn = document.getElementById('nextBtn');
        if (answered === total) {
            submitBtn.classList.remove('hidden');
        } else {
            submitBtn.classList.add('hidden');
        }
    }

    function updateDots() {
        document.querySelectorAll('.dot-btn').forEach(btn => {
            const qId = btn.dataset.dot;
            const card = document.querySelector(`.question-card[data-question="${qId}"]`);
            const hasAnswer = card.querySelector('input[type="radio"]:checked');

            if (hasAnswer) {
                btn.classList.remove('bg-gray-100', 'dark:bg-[#2a2a2a]', 'text-[#64748B]', 'dark:text-[#a3a3a3]');
                btn.classList.add('bg-green-500', 'text-white');
            } else {
                btn.classList.remove('bg-green-500', 'text-white');
                btn.classList.add('bg-gray-100', 'dark:bg-[#2a2a2a]', 'text-[#64748B]', 'dark:text-[#a3a3a3]');
            }

            if (qId == questions[currentIndex]) {
                btn.classList.remove('bg-gray-100', 'dark:bg-[#2a2a2a]', 'text-[#64748B]', 'dark:text-[#a3a3a3]', 'bg-green-500');
                btn.classList.add('bg-[#2563EB]', 'text-white');
            }
        });
    }

    function showQuestion(index) {
        document.querySelectorAll('.question-card').forEach(card => {
            card.classList.add('hidden');
        });
        document.querySelector(`.question-card[data-question="${questions[index]}"]`).classList.remove('hidden');
        updateDots();
    }

    function nextQuestion() {
        if (currentIndex < questions.length - 1) {
            currentIndex++;
            showQuestion(currentIndex);
        }
    }

    function prevQuestion() {
        if (currentIndex > 0) {
            currentIndex--;
            showQuestion(currentIndex);
        }
    }

    function goToQuestion(qId) {
        currentIndex = questions.indexOf(qId);
        showQuestion(currentIndex);
    }

    function confirmSubmit() {
        const unanswered = questions.length - document.querySelectorAll('input[type="radio"]:checked').length;
        if (unanswered > 0) {
            return confirm(`Masih ada ${unanswered} soal belum dijawab. Yakin ingin mengirim?`);
        }
        return true;
    }

    showQuestion(0);
</script>
@endpush

@endsection
