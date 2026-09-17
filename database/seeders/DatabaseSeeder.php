<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Material;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Progress;
use App\Models\QuizResult;
use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ========== USERS ==========
        $admin = User::create([
            'name' => 'Admin EduCare',
            'email' => 'admin@educare.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $teacher1 = User::create([
            'name' => 'Budi Santoso',
            'email' => 'teacher@educare.test',
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);

        $teacher2 = User::create([
            'name' => 'Dewi Lestari',
            'email' => 'dewi@teacher.test',
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);

        $student1 = User::create([
            'name' => 'Lutfi Hakim',
            'email' => 'student@educare.test',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        $student2 = User::create([
            'name' => 'Ahmad Rizky',
            'email' => 'ahmad@student.test',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        $student3 = User::create([
            'name' => 'Siti Nurhaliza',
            'email' => 'siti@student.test',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        $student4 = User::create([
            'name' => 'Maya Sari',
            'email' => 'maya@student.test',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        $student5 = User::create([
            'name' => 'Rizki Pratama',
            'email' => 'rizki@student.test',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        // ========== CATEGORIES ==========
        $catGeneral = Category::create(['name' => 'General Education', 'slug' => 'general-education', 'description' => 'Materi pendidikan umum untuk membangun fondasi pengetahuan']);
        $catIT = Category::create(['name' => 'IT Education', 'slug' => 'it-education', 'description' => 'Materi teknologi informasi dan pemrograman']);

        // ========== MATERIALS ==========
        // --- General Education ---
        $m1 = Material::create([
            'category_id' => $catGeneral->id,
            'user_id' => $teacher1->id,
            'title' => 'Basic Algebra',
            'slug' => 'basic-algebra',
            'description' => 'Pelajari konsep dasar aljabar untuk membangun fondasi matematika yang kuat.',
            'content' => '<h3>Apa itu Aljabar?</h3><p>Aljabar adalah cabang matematika yang menggunakan simbol dan huruf untuk merepresentasikan angka dan hubungan antar angka.</p><h3>Variable dan Konstanta</h3><p>Variable adalah simbol yang merepresentasikan nilai yang belum diketahui, sedangkan konstanta adalah nilai tetap.</p><h3>Persamaan Linear</h3><p>Persamaan linear adalah persamaan matematika dengan pangkat tertinggi 1. Contoh: 2x + 3 = 7</p>',
            'difficulty' => 'beginner',
            'icon' => 'calculator',
            'status' => 'published',
        ]);

        $m2 = Material::create([
            'category_id' => $catGeneral->id,
            'user_id' => $teacher1->id,
            'title' => 'Interaction of Living Things',
            'slug' => 'interaction-of-living-things',
            'description' => 'Memahami interaksi antar makhluk hidup dan pengaruhnya terhadap ekosistem.',
            'content' => '<h3>Rantai Makanan</h3><p>Rantai makanan adalah urutan perpindahan energi dari organisme satu ke organisme lainnya.</p><h3>Jaring-jaring Makanan</h3><p>Jaring-jaring makanan adalah kumpulan beberapa rantai makanan yang saling berhubungan.</p><h3>Simbiosis</h3><p>Simbiosis adalah hubungan antara dua organisme yang saling mempengaruhi.</p>',
            'difficulty' => 'beginner',
            'icon' => 'leaf',
            'status' => 'published',
        ]);

        $m3 = Material::create([
            'category_id' => $catGeneral->id,
            'user_id' => $teacher2->id,
            'title' => 'Indonesia Social & Cultural Diversity',
            'slug' => 'indonesia-social-cultural-diversity',
            'description' => 'Mengenal keberagaman sosial dan budaya Indonesia yang kaya.',
            'content' => '<h3>Bhinneka Tunggal Ika</h3><p>Bhinneka Tunggal Ika adalah semboyan negara Indonesia yang berarti "Berbeda-beda tetapi tetap satu".</p><h3>Suku Bangsa</h3><p>Indonesia memiliki lebih dari 300 suku bangsa dengan kebudayaan masing-masing.</p><h3>Budaya Indonesia</h3><p>Setiap daerah memiliki budaya unik seperti tarian, musik, dan upacara adat.</p>',
            'difficulty' => 'beginner',
            'icon' => 'globe',
            'status' => 'published',
        ]);

        $m4 = Material::create([
            'category_id' => $catGeneral->id,
            'user_id' => $teacher2->id,
            'title' => 'Indonesian & English Language',
            'slug' => 'indonesian-english-language',
            'description' => 'Belajar bahasa Indonesia dan Inggris untuk komunikasi yang lebih baik.',
            'content' => '<h3>Tata Bahasa Indonesia</h3><p>Memahami struktur kalimat yang benar dalam bahasa Indonesia.</p><h3>English Grammar Basics</h3><p>Subject-Verb Agreement: The student studies hard.</p><h3>Vocabulary Building</h3><p>Membangun kosakata harian dalam kedua bahasa untuk komunikasi efektif.</p>',
            'difficulty' => 'beginner',
            'icon' => 'languages',
            'status' => 'published',
        ]);

        $m5 = Material::create([
            'category_id' => $catGeneral->id,
            'user_id' => $teacher1->id,
            'title' => 'Time Management & Effective Study Habits',
            'slug' => 'time-management-study-habits',
            'description' => 'Kuasai teknik manajemen waktu dan kebiasaan belajar yang efektif.',
            'content' => '<h3>Teknik Pomodoro</h3><p>Bekerja selama 25 menit, istirahat 5 menit, ulangi 4 kali, lalu istirahat panjang.</p><h3>Prioritas Eisenhower</h3><p>Klasifikasikan tugas berdasarkan urgensi dan pentingnya.</p><h3>Goal Setting</h3><p>Tetapkan tujuan belajar yang SMART: Specific, Measurable, Achievable, Relevant, Time-bound.</p>',
            'difficulty' => 'beginner',
            'icon' => 'clock',
            'status' => 'published',
        ]);

        // --- IT Education ---
        $m6 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher1->id,
            'title' => 'HTML Basics',
            'slug' => 'html-basics',
            'description' => 'Pelajari dasar HTML untuk membuat struktur halaman web.',
            'content' => '<h3>Apa itu HTML?</h3><p>HTML (HyperText Markup Language) adalah bahasa markup untuk membuat struktur halaman web.</p><h3>Tag Dasar HTML</h3><ul><li>&lt;html&gt; - Elemen root</li><li>&lt;head&gt; - Bagian head</li><li>&lt;body&gt; - Bagian body</li><li>&lt;h1&gt; sampai &lt;h6&gt; - Judul</li><li>&lt;p&gt; - Paragraf</li><li>&lt;a&gt; - Link</li><li>&lt;img&gt; - Gambar</li></ul>',
            'difficulty' => 'beginner',
            'icon' => 'code',
            'video_url' => 'https://www.youtube.com/embed/UB1O30fR-EE',
            'status' => 'published',
        ]);

        $m7 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher1->id,
            'title' => 'CSS Basics',
            'slug' => 'css-basics',
            'description' => 'Belajar CSS untuk mempercantik tampilan website.',
            'content' => '<h3>Apa itu CSS?</h3><p>CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan halaman web.</p><h3>Selectors</h3><ul><li>Element Selector: p { color: blue; }</li><li>Class Selector: .class { color: red; }</li><li>ID Selector: #id { color: green; }</li></ul><h3>Box Model</h3><p>Setiap elemen HTML memiliki: content, padding, border, dan margin.</p>',
            'difficulty' => 'beginner',
            'icon' => 'palette',
            'video_url' => 'https://www.youtube.com/embed/yfoY53QqEnI',
            'status' => 'published',
        ]);

        $m8 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher1->id,
            'title' => 'JavaScript Basics',
            'slug' => 'javascript-basics',
            'description' => 'Pelajari dasar JavaScript untuk membuat website interaktif.',
            'content' => '<h3>Apa itu JavaScript?</h3><p>JavaScript adalah bahasa pemrograman untuk membuat website interaktif.</p><h3>Variable</h3><pre>let nama = "Lutfi";<br>const umur = 20;</pre><h3>Function</h3><pre>function sapa(nama) {<br>&nbsp;&nbsp;return "Halo, " + nama;<br>}</pre><h3>DOM Manipulation</h3><p>JavaScript bisa mengubah elemen HTML secara dinamis.</p>',
            'difficulty' => 'intermediate',
            'icon' => 'zap',
            'video_url' => 'https://www.youtube.com/embed/W6NZfCO5SIk',
            'status' => 'published',
        ]);

        $m9 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher2->id,
            'title' => 'PHP Basics',
            'slug' => 'php-basics',
            'description' => 'Belajar PHP untuk membuat backend website yang dinamis.',
            'content' => '<h3>Apa itu PHP?</h3><p>PHP (Hypertext Preprocessor) adalah bahasa pemrograman untuk server-side scripting.</p><h3>Variable dan Tipe Data</h3><pre>$nama = "EduCare";<br>$jumlah = 100;<br>$aktif = true;</pre><h3>Kondisi</h3><pre>if ($nilai >= 70) {<br>&nbsp;&nbsp;echo "Lulus";<br>} else {<br>&nbsp;&nbsp;echo "Tidak Lulus";<br>}</pre>',
            'difficulty' => 'intermediate',
            'icon' => 'server',
            'video_url' => 'https://www.youtube.com/embed/OK_JCtrrv-U',
            'status' => 'published',
        ]);

        $m10 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher2->id,
            'title' => 'Python Basics',
            'slug' => 'python-basics',
            'description' => 'Pelajari dasar Python untuk pemrograman dan data science.',
            'content' => '<h3>Apa itu Python?</h3><p>Python adalah bahasa pemrograman serbaguna yang mudah dipelajari.</p><h3>Variable</h3><pre>nama = "EduCare"<br>jumlah = 100<br>aktif = True</pre><h3>Loop</h3><pre>for i in range(10):<br>&nbsp;&nbsp;print(i)</pre>',
            'difficulty' => 'beginner',
            'icon' => 'terminal',
            'video_url' => 'https://www.youtube.com/embed/rfscVS0vtbw',
            'status' => 'published',
        ]);

        $m11 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher2->id,
            'title' => 'Databases & SQL',
            'slug' => 'databases-sql',
            'description' => 'Belajar database relasional dan query SQL untuk mengelola data.',
            'content' => '<h3>Apa itu Database?</h3><p>Database adalah kumpulan data yang terorganisir dan dapat diakses secara sistematis.</p><h3>SQL Dasar</h3><pre>SELECT * FROM users WHERE role = \'student\';</pre><h3>CRUD Operations</h3><ul><li>CREATE - Menambah data</li><li>READ - Membaca data</li><li>UPDATE - Mengubah data</li><li>DELETE - Menghapus data</li></ul>',
            'difficulty' => 'intermediate',
            'icon' => 'database',
            'video_url' => 'https://www.youtube.com/embed/HXV3zeQKqGY',
            'status' => 'published',
        ]);

        $m12 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher1->id,
            'title' => 'Git & GitHub',
            'slug' => 'git-github',
            'description' => 'Kuasai version control dengan Git dan kolaborasi di GitHub.',
            'content' => '<h3>Apa itu Git?</h3><p>Git adalah sistem version control untuk melacak perubahan pada kode.</p><h3>Command Dasar Git</h3><pre>git init<br>git add .<br>git commit -m "Initial commit"<br>git push origin main</pre><h3>Branching</h3><pre>git branch feature<br>git checkout feature</pre>',
            'difficulty' => 'beginner',
            'icon' => 'git-branch',
            'video_url' => 'https://www.youtube.com/embed/RGOj5yH7evk',
            'status' => 'published',
        ]);

        $m13 = Material::create([
            'category_id' => $catIT->id,
            'user_id' => $teacher2->id,
            'title' => 'UI/UX Design & Figma',
            'slug' => 'uiux-design-figma',
            'description' => 'Pelajari prinsip desain UI/UX dan buat prototipe dengan Figma.',
            'content' => '<h3>Apa itu UI/UX?</h3><p>UI (User Interface) adalah tampilan visual, UX (User Experience) adalah pengalaman pengguna.</p><h3>Prinsip Desain</h3><ul><li>Consistency - Konsistensi elemen</li><li>Feedback - Umpan balik interaksi</li><li>Simplicity - Kesederhanaan</li></ul><h3>Figma</h3><p>Figma adalah tools desain berbasis browser untuk membuat prototipe UI.</p>',
            'difficulty' => 'intermediate',
            'icon' => 'figma',
            'video_url' => 'https://www.youtube.com/embed/jwCmIBJ8Jtc',
            'status' => 'published',
        ]);

        // ========== QUIZZES ==========
        $q1 = Quiz::create(['material_id' => $m6->id, 'user_id' => $teacher1->id, 'title' => 'Quiz HTML Basics', 'description' => 'Uji pemahamanmu tentang dasar HTML.', 'duration' => 15, 'passing_score' => 70, 'status' => 'published']);
        $q2 = Quiz::create(['material_id' => $m7->id, 'user_id' => $teacher1->id, 'title' => 'Quiz CSS Basics', 'description' => 'Uji pemahamanmu tentang CSS.', 'duration' => 15, 'passing_score' => 70, 'status' => 'published']);
        $q3 = Quiz::create(['material_id' => $m8->id, 'user_id' => $teacher1->id, 'title' => 'Quiz JavaScript Basics', 'description' => 'Uji pemahamanmu tentang JavaScript.', 'duration' => 20, 'passing_score' => 70, 'status' => 'published']);
        $q4 = Quiz::create(['material_id' => $m1->id, 'user_id' => $teacher1->id, 'title' => 'Quiz Basic Algebra', 'description' => 'Uji pemahamanmu tentang Aljabar.', 'duration' => 15, 'passing_score' => 70, 'status' => 'published']);
        $q5 = Quiz::create(['material_id' => $m10->id, 'user_id' => $teacher2->id, 'title' => 'Quiz Python Basics', 'description' => 'Uji pemahamanmu tentang Python.', 'duration' => 20, 'passing_score' => 70, 'status' => 'published']);
        $q6 = Quiz::create(['material_id' => $m11->id, 'user_id' => $teacher2->id, 'title' => 'Quiz Databases & SQL', 'description' => 'Uji pemahamanmu tentang Database dan SQL.', 'duration' => 15, 'passing_score' => 70, 'status' => 'published']);

        // ========== QUESTIONS ==========
        // Quiz 1: HTML
        Question::create(['quiz_id' => $q1->id, 'question' => 'Apa kepanjangan dari HTML?', 'option_a' => 'Hyper Transfer Markup Language', 'option_b' => 'HyperText Markup Language', 'option_c' => 'Home Tool Markup Language', 'option_d' => 'Hyper Text Making Language', 'correct_answer' => 'B', 'explanation' => 'HTML = HyperText Markup Language.']);
        Question::create(['quiz_id' => $q1->id, 'question' => 'Tag untuk judul terbesar adalah?', 'option_a' => '<heading>', 'option_b' => '<h6>', 'option_c' => '<h1>', 'option_d' => '<title>', 'correct_answer' => 'C', 'explanation' => '<h1> untuk judul terbesar.']);
        Question::create(['quiz_id' => $q1->id, 'question' => 'Tag untuk paragraf adalah?', 'option_a' => '<para>', 'option_b' => '<p>', 'option_c' => '<text>', 'option_d' => '<pg>', 'correct_answer' => 'B', 'explanation' => '<p> untuk paragraf.']);
        Question::create(['quiz_id' => $q1->id, 'question' => 'Tag untuk membuat link adalah?', 'option_a' => '<link>', 'option_b' => '<href>', 'option_c' => '<a>', 'option_d' => '<url>', 'correct_answer' => 'C', 'explanation' => '<a> untuk anchor/link.']);
        Question::create(['quiz_id' => $q1->id, 'question' => 'Atribut untuk gambar adalah?', 'option_a' => '<image>', 'option_b' => '<img>', 'option_c' => '<pic>', 'option_d' => '<photo>', 'correct_answer' => 'B', 'explanation' => '<img> untuk menampilkan gambar.']);

        // Quiz 2: CSS
        Question::create(['quiz_id' => $q2->id, 'question' => 'Apa kepanjangan dari CSS?', 'option_a' => 'Computer Style Sheets', 'option_b' => 'Creative Style System', 'option_c' => 'Cascading Style Sheets', 'option_d' => 'Colorful Style Sheets', 'correct_answer' => 'C', 'explanation' => 'CSS = Cascading Style Sheets.']);
        Question::create(['quiz_id' => $q2->id, 'question' => 'Property untuk warna teks adalah?', 'option_a' => 'text-color', 'option_b' => 'font-color', 'option_c' => 'color', 'option_d' => 'foreground', 'correct_answer' => 'C', 'explanation' => 'Property color untuk warna teks.']);
        Question::create(['quiz_id' => $q2->id, 'question' => 'Selector untuk class adalah?', 'option_a' => '#', 'option_b' => '.', 'option_c' => '@', 'option_d' => '*', 'correct_answer' => 'B', 'explanation' => 'Titik (.) untuk class selector.']);
        Question::create(['quiz_id' => $q2->id, 'question' => 'Property untuk latar belakang adalah?', 'option_a' => 'bg-color', 'option_b' => 'background-color', 'option_c' => 'bgcolor', 'option_d' => 'back-color', 'correct_answer' => 'B', 'explanation' => 'background-color untuk warna latar belakang.']);
        Question::create(['quiz_id' => $q2->id, 'question' => 'Box model terdiri dari?', 'option_a' => 'Content, Padding, Border, Margin', 'option_b' => 'Width, Height, Color', 'option_c' => 'Top, Right, Bottom, Left', 'option_d' => 'Font, Size, Weight', 'correct_answer' => 'A', 'explanation' => 'Box model: content, padding, border, margin.']);

        // Quiz 3: JavaScript
        Question::create(['quiz_id' => $q3->id, 'question' => 'Apa itu JavaScript?', 'option_a' => 'Bahasa markup', 'option_b' => 'Bahasa pemrograman untuk web', 'option_c' => 'Sistem operasi', 'option_d' => 'Database', 'correct_answer' => 'B', 'explanation' => 'JavaScript adalah bahasa pemrograman.']);
        Question::create(['quiz_id' => $q3->id, 'question' => 'Kata kunci untuk deklarasi variabel modern?', 'option_a' => 'var', 'option_b' => 'let', 'option_c' => 'define', 'option_d' => 'dim', 'correct_answer' => 'B', 'explanation' => 'let adalah kata kunci modern.']);
        Question::create(['quiz_id' => $q3->id, 'question' => 'Fungsi untuk menampilkan di console?', 'option_a' => 'console.display()', 'option_b' => 'console.show()', 'option_c' => 'console.log()', 'option_d' => 'console.print()', 'correct_answer' => 'C', 'explanation' => 'console.log() untuk output.']);
        Question::create(['quiz_id' => $q3->id, 'question' => 'Apa output typeof "hello"?', 'option_a' => '"text"', 'option_b' => '"string"', 'option_c' => '"char"', 'option_d' => '"varchar"', 'correct_answer' => 'B', 'explanation' => 'typeof mengembalikan "string".']);
        Question::create(['quiz_id' => $q3->id, 'question' => 'Event saat user mengklik?', 'option_a' => 'onhover', 'option_b' => 'onscroll', 'option_c' => 'onclick', 'option_d' => 'onload', 'correct_answer' => 'C', 'explanation' => 'onclick untuk event klik.']);

        // Quiz 4: Basic Algebra
        Question::create(['quiz_id' => $q4->id, 'question' => 'Jika x + 5 = 12, maka x = ?', 'option_a' => '5', 'option_b' => '6', 'option_c' => '7', 'option_d' => '8', 'correct_answer' => 'C', 'explanation' => 'x = 12 - 5 = 7.']);
        Question::create(['quiz_id' => $q4->id, 'question' => 'Hasil dari 3x jika x = 4 adalah?', 'option_a' => '7', 'option_b' => '10', 'option_c' => '12', 'option_d' => '15', 'correct_answer' => 'C', 'explanation' => '3 × 4 = 12.']);
        Question::create(['quiz_id' => $q4->id, 'question' => 'Persamaan 2x - 4 = 10, x = ?', 'option_a' => '3', 'option_b' => '5', 'option_c' => '7', 'option_d' => '8', 'correct_answer' => 'C', 'explanation' => '2x = 14, x = 7.']);
        Question::create(['quiz_id' => $q4->id, 'question' => 'Apa itu variabel?', 'option_a' => 'Angka tetap', 'option_b' => 'Simbol untuk nilai', 'option_c' => 'Rumus matematika', 'option_d' => 'Operasi hitung', 'correct_answer' => 'B', 'explanation' => 'Variabel adalah simbol untuk menyimpan nilai.']);
        Question::create(['quiz_id' => $q4->id, 'question' => 'Jika y = 2x + 1 dan x = 3, maka y = ?', 'option_a' => '5', 'option_b' => '6', 'option_c' => '7', 'option_d' => '8', 'correct_answer' => 'C', 'explanation' => 'y = 2(3) + 1 = 7.']);

        // Quiz 5: Python
        Question::create(['quiz_id' => $q5->id, 'question' => 'Apa itu Python?', 'option_a' => 'Bahasa markup', 'option_b' => 'Bahasa pemrograman serbaguna', 'option_c' => 'Database', 'option_d' => 'Sistem operasi', 'correct_answer' => 'B', 'explanation' => 'Python adalah bahasa pemrograman serbaguna.']);
        Question::create(['quiz_id' => $q5->id, 'question' => 'Cara mencetak output di Python?', 'option_a' => 'echo()', 'option_b' => 'print()', 'option_c' => 'console.log()', 'option_d' => 'System.out.println()', 'correct_answer' => 'B', 'explanation' => 'print() untuk output di Python.']);
        Question::create(['quiz_id' => $q5->id, 'question' => 'Simbol komentar di Python?', 'option_a' => '//', 'option_b' => '/* */', 'option_c' => '#', 'option_d' => '--', 'correct_answer' => 'C', 'explanation' => 'Simbol # untuk komentar di Python.']);
        Question::create(['quiz_id' => $q5->id, 'question' => 'Tipe data untuk teks di Python?', 'option_a' => 'int', 'option_b' => 'float', 'option_c' => 'bool', 'option_d' => 'str', 'correct_answer' => 'D', 'explanation' => 'str adalah tipe data string.']);
        Question::create(['quiz_id' => $q5->id, 'question' => 'Fungsi untuk mendapatkan panjang list?', 'option_a' => 'length()', 'option_b' => 'size()', 'option_c' => 'len()', 'option_d' => 'count()', 'correct_answer' => 'C', 'explanation' => 'len() untuk mendapatkan panjang list.']);

        // Quiz 6: Databases & SQL
        Question::create(['quiz_id' => $q6->id, 'question' => 'SQL singkatan dari?', 'option_a' => 'Simple Query Language', 'option_b' => 'Structured Query Language', 'option_c' => 'Standard Query Logic', 'option_d' => 'System Query Language', 'correct_answer' => 'B', 'explanation' => 'SQL = Structured Query Language.']);
        Question::create(['quiz_id' => $q6->id, 'question' => 'Perintah untuk membaca data?', 'option_a' => 'GET', 'option_b' => 'FETCH', 'option_c' => 'SELECT', 'option_d' => 'READ', 'correct_answer' => 'C', 'explanation' => 'SELECT untuk membaca data.']);
        Question::create(['quiz_id' => $q6->id, 'question' => 'Perintah untuk menambah data?', 'option_a' => 'ADD', 'option_b' => 'INSERT', 'option_c' => 'CREATE', 'option_d' => 'NEW', 'correct_answer' => 'B', 'explanation' => 'INSERT untuk menambah data.']);
        Question::create(['quiz_id' => $q6->id, 'question' => 'Primary key berfungsi untuk?', 'option_a' => 'Menyimpan password', 'option_b' => 'Menghapus data', 'option_c' => 'Mengidentifikasi unik', 'option_d' => 'Menampilkan data', 'correct_answer' => 'C', 'explanation' => 'Primary key untuk identifikasi unik.']);
        Question::create(['quiz_id' => $q6->id, 'question' => 'Perintah untuk menghapus tabel?', 'option_a' => 'REMOVE TABLE', 'option_b' => 'DELETE TABLE', 'option_c' => 'DROP TABLE', 'option_d' => 'DESTROY TABLE', 'correct_answer' => 'C', 'explanation' => 'DROP TABLE untuk menghapus tabel.']);

        // ========== PROGRESS ==========
        Progress::create(['user_id' => $student1->id, 'material_id' => $m6->id, 'percentage' => 80, 'completed' => false]);
        Progress::create(['user_id' => $student1->id, 'material_id' => $m7->id, 'percentage' => 60, 'completed' => false]);
        Progress::create(['user_id' => $student1->id, 'material_id' => $m8->id, 'percentage' => 40, 'completed' => false]);
        Progress::create(['user_id' => $student1->id, 'material_id' => $m1->id, 'percentage' => 100, 'completed' => true, 'completed_at' => now()]);

        // ========== QUIZ RESULTS ==========
        QuizResult::create(['user_id' => $student1->id, 'quiz_id' => $q1->id, 'score' => 85, 'correct_answers' => 4, 'wrong_answers' => 1, 'passed' => true, 'completed_at' => now()]);
        QuizResult::create(['user_id' => $student1->id, 'quiz_id' => $q2->id, 'score' => 75, 'correct_answers' => 4, 'wrong_answers' => 1, 'passed' => true, 'completed_at' => now()]);

        // ========== CERTIFICATES ==========
        Certificate::create(['user_id' => $student1->id, 'title' => 'Sertifikat HTML Basics', 'certificate_number' => 'EDU-2026-001', 'issued_at' => now()]);
        Certificate::create(['user_id' => $student1->id, 'title' => 'Sertifikat Basic Algebra', 'certificate_number' => 'EDU-2026-002', 'issued_at' => now()->subDays(3)]);
    }
}
