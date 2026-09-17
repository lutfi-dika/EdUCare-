<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateMaterialContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            1 => '<h3>Apa itu Aljabar?</h3>
<p>Aljabar adalah cabang matematika yang menggunakan simbol dan huruf untuk merepresentasikan angka dan hubungan antar angka. Aljabar menjadi dasar untuk memahami konsep matematika yang lebih tinggi.</p>

<h3>Konsep Dasar Aljabar</h3>
<p>Beberapa konsep dasar yang perlu dipahami dalam aljabar meliputi:</p>
<ul>
<li><strong>Variabel</strong> adalah simbol (biasanya huruf seperti x, y, z) yang merepresentasikan nilai yang belum diketahui</li>
<li><strong>Koefisien</strong> adalah angka yang berada di depan variabel, misalnya pada 3x, koefisiennya adalah 3</li>
<li><strong>Konstanta</strong> adalah angka tetap yang nilainya tidak berubah</li>
<li><strong>Ekspresi</strong> adalah kombinasi variabel, koefisien, dan konstanta yang dihubungkan oleh operasi hitung</li>
</ul>

<h3>Operasi Aljabar</h3>
<p>Operasi dasar dalam aljabar meliputi penjumlahan, pengurangan, perkalian, dan pembagian. Dalam aljabar, kita juga mengenal konsep:</p>
<ul>
<li><strong>Persamaan</strong> adalah pernyataan matematika yang memiliki tanda sama dengan (=), misalnya 2x + 5 = 15</li>
<li><strong>Pertidaksamaan</strong> adalah pernyataan matematika yang menggunakan tanda &lt;, &gt;, &le;, atau &ge;</li>
<li><strong>Faktorisasi</strong> adalah proses memecah suku aljabar menjadi perkalian beberapa faktor</li>
</ul>

<h3>Contoh Soal</h3>
<p>Selesaikan persamaan: 2x + 5 = 15</p>
<p>Langkah 1: Kurangkan 5 dari kedua ruas &rarr; 2x = 15 - 5 = 10</p>
<p>Langkah 2: Bagi kedua ruas dengan 2 &rarr; x = 10 &divide; 2 = 5</p>
<p>Jadi, nilai x adalah 5.</p>

<h3>Pentingnya Aljabar</h3>
<p>Aljabar digunakan dalam berbagai bidang seperti sains, teknologi, ekonomi, dan teknik. Memahami aljabar membantu kita memecahkan masalah sehari-hari yang melibatkan penghitungan dan prediksi.</p>',

            2 => '<h3>Rantai Makanan</h3>
<p>Rantai makanan adalah urutan perpindahan energi dari organisme satu ke organisme lain melalui proses makan dan dimakan. Setiap rantai makanan dimulai dari produsen (tumbuhan) dan berakhir pada dekomposer (jamur/bakteri).</p>

<h3>Simbiosis</h3>
<p>Simbiosis adalah interaksi antara dua organisme berbeda spesies yang hidup berdekatan. Ada beberapa jenis simbiosis:</p>
<ul>
<li><strong>Simbiosis Mutualisme</strong> &mdash; kedua organisme saling menguntungkan. Contoh: lebah dan bunga. Lebah mendapatkan nektar, bunga terbantu penyerbukannya.</li>
<li><strong>Simbiosis Komensalisme</strong> &mdash; satu organisme diuntungkan, yang lain tidak dirugikan. Contoh: burung yang bersarang di pohon. Burung mendapat tempat tinggal, pohon tidak terpengaruh.</li>
<li><strong>Simbiosis Parasitisme</strong> &mdash; satu organisme diuntungkan dengan merugikan organisme lain. Contoh: nyamuk dan manusia. Nyamuk mendapat darah, manusia gatal dan bisa terkena penyakit.</li>
</ul>

<h3>Jaring-Jaring Makanan</h3>
<p>Jaring-jaring makanan adalah kumpulan beberapa rantai makanan yang saling berhubungan. Dalam jaring-jaring makanan, suatu organisme bisa menjadi bagian dari beberapa rantai makanan sekaligus.</p>

<h3>Energi dalam Ekosistem</h3>
<p>Energi berpindah dari satu tingkat trofik ke tingkat berikutnya. Hanya sekitar 10% energi yang berpindah ke organisme berikutnya, sisanya hilang sebagai panas tubuh.</p>

<h3>Rantai Makanan di Laut</h3>
<p>Fitoplankton &rarr; Zooplankton &rarr; Ikan kecil &rarr; Ikan besar &rarr; Hiu. Setiap tingkat memiliki peran penting dalam menjaga keseimbangan ekosistem laut.</p>

<h3>Faktor yang Mempengaruhi Interaksi</h3>
<p>Interaksi antar organisme dipengaruhi oleh faktor lingkungan seperti ketersediaan makanan, iklim, predator, dan ketersediaan tempat tinggal.</p>',

            3 => '<h3>Bhinneka Tunggal Ika</h3>
<p>Bhinneka Tunggal Ika adalah semboyan negara Indonesia yang berarti &ldquo;Berbeda-beda tetapi tetap satu&rdquo;. Semboyan ini menggambarkan keberagaman suku, agama, ras, dan budaya yang ada di Indonesia.</p>

<h3>Suku Bangsa di Indonesia</h3>
<p>Indonesia memiliki lebih dari 1.300 suku bangsa. Beberapa suku terbesar antara lain:</p>
<ul>
<li><strong>Jawa</strong> &mdash; suku terbesar di Indonesia, mayoritas tinggal di Jawa Tengah dan Jawa Timur</li>
<li><strong>Sunda</strong> &mdash; mendominasi provinsi Jawa Barat dengan budaya yang kaya</li>
<li><strong>Batak</strong> &mdash; dikenal dengan budaya musik dan adat istiadat yang kuat di Sumatera Utara</li>
<li><strong>Minangkabau</strong> &mdash; terkenal dengan budaya matrilineal di Sumatera Barat</li>
<li><strong>Bali</strong> &mdash; mayoritas beragama Hindu dengan seni dan budaya yang terkenal</li>
</ul>

<h3>Agama di Indonesia</h3>
<p>Indonesia mengakui 6 agama resmi: Islam, Kristen Protestan, Katolik, Hindu, Buddha, dan Konghucu. Keberagaman agama ini diatur dalam Pancasila dan UUD 1945.</p>

<h3>Budaya dan Adat Istiadat</h3>
<p>Setiap suku memiliki adat istiadat yang unik, mulai dari upacara adat, pakaian tradisional, tarian, hingga rumah adat. Keberagaman budaya ini merupakan warisan leluhur yang perlu dilestarikan.</p>

<h3>Toleransi dalam Kehidupan Bermasyarakat</h3>
<p>Toleransi adalah sikap menghargai perbedaan yang ada di masyarakat. Contoh toleransi meliputi:</p>
<ul>
<li>Menghargai perayaan hari besar agama lain</li>
<li>Tidak memaksakan kehendak kepada orang lain</li>
<li>Menghormati kebiasaan dan tradisi budaya lain</li>
<li>Bekerja sama meskipun memiliki perbedaan</li>
</ul>

<h3>Peran Pemuda dalam Menjaga Keberagaman</h3>
<p>Pemuda Indonesia memiliki peran penting dalam menjaga keberagaman dengan melestarikan budaya, menjaga toleransi, dan membangun persatuan.</p>',

            4 => '<h3>Tata Bahasa Indonesia</h3>
<p>Memahami struktur kalimat yang benar dalam bahasa Indonesia merupakan keterampilan dasar yang penting untuk komunikasi efektif.</p>

<h3>Jenis Kalimat</h3>
<ul>
<li><strong>Kalimat Berita</strong> &mdash; kalimat yang memberikan informasi. Contoh: &ldquo;Saya pergi ke sekolah.&rdquo;</li>
<li><strong>Kalimat Perintah</strong> &mdash; kalimat yang memberikan instruksi. Contoh: &ldquo;Kerjakan PR-mu!&rdquo;</li>
<li><strong>Kalimat Tanya</strong> &mdash; kalimat yang menanyakan sesuatu. Contoh: &ldquo;Di mana rumahmu?&rdquo;</li>
<li><strong>Kalimat Seru</strong> &mdash; kalimat yang mengungkapkan perasaan. Contoh: &ldquo;Wah, indah sekali!&rdquo;</li>
</ul>

<h3>Struktur Kalimat</h3>
<p>Setiap kalimat dalam bahasa Indonesia minimal memiliki subjek dan predikat (S-P). Kalimat bisa ditambah dengan objek, keterangan, dan pelengkap untuk membentuk kalimat yang lebih lengkap (S-P-O-K).</p>

<h3>Dasar-Dasar English Grammar</h3>
<p>Dalam bahasa Inggris, terdapat beberapa konsep dasar grammar yang harus dipahami:</p>
<ul>
<li><strong>Subject-Verb Agreement</strong> &mdash; subjek dan kata kerja harus sesuai. Contoh: &ldquo;He goes&rdquo; (bukan &ldquo;He go&rdquo;)</li>
<li><strong>Tenses</strong> &mdash; waktu kejadian (past, present, future). Contoh: &ldquo;I ate&rdquo; (past), &ldquo;I eat&rdquo; (present), &ldquo;I will eat&rdquo; (future)</li>
<li><strong>Articles</strong> &mdash; a, an, the. Gunakan &ldquo;a&rdquo; sebelum konsonan, &ldquo;an&rdquo; sebelum vokal</li>
</ul>

<h3>Tips Belajar Bahasa</h3>
<ul>
<li>Rutin membaca dan menulis dalam bahasa target</li>
<li>Mendengarkan podcast atau menonton video dalam bahasa asing</li>
<li>Latihan percakapan dengan native speaker atau teman</li>
<li>Membuat catatan kosakata baru setiap hari</li>
</ul>',

            5 => '<h3>Teknik Pomodoro</h3>
<p>Teknik Pomodoro adalah metode manajemen waktu yang dikembangkan oleh Francesco Cirillo. Metode ini menggunakan timer untuk memecah kerja menjadi interval 25 menit yang dipisahkan oleh istirahat pendek.</p>
<p>Cara menggunakan Teknik Pomodoro:</p>
<ol>
<li>Pilih tugas yang akan dikerjakan</li>
<li>Atur timer selama 25 menit (1 Pomodoro)</li>
<li>Fokus bekerja sampai timer berbunyi</li>
<li>Istirahat selama 5 menit</li>
<li>Setelah 4 Pomodoro, istirahat lebih lama (15-30 menit)</li>
</ol>

<h3>Eisenhower Matrix</h3>
<p>Eisenhower Matrix membantu memprioritaskan tugas berdasarkan urgensi dan kepentingan:</p>
<ul>
<li><strong>Quadrant 1 (Urgent + Important)</strong> &mdash; kerjakan segera. Contoh: deadline tugas</li>
<li><strong>Quadrant 2 (Not Urgent + Important)</strong> &mdash; jadwalkan. Contoh: olahraga, belajar</li>
<li><strong>Quadrant 3 (Urgent + Not Important)</strong> &mdash; delegasikan. Contoh: email yang tidak penting</li>
<li><strong>Quadrant 4 (Not Urgent + Not Important)</strong> &mdash; hilangkan. Contoh: scrolling social media</li>
</ul>

<h3>Metode Belajar Efektif</h3>
<ul>
<li><strong>Active Recall</strong> &mdash; aktif mengingat materi tanpa melihat catatan</li>
<li><strong>Spaced Repetition</strong> &mdash; mengulang materi dalam interval waktu yang meningkat</li>
<li><strong>Blurting</strong> &mdash; menulis ulang materi dari ingatan tanpa melihat catatan</li>
<li><strong>Belajar dengan Mengajar</strong> &mdash; menjelaskan materi kepada orang lain</li>
</ul>

<h3>Manajemen Distraksi</h3>
<p>Untuk belajar lebih efektif, minimalkan distraksi:</p>
<ul>
<li>Matikan notifikasi HP atau gunakan mode pesawat</li>
<li>Buat jadwal belajar yang konsisten setiap hari</li>
<li>Pilih tempat belajar yang tenang dan nyaman</li>
<li>Siapkan semua bahan belajar sebelum memulai</li>
</ul>

<h3>Goal Setting (SMART)</h3>
<p>Buatlah tujuan belajar yang SMART: Specific (spesifik), Measurable (terukur), Achievable (dapat dicapai), Relevant (relevan), Time-bound (batas waktu).</p>',

            6 => '<h3>Apa itu HTML?</h3>
<p>HTML (HyperText Markup Language) adalah bahasa markup standar untuk membuat halaman web. HTML mendefinisikan struktur dan konten halaman web menggunakan elemen-elemen yang disebut tag.</p>

<h3>Struktur Dasar HTML</h3>
<p>Setiap dokumen HTML memiliki struktur dasar berikut:</p>
<p><code>&lt;!DOCTYPE html&gt;</code> &mdash; mendeklarasikan bahwa dokumen ini adalah HTML5.</p>
<p><code>&lt;html&gt;</code> &mdash; elemen root yang membungkus seluruh konten halaman.</p>
<p><code>&lt;head&gt;</code> &mdash; berisi informasi metadata seperti title, charset, dan CSS.</p>
<p><code>&lt;body&gt;</code> &mdash; berisi konten yang terlihat oleh pengguna.</p>

<h3>Tag HTML Penting</h3>
<ul>
<li><strong>&lt;h1&gt; hingga &lt;h6&gt;</strong> &mdash; heading dari terbesar (h1) hingga terkecil (h6)</li>
<li><strong>&lt;p&gt;</strong> &mdash; paragraf teks</li>
<li><strong>&lt;a&gt;</strong> &mdash; tautan/link (href untuk URL tujuan)</li>
<li><strong>&lt;img&gt;</strong> &mdash; gambar (src untuk sumber gambar, alt untuk teks alternatif)</li>
<li><strong>&lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;</strong> &mdash; list (unordered, ordered, dan item)</li>
<li><strong>&lt;div&gt;</strong> &mdash; kontainer untuk mengelompokkan elemen</li>
<li><strong>&lt;span&gt;</strong> &mdash; inline container untuk styling sebagian teks</li>
<li><strong>&lt;table&gt;</strong> &mdash; tabel data</li>
<li><strong>&lt;form&gt;</strong> &mdash; form untuk input data</li>
</ul>

<h3>Attribute HTML</h3>
<p>Attribute memberikan informasi tambahan pada elemen HTML. Contoh:</p>
<ul>
<li><code>href</code> &mdash; pada tag &lt;a&gt;, menentukan URL tujuan tautan</li>
<li><code>src</code> &mdash; pada tag &lt;img&gt;, menentukan sumber gambar</li>
<li><code>alt</code> &mdash; pada tag &lt;img&gt;, teks alternatif jika gambar tidak bisa ditampilkan</li>
<li><code>class</code> &mdash; untuk CSS styling</li>
<li><code>id</code> &mdash; identifikasi unik untuk elemen</li>
</ul>

<h3>Semantik HTML5</h3>
<p>HTML5 memperkenalkan tag semantik yang lebih bermakna:</p>
<ul>
<li><strong>&lt;header&gt;</strong> &mdash; bagian header halaman</li>
<li><strong>&lt;nav&gt;</strong> &mdash; navigasi</li>
<li><strong>&lt;main&gt;</strong> &mdash; konten utama</li>
<li><strong>&lt;section&gt;</strong> &mdash; seksi konten</li>
<li><strong>&lt;article&gt;</strong> &mdash; artikel independen</li>
<li><strong>&lt;footer&gt;</strong> &mdash; bagian footer halaman</li>
</ul>

<h3>Contoh Halaman HTML Sederhana</h3>
<p>Berikut contoh halaman HTML sederhana dengan struktur yang benar dan semantic tags.</p>',

            7 => '<h3>Apa itu CSS?</h3>
<p>CSS (Cascading Style Sheets) adalah bahasa yang digunakan untuk mengatur tampilan dan layout halaman web. CSS memisahkan presentasi dari struktur HTML.</p>

<h3>Cara Menggunakan CSS</h3>
<ul>
<li><strong>Inline CSS</strong> &mdash; menggunakan atribut style pada tag HTML. Contoh: <code>&lt;p style=&quot;color: red;&quot;&gt;Teks merah&lt;/p&gt;</code></li>
<li><strong>Internal CSS</strong> &mdash; menggunakan tag &lt;style&gt; di dalam &lt;head&gt;. Cocok untuk satu halaman.</li>
<li><strong>External CSS</strong> &mdash; menggunakan file .css terpisah yang dihubungkan dengan tag &lt;link&gt;. Paling direkomendasikan.</li>
</ul>

<h3>Syntax CSS</h3>
<p>CSS terdiri dari selector dan declaration block. Selector menentukan elemen mana yang akan di-styling, sedangkan declaration block berisi properti dan nilainya.</p>
<p>Contoh: <code>h1 { color: blue; font-size: 24px; }</code></p>

<h3>Jenis Selector</h3>
<ul>
<li><strong>Element Selector</strong> &mdash; memilih berdasarkan nama tag. Contoh: <code>p { }</code></li>
<li><strong>Class Selector</strong> &mdash; memilih berdasarkan class. Contoh: <code>.btn { }</code></li>
<li><strong>ID Selector</strong> &mdash; memilih berdasarkan id. Contoh: <code>#header { }</code></li>
<li><strong>Attribute Selector</strong> &mdash; memilih berdasarkan atribut. Contoh: <code>input[type=&quot;text&quot;] { }</code></li>
<li><strong>Pseudo-class</strong> &mdash; memilih state tertentu. Contoh: <code>a:hover { }</code></li>
</ul>

<h3>Box Model</h3>
<p>Setiap elemen HTML memiliki box model yang terdiri dari:</p>
<ul>
<li><strong>Content</strong> &mdash; isi elemen (teks, gambar)</li>
<li><strong>Padding</strong> &mdash; ruang antara content dan border</li>
<li><strong>Border</strong> &mdash; garis tepi elemen</li>
<li><strong>Margin</strong> &mdash; ruang antara elemen dengan elemen lain</li>
</ul>

<h3>Layout dengan Flexbox</h3>
<p>Flexbox adalah metode layout modern untuk mengatur elemen dalam satu arah (baris atau kolom). Properti penting Flexbox:</p>
<ul>
<li><code>display: flex</code> &mdash; mengaktifkan flexbox</li>
<li><code>justify-content</code> &mdash; perataan horizontal</li>
<li><code>align-items</code> &mdash; perataan vertikal</li>
<li><code>flex-direction</code> &mdash; arah layout (row/column)</li>
<li><code>gap</code> &mdash; jarak antar elemen</li>
</ul>

<h3>Responsive Design</h3>
<p>Membuat desain yang responsif menggunakan media query agar tampilan optimal di berbagai ukuran layar.</p>',

            8 => '<h3>Apa itu JavaScript?</h3>
<p>JavaScript adalah bahasa pemrograman yang digunakan untuk membuat halaman web menjadi interaktif. JavaScript berjalan di browser dan bisa mengubah konten HTML, merespon event, dan berkomunikasi dengan server.</p>

<h3>Variabel dan Tipe Data</h3>
<ul>
<li><strong>let</strong> &mdash; mendeklarasikan variabel yang bisa diubah nilainya</li>
<li><strong>const</strong> &mdash; mendeklarasikan variabel yang tidak bisa diubah</li>
<li><strong>var</strong> &mdash; cara lama mendeklarasikan variabel (tidak direkomendasikan)</li>
</ul>
<p>Tipe data dalam JavaScript: <code>string</code> (teks), <code>number</code> (angka), <code>boolean</code> (true/false), <code>array</code> (daftar), <code>object</code> (kumpulan properti), <code>null</code>, dan <code>undefined</code>.</p>

<h3>Operator</h3>
<ul>
<li><strong>Aritmatika</strong>: + (tambah), - (kurang), * (kali), / (bagi), % (sisa bagi)</li>
<li><strong>Perbandingan</strong>: == (sama dengan), === (strict equal), != (tidak sama), &gt;, &lt;</li>
<li><strong>Logika</strong>: &amp;&amp; (AND), || (OR), ! (NOT)</li>
</ul>

<h3>Conditional (Percabangan)</h3>
<p>Menggunakan <code>if...else</code> untuk mengambil keputusan berdasarkan kondisi tertentu.</p>
<p>Contoh:</p>
<p><code>if (nilai &gt;= 70) { console.log(&quot;Lulus&quot;); } else { console.log(&quot;Tidak lulus&quot;); }</code></p>

<h3>Loop (Perulangan)</h3>
<ul>
<li><strong>for loop</strong> &mdash; mengulang sejumlah tertentu</li>
<li><strong>while loop</strong> &mdash; mengulang selama kondisi terpenuhi</li>
<li><strong>forEach</strong> &mdash; mengulang setiap elemen array</li>
</ul>

<h3>Function (Fungsi)</h3>
<p>Fungsi adalah blok kode yang bisa dipanggil berulang kali. Fungsi membantu mengorganisasi kode dan menghindari pengulangan.</p>
<p><code>function sapa(nama) { return &quot;Halo, &quot; + nama; }</code></p>

<h3>DOM Manipulation</h3>
<p>JavaScript bisa mengubah elemen HTML menggunakan DOM (Document Object Model):</p>
<ul>
<li><code>document.getElementById()</code> &mdash; memilih elemen berdasarkan ID</li>
<li><code>document.querySelector()</code> &mdash; memilih elemen berdasarkan selector CSS</li>
<li><code>.textContent</code> &mdash; mengubah teks elemen</li>
<li><code>.addEventListener()</code> &mdash; menambahkan event listener</li>
</ul>',

            9 => '<h3>Apa itu PHP?</h3>
<p>PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang digunakan untuk membuat halaman web dinamis. PHP berjalan di server dan menghasilkan HTML yang dikirim ke browser pengguna.</p>

<h3>Syntax Dasar PHP</h3>
<p>PHP ditulis dalam tag <code>&lt;?php ... ?&gt;</code>. Setiap pernyataan diakhiri dengan tanda titik koma (;).</p>
<p>Contoh: <code>&lt;?php echo &quot;Halo Dunia!&quot;; ?&gt;</code></p>

<h3>Variabel di PHP</h3>
<p>Variabel di PHP dimulai dengan tanda $ diikuti nama variabel. PHP bersifat loose typing, sehingga tidak perlu mendeklarasikan tipe data.</p>
<p><code>$nama = &quot;Budi&quot;; $umur = 20; $sudah_lulus = false;</code></p>

<h3>Tipe Data</h3>
<ul>
<li><strong>string</strong> &mdash; teks dalam tanda kutip. Contoh: &quot;Halo&quot;</li>
<li><strong>integer</strong> &mdash; bilangan bulat. Contoh: 42</li>
<li><strong>float/double</strong> &mdash; bilangan desimal. Contoh: 3.14</li>
<li><strong>boolean</strong> &mdash; true atau false</li>
<li><strong>array</strong> &mdash; kumpulan data. Contoh: [1, 2, 3]</li>
<li><strong>null</strong> &mdash; nilai kosong</li>
</ul>

<h3>Kondisional</h3>
<p>PHP menggunakan <code>if, elseif, else</code> untuk percabangan:</p>
<p><code>if ($nilai &gt;= 90) { $grade = &quot;A&quot;; } elseif ($nilai &gt;= 80) { $grade = &quot;B&quot;; } else { $grade = &quot;C&quot;; }</code></p>

<h3>Perulangan</h3>
<ul>
<li><strong>for</strong> &mdash; perulangan dengan counter. <code>for ($i = 0; $i &lt; 10; $i++) { ... }</code></li>
<li><strong>while</strong> &mdash; perulangan selama kondisi terpenuhi</li>
<li><strong>foreach</strong> &mdash; perulangan untuk array. <code>foreach ($data as $item) { ... }</code></li>
</ul>

<h3>Function</h3>
<p>Fungsi di PHP dideklarasikan dengan kata kunci <code>function</code>:</p>
<p><code>function tambah($a, $b) { return $a + $b; }</code></p>

<h3>PHP dan HTML</h3>
<p>PHP sering digabungkan dengan HTML untuk membuat halaman dinamis. Variabel PHP bisa ditampilkan di dalam HTML.</p>',

            10 => '<h3>Apa itu Python?</h3>
<p>Python adalah bahasa pemrograman tingkat tinggi yang terkenal karena sintaksnya yang sederhana dan mudah dipahami. Python digunakan untuk web development, data science, artificial intelligence, automation, dan masih banyak lagi.</p>

<h3>Variabel dan Tipe Data</h3>
<p>Python tidak memerlukan deklarasi tipe data. Cukup tentukan nama variabel dan nilainya.</p>
<ul>
<li><code>nama = &quot;Andi&quot;</code> &mdash; string</li>
<li><code>umur = 20</code> &mdash; integer</li>
<li><code>tinggi = 170.5</code> &mdash; float</li>
<li><code>aktif = True</code> &mdash; boolean</li>
<li><code>hobi = [&quot;coding&quot;, &quot;baca&quot;, &quot;game&quot;]</code> &mdash; list</li>
</ul>

<h3>Operator</h3>
<ul>
<li><strong>Aritmatika</strong>: +, -, *, /, //(bagi bulat), %(sisa bagi), **(pangkat)</li>
<li><strong>Perbandingan</strong>: ==, !=, &gt;, &lt;, &gt;=, &lt;=</li>
<li><strong>Logika</strong>: and, or, not</li>
</ul>

<h3>Kondisional</h3>
<p>Python menggunakan <code>if, elif, else</code> dengan indentasi wajib:</p>
<p><code>if nilai &gt;= 90:<br>    grade = &quot;A&quot;<br>elif nilai &gt;= 80:<br>    grade = &quot;B&quot;<br>else:<br>    grade = &quot;C&quot;</code></p>

<h3>Perulangan</h3>
<ul>
<li><strong>for loop</strong> &mdash; mengulang item dalam iterable. <code>for i in range(10):</code></li>
<li><strong>while loop</strong> &mdash; mengulang selama kondisi True. <code>while x &lt; 10:</code></li>
</ul>

<h3>Function</h3>
<p>Fungsi dideklarasikan dengan <code>def</code>:</p>
<p><code>def sapa(nama):<br>    return f&quot;Halo, {nama}!&quot;</code></p>

<h3>List Comprehension</h3>
<p>Cara singkat membuat list dalam Python:</p>
<p><code>squares = [x**2 for x in range(10)]</code></p>

<h3>File Handling</h3>
<p>Python bisa membaca dan menulis file dengan mudah menggunakan <code>open()</code>, <code>read()</code>, dan <code>write()</code>.</p>',

            11 => '<h3>Apa itu Database?</h3>
<p>Database adalah kumpulan data yang terstruktur dan tersimpan secara sistematis. Database memungkinkan kita menyimpan, mengambil, dan mengelola data secara efisien.</p>

<h3>Jenis-Jenis Database</h3>
<ul>
<li><strong>Relational Database (SQL)</strong> &mdash; menyimpan data dalam tabel dengan hubungan antar tabel. Contoh: MySQL, PostgreSQL, SQLite</li>
<li><strong>NoSQL Database</strong> &mdash; menyimpan data dalam format fleksibel. Contoh: MongoDB, Redis, Firebase</li>
</ul>

<h3>Perintah SQL Dasar</h3>
<ul>
<li><strong>SELECT</strong> &mdash; mengambil data. <code>SELECT * FROM users;</code></li>
<li><strong>INSERT</strong> &mdash; menambah data. <code>INSERT INTO users (name, email) VALUES (&#039;Budi&#039;, &#039;budi@email.com&#039;);</code></li>
<li><strong>UPDATE</strong> &mdash; mengubah data. <code>UPDATE users SET name = &#039;Andi&#039; WHERE id = 1;</code></li>
<li><strong>DELETE</strong> &mdash; menghapus data. <code>DELETE FROM users WHERE id = 1;</code></li>
</ul>

<h3>WHERE Clause</h3>
<p>Filter data menggunakan WHERE:</p>
<p><code>SELECT * FROM users WHERE age &gt;= 18 AND city = &#039;Jakarta&#039;;</code></p>

<h3>ORDER BY dan LIMIT</h3>
<ul>
<li><strong>ORDER BY</strong> &mdash; mengurutkan data. <code>SELECT * FROM users ORDER BY name ASC;</code></li>
<li><strong>LIMIT</strong> &mdash; membatasi jumlah hasil. <code>SELECT * FROM users LIMIT 10;</code></li>
</ul>

<h3>JOIN</h3>
<p>JOIN digabungkan data dari dua atau lebih tabel:</p>
<ul>
<li><strong>INNER JOIN</strong> &mdash; hanya data yang cocok di kedua tabel</li>
<li><strong>LEFT JOIN</strong> &mdash; semua data dari tabel kiri, cocok dari tabel kanan</li>
<li><strong>RIGHT JOIN</strong> &mdash; semua data dari tabel kanan, cocok dari tabel kiri</li>
</ul>

<h3>Primary Key dan Foreign Key</h3>
<ul>
<li><strong>Primary Key</strong> &mdash; kolom unik yang mengidentifikasi setiap baris (contoh: id)</li>
<li><strong>Foreign Key</strong> &mdash; kolom yang merujuk ke primary key tabel lain untuk membuat relasi</li>
</ul>

<h3>Normalization</h3>
<p>Normalization adalah proses mengorganisasi database untuk mengurangi redundansi data dan meningkatkan integritas data.</p>',

            12 => '<h3>Apa itu Git?</h3>
<p>Git adalah sistem kontrol versi distribusi yang digunakan untuk melacak perubahan pada kode sumber selama pengembangan perangkat lunak. Git memungkinkan beberapa pengembang bekerja bersama pada proyek yang sama.</p>

<h3>Perintah Git Dasar</h3>
<ul>
<li><code>git init</code> &mdash; membuat repository Git baru</li>
<li><code>git clone &lt;url&gt;</code> &mdash; menyalin repository dari remote</li>
<li><code>git add .</code> &mdash; menambahkan semua perubahan ke staging area</li>
<li><code>git commit -m &quot;pesan&quot;</code> &mdash; menyimpan perubahan ke repository lokal</li>
<li><code>git push</code> &mdash; mengirim perubahan ke remote repository</li>
<li><code>git pull</code> &mdash; mengambil perubahan dari remote repository</li>
</ul>

<h3>Branching (Cabang)</h3>
<p>Branch memungkinkan kita membuat salinan kode untuk fitur baru tanpa mengganggu kode utama:</p>
<ul>
<li><code>git branch &lt;nama-branch&gt;</code> &mdash; membuat branch baru</li>
<li><code>git checkout &lt;nama-branch&gt;</code> &mdash; pindah ke branch</li>
<li><code>git merge &lt;nama-branch&gt;</code> &mdash; menggabungkan branch ke branch saat ini</li>
<li><code>git branch -d &lt;nama-branch&gt;</code> &mdash; menghapus branch</li>
</ul>

<h3>Apa itu GitHub?</h3>
<p>GitHub adalah platform hosting repository Git berbasis cloud. GitHub memungkinkan kolaborasi tim, code review, dan manajemen proyek.</p>

<h3>Alur Kerja Git dan GitHub</h3>
<ol>
<li>Buat repository di GitHub</li>
<li>Clone repository ke komputer lokal</li>
<li>Buat branch baru untuk fitur</li>
<li>Kode dan commit perubahan</li>
<li>Push ke GitHub</li>
<li>Buat Pull Request untuk review</li>
<li>Merge ke branch utama (main/master)</li>
</ol>

<h3>.gitignore</h3>
<p>File .gitignore memberitahu Git file atau folder mana yang tidak perlu di-track. Contoh: vendor/, node_modules/, .env</p>

<h3>Commit Message yang Baik</h3>
<p>Tulis pesan commit yang jelas dan singkat. Gunakan imperatif: &ldquo;Add user authentication&rdquo;, &ldquo;Fix login bug&rdquo;, &ldquo;Update README&rdquo;.</p>',

            13 => '<h3>Apa itu UI/UX Design?</h3>
<p>UI (User Interface) Design adalah proses mendesain antarmuka pengguna aplikasi atau website. UX (User Experience) Design adalah proses meningkatkan kepuasan pengguna melalui pengalaman yang mudah dan menyenangkan saat menggunakan produk.</p>

<h3>Prinsip Desain UI</h3>
<ul>
<li><strong>Consistency</strong> &mdash; konsistensi warna, tipografi, dan elemen di seluruh desain</li>
<li><strong>Hierarchy</strong> &mdash; urutan visual yang menunjukkan mana yang paling penting</li>
<li><strong>Whitespace</strong> &mdash; ruang kosong yang memberikan napas pada desain</li>
<li><strong>Contrast</strong> &mdash; perbedaan yang cukup antara elemen untuk keterbacaan</li>
<li><strong>Alignment</strong> &mdash; elemen disejajarkan dengan rapi</li>
</ul>

<h3>Prinsip Desain UX</h3>
<ul>
<li><strong>User Research</strong> &mdash; memahami kebutuhan dan perilaku pengguna</li>
<li><strong>Information Architecture</strong> &mdash; mengorganisasi konten secara logis</li>
<li><strong>Wireframing</strong> &mdash; membuat kerangka layout sebelum desain visual</li>
<li><strong>Prototyping</strong> &mdash; membuat model interaktif untuk testing</li>
<li><strong>Usability Testing</strong> &mdash; menguji desain dengan pengguna nyata</li>
</ul>

<h3>Warna dalam Desain</h3>
<ul>
<li><strong>Primary Color</strong> &mdash; warna utama brand (misal: biru untuk Facebook)</li>
<li><strong>Secondary Color</strong> &mdash; warna pendukung</li>
<li><strong>Accent Color</strong> &mdash; warna untuk CTA (Call to Action) tombol</li>
<li><strong>Neutral Colors</strong> &mdash; putih, abu-abu, hitam untuk teks dan background</li>
</ul>

<h3>Tipografi</h3>
<ul>
<li>Pilih font yang mudah dibaca (sans-serif untuk digital)</li>
<li>Batasi penggunaan font maksimal 2-3 jenis</li>
<li>Gunakan ukuran yang cukup (body text minimal 16px)</li>
<li>Perhatikan line height untuk kenyamanan membaca</li>
</ul>

<h3>Menggunakan Figma</h3>
<p>Figma adalah tools desain UI/UX berbasis browser. Fitur utama Figma:</p>
<ul>
<li><strong>Frame</strong> &mdash; container untuk desain halaman</li>
<li><strong>Auto Layout</strong> &mdash; layout otomatis yang responsif</li>
<li><strong>Components</strong> &mdash; elemen desain yang bisa digunakan berulang</li>
<li><strong>Prototype</strong> &mdash; membuat simulasi interaksi</li>
<li><strong>Dev Mode</strong> &mdash; mode untuk developer melihat spesifikasi desain</li>
</ul>

<h3>Design System</h3>
<p>Design system adalah kumpulan aturan, komponen, dan pedoman desain yang digunakan secara konsisten dalam sebuah produk. Contoh: Material Design (Google), Human Interface Guidelines (Apple).</p>',
        ];

        foreach ($contents as $id => $content) {
            DB::table('materials')->where('id', $id)->update(['content' => $content]);
        }

        $this->command->info('All 13 materials updated with comprehensive content.');
    }
}
