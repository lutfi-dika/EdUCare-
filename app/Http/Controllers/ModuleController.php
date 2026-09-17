<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    protected static $courses = [];
    protected static $initialized = false;

    protected static function init()
    {
        if (self::$initialized) return;
        self::$initialized = true;

        self::$courses = [
            // =============================================
            // COURSE 1: WEB DEVELOPMENT DASAR
            // =============================================
            1 => [
                'id' => 1,
                'title' => 'Web Development Dasar',
                'slug' => 'web-development-dasar',
                'category' => 'Web Development',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Belajar dasar pengembangan website dari nol. Kamu akan memahami HTML, CSS, JavaScript, dan membuat website sederhana.',
                'short_description' => 'Belajar HTML, CSS, dan JavaScript untuk membuat website pertamamu.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '135 menit',
                'total_lessons' => 45,
                'icon' => 'code',
                'color' => '#2563EB',
                'objectives' => [
                    'Memahami konsep dasar website dan cara kerjanya',
                    'Menguasai HTML untuk membuat struktur halaman web',
                    'Menguasai CSS untuk mempercantik tampilan website',
                    'Membuat layout website yang responsive',
                    'Membuat website sederhana dari awal',
                ],
                'prerequisites' => [
                    'Tidak diperlukan pengalaman sebelumnya',
                    'Memiliki browser (Chrome/Firefox/Edge)',
                    'Memahami penggunaan komputer dasar',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Web',
                        'description' => 'Memahami konsep dasar dunia web.',
                        'icon' => 'globe',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Website?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Pengertian Website', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Jenis-jenis Website', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Cara Kerja Website',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Client dan Server', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'HTTP dan HTTPS', 'duration' => '10 menit', 'status' => 'locked'],
                                    5 => ['id' => 5, 'title' => 'Domain dan Hosting', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'HTML Dasar',
                        'description' => 'Menguasai HTML untuk membuat struktur halaman web.',
                        'icon' => 'file-code',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Struktur HTML',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    6 => ['id' => 6, 'title' => 'Tag Dasar HTML', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Struktur Dokumen HTML', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Elemen HTML',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'Heading dan Paragraph', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Link dan Image', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'List dan Table', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'HTML Lanjutan',
                        'description' => 'Menguasai elemen HTML lanjutan.',
                        'icon' => 'file-code',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Form HTML',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Input Form', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Select dan Textarea', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Form Validation', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Semantic HTML',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'Semantic Elements', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'Accessibility', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'CSS Dasar',
                        'description' => 'Memahami dasar CSS untuk styling website.',
                        'icon' => 'palette',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Pengenalan CSS',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    16 => ['id' => 16, 'title' => 'Cara Kerja CSS', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'Selector CSS', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Properti CSS',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    18 => ['id' => 18, 'title' => 'Warna dan Background', 'duration' => '10 menit', 'status' => 'locked'],
                                    19 => ['id' => 19, 'title' => 'Typography', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'Box Model', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'CSS Layout',
                        'description' => 'Menguasai layout website dengan CSS.',
                        'icon' => 'layout',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Flexbox',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    21 => ['id' => 21, 'title' => 'Dasar Flexbox', 'duration' => '10 menit', 'status' => 'locked'],
                                    22 => ['id' => 22, 'title' => 'Flexbox Layout', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'CSS Grid',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    23 => ['id' => 23, 'title' => 'Dasar CSS Grid', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Grid Layout', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'CSS Responsive',
                        'description' => 'Membuat website yang responsive di semua device.',
                        'icon' => 'smartphone',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Media Query',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'Dasar Media Query', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Breakpoints', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Mobile First',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'Konsep Mobile First', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'Praktik Responsive Design', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'JavaScript Dasar',
                        'description' => 'Memahami dasar pemrograman JavaScript.',
                        'icon' => 'zap',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Pengenalan JavaScript',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    29 => ['id' => 29, 'title' => 'Cara Kerja JavaScript', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'Variable dan Tipe Data', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Operator dan Kondisi',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'Operator JavaScript', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'If-Else Statement', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'JavaScript DOM',
                        'description' => 'Manipulasi halaman web dengan JavaScript DOM.',
                        'icon' => 'zap',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'DOM Manipulation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'Mengakses Elemen DOM', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'Mengubah Konten HTML', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Event Handling',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'Event Listener', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Event Object', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'JavaScript Lanjutan',
                        'description' => 'Konsep JavaScript lanjutan untuk web interaktif.',
                        'icon' => 'zap',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Function dan Array',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Function Declaration', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Array Methods', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Async JavaScript',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'Callback dan Promise', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'Fetch API', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Project Akhir',
                        'description' => 'Membuat website lengkap dari awal.',
                        'icon' => 'rocket',
                        'duration' => '1.5 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Perencanaan Project',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    41 => ['id' => 41, 'title' => 'Wireframe dan Desain', 'duration' => '10 menit', 'status' => 'locked'],
                                    42 => ['id' => 42, 'title' => 'Struktur File', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Pembuatan Website',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    43 => ['id' => 43, 'title' => 'Membuat Halaman Utama', 'duration' => '10 menit', 'status' => 'locked'],
                                    44 => ['id' => 44, 'title' => 'Adding Interactivity', 'duration' => '10 menit', 'status' => 'locked'],
                                    45 => ['id' => 45, 'title' => 'Deployment', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Web Development Dasar',
                    'description' => 'Uji pemahamanmu tentang Web Development Dasar.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa kepanjangan HTML?', 'options' => ['A' => 'HyperText Markup Language', 'B' => 'High Text Machine Language', 'C' => 'Hyperlink Text Markup Language', 'D' => 'Home Tool Markup Language', ], 'correct' => 'A', 'explanation' => 'HTML adalah kepanjangan dari HyperText Markup Language.'],
                        2 => ['question' => 'Tag HTML untuk membuat paragraf adalah?', 'options' => ['A' => '<div>', 'B' => '<p>', 'C' => '<span>', 'D' => '<br>', ], 'correct' => 'B', 'explanation' => 'Tag <p> digunakan untuk membuat paragraf di HTML.'],
                        3 => ['question' => 'Apa fungsi CSS?', 'options' => ['A' => 'Membuat struktur halaman', 'B' => 'Membuat interaktivitas', 'C' => 'Menampilkan data dari server', 'D' => 'Mengatur tampilan dan styling', ], 'correct' => 'D', 'explanation' => 'CSS berfungsi untuk mengatur tampilan dan styling halaman web.'],
                        4 => ['question' => 'Manakah yang merupakan CSS Framework?', 'options' => ['A' => 'React', 'B' => 'Node.js', 'C' => 'Tailwind CSS', 'D' => 'Express.js', ], 'correct' => 'C', 'explanation' => 'Tailwind CSS adalah CSS Framework utility-first untuk styling.'],
                        5 => ['question' => 'Apa yang dimaksud dengan responsive design?', 'options' => ['A' => 'Website yang cepat', 'B' => 'Website yang dapat menyesuaikan tampilan di berbagai ukuran layar', 'C' => 'Website yang memiliki banyak animasi', 'D' => 'Website yang menggunakan banyak warna', ], 'correct' => 'B', 'explanation' => 'Responsive design adalah desain yang menyesuaikan tampilan di berbagai ukuran layar.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 2: JAVASCRIPT FUNDAMENTAL
            // =============================================
            2 => [
                'id' => 2,
                'title' => 'JavaScript Fundamental',
                'slug' => 'javascript-fundamental',
                'category' => 'Programming',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Kuasai JavaScript dari dasar hingga lanjutan. Belajar variable, function, DOM, async programming, dan ES6+ features.',
                'short_description' => 'Belajar JavaScript dari nol sampai mahir.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '156 menit',
                'total_lessons' => 52,
                'icon' => 'zap',
                'color' => '#F59E0B',
                'objectives' => [
                    'Memahami konsep dasar JavaScript',
                    'Menguasai variable, tipe data, dan operator',
                    'Membuat function dan scope',
                    'Memanipulasi DOM dengan JavaScript',
                    'Menggunakan async/await dan fetch API',
                ],
                'prerequisites' => [
                    'Pemahaman dasar HTML',
                    'Pemahaman dasar CSS',
                    'Text editor (VS Code)',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan JavaScript',
                        'description' => 'Memahami apa itu JavaScript dan cara menggunakannya.',
                        'icon' => 'zap',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu JavaScript?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Sejarah JavaScript', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'JavaScript di Browser', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Setup Development',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Chrome DevTools Console', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Menulis Kode Pertama', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Variable dan Tipe Data',
                        'description' => 'Memahami variable dan tipe data di JavaScript.',
                        'icon' => 'database',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Variable',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'var, let, const', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'Naming Convention', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Tipe Data',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    7 => ['id' => 7, 'title' => 'Primitive Types', 'duration' => '10 menit', 'status' => 'locked'],
                                    8 => ['id' => 8, 'title' => 'Object dan Array', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Type Conversion', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Operator',
                        'description' => 'Menguasai berbagai operator di JavaScript.',
                        'icon' => 'terminal',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Operator Aritmatika',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    10 => ['id' => 10, 'title' => 'Operator Dasar', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'Operator Perbandingan', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Operator Logika',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    12 => ['id' => 12, 'title' => 'AND, OR, NOT', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Operator Bitwise', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Kondisi dan Percabangan',
                        'description' => 'Membuat keputusan dalam program JavaScript.',
                        'icon' => 'git-branch',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'If-Else',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'If Statement', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'If-Else-If', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Ternary Operator', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Switch Statement',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'Switch Case', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'Switch vs If-Else', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Loop',
                        'description' => 'Mengenal perulangan di JavaScript.',
                        'icon' => 'repeat',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Loop Dasar',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'For Loop', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'While Loop', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'Do-While Loop', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Loop Lanjutan',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'For...of Loop', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'For...in Loop', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'forEach', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Function',
                        'description' => 'Membuat dan menggunakan function di JavaScript.',
                        'icon' => 'zap',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Function Dasar',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'Function Declaration', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Function Expression', 'duration' => '10 menit', 'status' => 'locked'],
                                    27 => ['id' => 27, 'title' => 'Arrow Function', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Parameter dan Return',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    28 => ['id' => 28, 'title' => 'Default Parameter', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'Rest Parameter', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'Return Value', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Array dan Object',
                        'description' => 'Mengelola data dengan array dan object.',
                        'icon' => 'list',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Array',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'Membuat Array', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'Array Methods (map, filter, reduce)', 'duration' => '10 menit', 'status' => 'locked'],
                                    33 => ['id' => 33, 'title' => 'Spread Operator', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Object',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    34 => ['id' => 34, 'title' => 'Membuat Object', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'Destructuring Object', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Object Method', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'DOM Manipulation',
                        'description' => 'Manipulasi halaman web dengan JavaScript.',
                        'icon' => 'layout',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Mengakses DOM',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'querySelector', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'getElementById', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'DOM Tree', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Mengubah DOM',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'innerHTML vs textContent', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'createElement', 'duration' => '10 menit', 'status' => 'locked'],
                                    42 => ['id' => 42, 'title' => 'appendChild', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Event Handling',
                        'description' => 'Menangani event di JavaScript.',
                        'icon' => 'activity',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Event Dasar',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    43 => ['id' => 43, 'title' => 'Event Listener', 'duration' => '10 menit', 'status' => 'locked'],
                                    44 => ['id' => 44, 'title' => 'Mouse Events', 'duration' => '10 menit', 'status' => 'locked'],
                                    45 => ['id' => 45, 'title' => 'Keyboard Events', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Event Propagation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    46 => ['id' => 46, 'title' => 'Bubbling dan Capturing', 'duration' => '10 menit', 'status' => 'locked'],
                                    47 => ['id' => 47, 'title' => 'Event Delegation', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Async JavaScript',
                        'description' => 'Belajar asynchronous programming di JavaScript.',
                        'icon' => 'clock',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Callback dan Promise',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    48 => ['id' => 48, 'title' => 'Callback Function', 'duration' => '10 menit', 'status' => 'locked'],
                                    49 => ['id' => 49, 'title' => 'Promise Object', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Async/Await',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    50 => ['id' => 50, 'title' => 'Async Function', 'duration' => '10 menit', 'status' => 'locked'],
                                    51 => ['id' => 51, 'title' => 'Fetch API', 'duration' => '10 menit', 'status' => 'locked'],
                                    52 => ['id' => 52, 'title' => 'Error Handling', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz JavaScript Fundamental',
                    'description' => 'Uji pemahamanmu tentang JavaScript Fundamental.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Perbedaan antara let, const, dan var?', 'options' => ['A' => 'Sama saja', 'B' => 'let dan const memiliki block scope, var memiliki function scope', 'C' => 'var adalah yang terbaru', 'D' => 'const bisa diubah nilainya', ], 'correct' => 'B', 'explanation' => 'let dan const memiliki block scope, sedangkan var memiliki function scope.'],
                        2 => ['question' => 'Apa output dari typeof null?', 'options' => ['A' => '\"null\"', 'B' => '\"undefined\"', 'C' => '\"object\"', 'D' => '\"boolean\"', ], 'correct' => 'C', 'explanation' => 'typeof null mengembalikan \"object\" karena bug historis di JavaScript.'],
                        3 => ['question' => 'Metode array untuk membuat array baru berdasarkan kondisi?', 'options' => ['A' => '.map()', 'B' => '.filter()', 'C' => '.reduce()', 'D' => '.forEach()', ], 'correct' => 'B', 'explanation' => '.filter() membuat array baru dengan elemen yang memenuhi kondisi.'],
                        4 => ['question' => 'Apa yang dilakukan oleh async keyword?', 'options' => ['A' => 'Membuat fungsi berjalan cepat', 'B' => 'Membuat fungsi mengembalikan Promise', 'C' => 'Membuat fungsi menjadi synchronous', 'D' => 'Menghentikan eksekusi fungsi', ], 'correct' => 'B', 'explanation' => 'async keyword membuat fungsi selalu mengembalikan Promise.'],
                        5 => ['question' => 'Apa kegunaan arrow function?', 'options' => ['A' => 'Membuat loop', 'B' => 'Membuat sintaks function yang lebih ringkas', 'C' => 'Membuat variabel baru', 'D' => 'Membuat kelas', ], 'correct' => 'B', 'explanation' => 'Arrow function adalah sintaks yang lebih ringkas untuk menulis fungsi.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 3: UI/UX DESIGN
            // =============================================
            3 => [
                'id' => 3,
                'title' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
                'category' => 'UI/UX Design',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar-dasar UI/UX Design. Dari user research hingga membuat prototipe interaktif.',
                'short_description' => 'Belajar mendesain antarmuka yang menarik dan mudah digunakan.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '123 menit',
                'total_lessons' => 41,
                'icon' => 'palette',
                'color' => '#8B5CF6',
                'objectives' => [
                    'Memahami perbedaan UI dan UX',
                    'Melakukan user research',
                    'Membuat wireframe dan prototype',
                    'Menerapkan design system',
                    'Menguji kegunaan desain',
                ],
                'prerequisites' => [
                    'Ketertarikan pada desain',
                    'Kreativitas tinggi',
                    'Tidak perlu pengalaman desain sebelumnya',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan UI/UX',
                        'description' => 'Memahami konsep dasar UI dan UX.',
                        'icon' => 'eye',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'UI vs UX',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Pengertian UI Design', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Pengertian UX Design', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Proses Desain',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Design Thinking', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Double Diamond Model', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'User Research',
                        'description' => 'Memahami kebutuhan user melalui riset.',
                        'icon' => 'users',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Metode Riset',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'User Interview', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'Survey dan Questionnaire', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Analisis Data',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    7 => ['id' => 7, 'title' => 'User Persona', 'duration' => '10 menit', 'status' => 'locked'],
                                    8 => ['id' => 8, 'title' => 'User Journey Map', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Information Architecture',
                        'description' => 'Mengorganisasi konten website secara efektif.',
                        'icon' => 'layers',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Struktur Informasi',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    9 => ['id' => 9, 'title' => 'Card Sorting', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'Sitemap', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Navigasi',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Jenis Navigasi', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Menu Design', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Wireframing',
                        'description' => 'Membuat kerangka desain sebelum visual.',
                        'icon' => 'layout',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Low-Fidelity Wireframe',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    13 => ['id' => 13, 'title' => 'Paper Wireframe', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'Digital Wireframe', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Wireframe Tools',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    15 => ['id' => 15, 'title' => 'Figma Wireframe', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Best Practices', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Visual Design Principles',
                        'description' => 'Prinsip-prinsip dasar desain visual.',
                        'icon' => 'palette',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Prinsip Desain',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'Color Theory', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'Typography', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Layout & Spacing',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'Grid System', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'White Space', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'Visual Hierarchy', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Design System',
                        'description' => 'Membangun sistem desain yang konsisten.',
                        'icon' => 'grid',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Component Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'Button dan Input', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'Card dan Modal', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Style Guide',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    24 => ['id' => 24, 'title' => 'Color Palette', 'duration' => '10 menit', 'status' => 'locked'],
                                    25 => ['id' => 25, 'title' => 'Typography Scale', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Prototyping',
                        'description' => 'Membuat prototipe interaktif untuk testing.',
                        'icon' => 'play',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Prototyping di Figma',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    26 => ['id' => 26, 'title' => 'Auto Layout', 'duration' => '10 menit', 'status' => 'locked'],
                                    27 => ['id' => 27, 'title' => 'Interactive Components', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Micro Interactions',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    28 => ['id' => 28, 'title' => 'Animation Design', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'Transition Effects', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Responsive Design',
                        'description' => 'Mendesain untuk berbagai ukuran layar.',
                        'icon' => 'smartphone',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Mobile Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    30 => ['id' => 30, 'title' => 'Mobile-First Approach', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'Touch Targets', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Adaptive Layout',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    32 => ['id' => 32, 'title' => 'Breakpoints', 'duration' => '10 menit', 'status' => 'locked'],
                                    33 => ['id' => 33, 'title' => 'Flexible Grid', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Usability Testing',
                        'description' => 'Menguji kegunaan desain dengan user.',
                        'icon' => 'check-circle',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Metode Testing',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    34 => ['id' => 34, 'title' => 'Usability Testing', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'A/B Testing', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Analisis Hasil',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    36 => ['id' => 36, 'title' => 'Heatmap Analysis', 'duration' => '10 menit', 'status' => 'locked'],
                                    37 => ['id' => 37, 'title' => 'Iterasi Desain', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Portfolio & Presentasi',
                        'description' => 'Menyajikan hasil desain dalam portofolio.',
                        'icon' => 'briefcase',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Case Study',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    38 => ['id' => 38, 'title' => 'Membuat Case Study', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'Presentasi Desain', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Portofolio Online',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'Membangun Portfolio', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Personal Branding', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz UI/UX Design',
                    'description' => 'Uji pemahamanmu tentang UI/UX Design.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Perbedaan utama UI dan UX?', 'options' => ['A' => 'Sama saja', 'B' => 'UI adalah tampilan visual, UX adalah pengalaman pengguna', 'C' => 'UX hanya untuk website', 'D' => 'UI lebih penting dari UX', ], 'correct' => 'B', 'explanation' => 'UI berfokus pada tampilan visual, UX berfokus pada pengalaman pengguna secara keseluruhan.'],
                        2 => ['question' => 'Apa itu user persona?', 'options' => ['A' => 'Foto user', 'B' => 'Representasi fiksi dari user ideal', 'C' => 'Data statistik user', 'D' => 'Feedback dari user', ], 'correct' => 'B', 'explanation' => 'User persona adalah representasi fiksi yang mendeskripsikan user ideal berdasarkan riset.'],
                        3 => ['question' => 'Wireframe berfungsi untuk?', 'options' => ['A' => 'Menghias website', 'B' => 'Membuat visual akhir', 'C' => 'Membuat kerangka layout sebelum visual', 'D' => 'Coding website', ], 'correct' => 'C', 'explanation' => 'Wireframe adalah kerangka layout yang menunjukkan struktur halaman tanpa detail visual.'],
                        4 => ['question' => 'Apa itu design system?', 'options' => ['A' => 'Software desain', 'B' => 'Kumpulan komponen dan aturan desain yang konsisten', 'C' => 'Tim desain', 'D' => 'Proses desain', ], 'correct' => 'B', 'explanation' => 'Design system adalah kumpulan komponen, aturan, dan panduan untuk menjaga konsistensi desain.'],
                        5 => ['question' => 'User journey map berfungsi untuk?', 'options' => ['A' => 'Menggambar peta', 'B' => 'Visualisasi pengalaman user dari awal hingga akhir', 'C' => 'Membuat routing website', 'D' => 'Tracking user analytics', ], 'correct' => 'B', 'explanation' => 'User journey map memvisualisasikan langkah-langkah dan pengalaman user dalam mencapai tujuan.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 4: AI DASAR
            // =============================================
            4 => [
                'id' => 4,
                'title' => 'AI Dasar',
                'slug' => 'ai-dasar',
                'category' => 'Artificial Intelligence',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar-dasar Artificial Intelligence. Memahami konsep AI, machine learning, neural network, dan ethical AI.',
                'short_description' => 'Mengenal AI dan penerapannya di dunia nyata.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '132 menit',
                'total_lessons' => 44,
                'icon' => 'cpu',
                'color' => '#EC4899',
                'objectives' => [
                    'Memahami pengertian dan sejarah AI',
                    'Mengenal jenis-jenis AI',
                    'Memahami konsep Machine Learning',
                    'Mengenal Neural Network',
                    'Memahami etika dalam penggunaan AI',
                ],
                'prerequisites' => [
                    'Dasar matematika',
                    'Ketertarikan pada teknologi',
                    'Kemauan belajar tinggi',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan AI',
                        'description' => 'Memahami apa itu AI dan sejarahnya.',
                        'icon' => 'cpu',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu AI?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Definisi Artificial Intelligence', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Sejarah Perkembangan AI', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Jenis-jenis AI',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Narrow AI vs General AI', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'AI vs Machine Learning vs Deep Learning', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Machine Learning',
                        'description' => 'Memahami konsep dasar machine learning.',
                        'icon' => 'brain',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Konsep Dasar ML',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'Supervised Learning', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'Unsupervised Learning', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Reinforcement Learning', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Algoritma ML',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'Linear Regression', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Decision Tree', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'K-Nearest Neighbors', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Data untuk AI',
                        'description' => 'Memahami peran data dalam AI/ML.',
                        'icon' => 'database',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Jenis Data',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Structured vs Unstructured Data', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Data Preprocessing', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Feature Engineering',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    13 => ['id' => 13, 'title' => 'Feature Selection', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'Feature Extraction', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Neural Network',
                        'description' => 'Memahami jaringan saraf tiruan.',
                        'icon' => 'network',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Dasar Neural Network',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    15 => ['id' => 15, 'title' => 'Perceptron', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Activation Function', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Deep Learning',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'CNN untuk Gambar', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'RNN untuk Teks', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'NLP',
                        'description' => 'Natural Language Processing untuk teks.',
                        'icon' => 'message-square',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Dasar NLP',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'Text Processing', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'Sentiment Analysis', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'NLP Modern',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    21 => ['id' => 21, 'title' => 'Transformer Model', 'duration' => '10 menit', 'status' => 'locked'],
                                    22 => ['id' => 22, 'title' => 'ChatGPT dan LLM', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Computer Vision',
                        'description' => 'AI untuk pengolahan gambar dan video.',
                        'icon' => 'eye',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Image Processing',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    23 => ['id' => 23, 'title' => 'Image Classification', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Object Detection', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Applications',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'Face Recognition', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Self-Driving Cars', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Generative AI',
                        'description' => 'Mengenal generative AI dan kemampuannya.',
                        'icon' => 'sparkles',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Jenis Generative AI',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'Text Generation', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'Image Generation', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Tools Populer',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    29 => ['id' => 29, 'title' => 'ChatGPT', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'DALL-E', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'Midjourney', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'AI di Indonesia',
                        'description' => 'Penerapan AI di Indonesia.',
                        'icon' => 'map-pin',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Industri AI',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    32 => ['id' => 32, 'title' => 'AI di Fintech', 'duration' => '10 menit', 'status' => 'locked'],
                                    33 => ['id' => 33, 'title' => 'AI di Healthcare', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Peluang Karir',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    34 => ['id' => 34, 'title' => 'AI Researcher', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'ML Engineer', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Data Scientist', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Ethical AI',
                        'description' => 'Etika penggunaan AI dalam kehidupan.',
                        'icon' => 'shield',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Tantangan Etis',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Bias dalam AI', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Privacy dan Security', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Responsible AI',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'Fairness dan Transparency', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'AI Governance', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Hands-on AI',
                        'description' => 'Praktik langsung dengan tools AI.',
                        'icon' => 'terminal',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'AI Tools',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    41 => ['id' => 41, 'title' => 'Google Colab', 'duration' => '10 menit', 'status' => 'locked'],
                                    42 => ['id' => 42, 'title' => 'TensorFlow Playground', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Mini Project',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    43 => ['id' => 43, 'title' => 'Building a Chatbot', 'duration' => '10 menit', 'status' => 'locked'],
                                    44 => ['id' => 44, 'title' => 'Image Classifier', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz AI Dasar',
                    'description' => 'Uji pemahamanmu tentang AI Dasar.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu Machine Learning?', 'options' => ['A' => 'Mesin belajar', 'B' => 'Cabang AI yang memungkinkan sistem belajar dari data', 'C' => 'Program komputer', 'D' => 'Database', ], 'correct' => 'B', 'explanation' => 'Machine Learning adalah cabang AI yang memungkinkan sistem belajar dan meningkatkan performa dari data tanpa diprogram secara eksplisit.'],
                        2 => ['question' => 'Supervised Learning menggunakan?', 'options' => ['A' => 'Data tanpa label', 'B' => 'Data dengan label', 'C' => 'Data acak', 'D' => 'Tidak ada data', ], 'correct' => 'B', 'explanation' => 'Supervised Learning menggunakan data yang sudah dilabeli untuk melatih model.'],
                        3 => ['question' => 'Apa fungsi Neural Network?', 'options' => ['A' => 'Menyimpan data', 'B' => 'Menghubungkan komputer', 'C' => 'Mensimulasikan cara kerja otak manusia', 'D' => 'Menghitung angka', ], 'correct' => 'C', 'explanation' => 'Neural Network mensimulasikan cara kerja jaringan saraf otak manusia untuk memproses informasi.'],
                        4 => ['question' => 'Apa itu NLP?', 'options' => ['A' => 'Natural Processing Language', 'B' => 'Natural Language Processing', 'C' => 'New Language Program', 'D' => 'Network Language Protocol', ], 'correct' => 'B', 'explanation' => 'NLP adalah Natural Language Processing, cabang AI untuk memproses dan memahami bahasa manusia.'],
                        5 => ['question' => 'Contoh penerapan Computer Vision?', 'options' => ['A' => 'Voice recognition', 'B' => 'Face recognition', 'C' => 'Text analysis', 'D' => 'Music generation', ], 'correct' => 'B', 'explanation' => 'Face recognition adalah contoh penerapan Computer Vision untuk mengenali wajah dari gambar/video.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 5: PYTHON DASAR
            // =============================================
            5 => [
                'id' => 5,
                'title' => 'Python Dasar',
                'slug' => 'python-dasar',
                'category' => 'Programming',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Belajar Python dari nol. Bahasa pemrograman yang mudah dipelajari dan serbaguna untuk berbagai kebutuhan.',
                'short_description' => 'Belajar bahasa pemrograman Python dari dasar.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '132 menit',
                'total_lessons' => 44,
                'icon' => 'terminal',
                'color' => '#22C55E',
                'objectives' => [
                    'Memahami dasar Python',
                    'Menguasai variable dan tipe data',
                    'Membuat program dengan kontrol alur',
                    'Menggunakan function dan module',
                    'Membuat program Python sederhana',
                ],
                'prerequisites' => [
                    'Tidak perlu pengalaman coding sebelumnya',
                    'Komputer dengan Python terinstall',
                    'Kemauan belajar tinggi',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Python',
                        'description' => 'Memahami dasar Python dan cara menggunakannya.',
                        'icon' => 'terminal',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Python?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Kelebihan Python', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Setup Python', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Program Pertama',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Hello World', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Comment di Python', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Variable dan Tipe Data',
                        'description' => 'Mengenal variable dan tipe data di Python.',
                        'icon' => 'database',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Variable',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'Deklarasi Variable', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'Naming Convention', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Tipe Data',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    7 => ['id' => 7, 'title' => 'int, float, str, bool', 'duration' => '10 menit', 'status' => 'locked'],
                                    8 => ['id' => 8, 'title' => 'Type Casting', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'f-string', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Operator',
                        'description' => 'Menguasai operator di Python.',
                        'icon' => 'terminal',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Operator Dasar',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    10 => ['id' => 10, 'title' => 'Aritmatika', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'Perbandingan', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Logika', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Operator Khusus',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    13 => ['id' => 13, 'title' => 'Assignment Operator', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'Membership Operator', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Kondisi',
                        'description' => 'Membuat keputusan dalam program.',
                        'icon' => 'git-branch',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'If Statement',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    15 => ['id' => 15, 'title' => 'if, elif, else', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Nested If', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Match Case',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'Pattern Matching', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'Switch Case Python 3.10+', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Loop',
                        'description' => 'Mengenal perulangan di Python.',
                        'icon' => 'repeat',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'For Loop',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'range()', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'Iterating List', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'While Loop',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    21 => ['id' => 21, 'title' => 'While Dasar', 'duration' => '10 menit', 'status' => 'locked'],
                                    22 => ['id' => 22, 'title' => 'Break dan Continue', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Function',
                        'description' => 'Membuat function di Python.',
                        'icon' => 'zap',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Function Dasar',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    23 => ['id' => 23, 'title' => 'def Keyword', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Parameter dan Return', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Lambda Function',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'Lambda Expression', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Map dan Filter', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'List dan Dictionary',
                        'description' => 'Mengelola data dengan struktur data Python.',
                        'icon' => 'list',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'List',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'Membuat List', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'List Methods', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'List Comprehension', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Dictionary',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    30 => ['id' => 30, 'title' => 'Membuat Dictionary', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'Dictionary Methods', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'Iterating Dictionary', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'String Processing',
                        'description' => 'Memproses dan memanipulasi string.',
                        'icon' => 'type',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'String Methods',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'upper, lower, strip', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'split dan join', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'String Formatting',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'f-string', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'format() Method', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'File Handling',
                        'description' => 'Membaca dan menulis file di Python.',
                        'icon' => 'file-text',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Operasi File',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Membaca File', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Menulis File', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Context Manager',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'with Statement', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'Exception Handling', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Mini Project',
                        'description' => 'Membuat program Python sederhana.',
                        'icon' => 'rocket',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Project Kalkulator',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    41 => ['id' => 41, 'title' => 'Kalkulator Sederhana', 'duration' => '10 menit', 'status' => 'locked'],
                                    42 => ['id' => 42, 'title' => 'Kalkulator Lanjutan', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Project To-Do List',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    43 => ['id' => 43, 'title' => 'CLI To-Do List', 'duration' => '10 menit', 'status' => 'locked'],
                                    44 => ['id' => 44, 'title' => 'File Storage', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Python Dasar',
                    'description' => 'Uji pemahamanmu tentang Python Dasar.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Bagaimana cara mencetak output di Python?', 'options' => ['A' => 'echo()', 'B' => 'console.log()', 'C' => 'print()', 'D' => 'System.out.println()', ], 'correct' => 'C', 'explanation' => 'print() adalah fungsi untuk mencetak output di Python.'],
                        2 => ['question' => 'Tipe data untuk bilangan desimal di Python?', 'options' => ['A' => 'int', 'B' => 'float', 'C' => 'decimal', 'D' => 'double', ], 'correct' => 'B', 'explanation' => 'float adalah tipe data untuk bilangan desimal di Python.'],
                        3 => ['question' => 'Symbol komentar satu baris di Python?', 'options' => ['A' => '//', 'B' => '/* */', 'C' => '#', 'D' => '--', ], 'correct' => 'C', 'explanation' => '# digunakan untuk komentar satu baris di Python.'],
                        4 => ['question' => 'Apa output dari \"Hello\"[0:3]?', 'options' => ['A' => 'Hel', 'B' => 'Hell', 'C' => 'Hello', 'D' => 'Error', ], 'correct' => 'A', 'explanation' => 'String slicing [0:3] mengambil karakter dari index 0 sampai 2 (tidak termasuk 3).'],
                        5 => ['question' => 'Fungsi untuk mendapatkan panjang list di Python?', 'options' => ['A' => 'length()', 'B' => 'len()', 'C' => 'size()', 'D' => 'count()', ], 'correct' => 'B', 'explanation' => 'len() digunakan untuk mendapatkan panjang list, string, atau collection lainnya di Python.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 6: CYBER SECURITY DASAR
            // =============================================
            6 => [
                'id' => 6,
                'title' => 'Cyber Security Dasar',
                'slug' => 'cyber-security-dasar',
                'category' => 'Cyber Security',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar-dasar keamanan siber. Memahami ancaman, proteksi data, dan best practices keamanan.',
                'short_description' => 'Belajar melindungi diri dan data dari ancaman siber.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '129 menit',
                'total_lessons' => 43,
                'icon' => 'shield',
                'color' => '#DC2626',
                'objectives' => [
                    'Memahami konsep cyber security',
                    'Mengenal jenis-jenis serangan',
                    'Membuat password yang aman',
                    'Melindungi data pribadi',
                    'Menerapkan security best practices',
                ],
                'prerequisites' => [
                    'Penggunaan komputer dasar',
                    'Penggunaan internet aktif',
                    'Kemauan belajar keamanan',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Cyber Security',
                        'description' => 'Memahami dasar keamanan siber.',
                        'icon' => 'shield',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Cyber Security?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Definisi Cyber Security', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Mengapa Cyber Security Penting', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Jenis Ancaman',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Malware', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Phishing', 'duration' => '10 menit', 'status' => 'locked'],
                                    5 => ['id' => 5, 'title' => 'Social Engineering', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Password Security',
                        'description' => 'Membuat password yang aman dan sulit ditebak.',
                        'icon' => 'key',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Membuat Password Aman',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    6 => ['id' => 6, 'title' => 'Password Best Practices', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Password Manager', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Autentikasi',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'Two-Factor Authentication', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Biometric Authentication', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Network Security',
                        'description' => 'Keamanan jaringan dan internet.',
                        'icon' => 'wifi',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Jaringan dan Protokol',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    10 => ['id' => 10, 'title' => 'TCP/IP Security', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'DNS Security', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Firewall dan VPN',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    12 => ['id' => 12, 'title' => 'Firewall Basics', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Menggunakan VPN', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Web Security',
                        'description' => 'Keamanan website dan aplikasi web.',
                        'icon' => 'globe',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Serangan Web',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'XSS Attack', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'SQL Injection', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'CSRF', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Proteksi Web',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'HTTPS', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'Content Security Policy', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Email Security',
                        'description' => 'Keamanan email dari serangan phishing.',
                        'icon' => 'mail',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Mengenali Phishing',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'Ciri Email Phishing', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'Verifikasi Pengirim', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Email Protection',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    21 => ['id' => 21, 'title' => 'SPF dan DKIM', 'duration' => '10 menit', 'status' => 'locked'],
                                    22 => ['id' => 22, 'title' => 'Email Encryption', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Malware Protection',
                        'description' => 'Melindungi dari virus dan malware.',
                        'icon' => 'alert-triangle',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Jenis Malware',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    23 => ['id' => 23, 'title' => 'Virus', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Trojan', 'duration' => '10 menit', 'status' => 'locked'],
                                    25 => ['id' => 25, 'title' => 'Ransomware', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Antivirus',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    26 => ['id' => 26, 'title' => 'Antivirus Terbaik', 'duration' => '10 menit', 'status' => 'locked'],
                                    27 => ['id' => 27, 'title' => 'Scan dan Cleanup', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Data Privacy',
                        'description' => 'Melindungi data pribadi di internet.',
                        'icon' => 'lock',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Data Pribadi',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    28 => ['id' => 28, 'title' => 'Jenis Data Sensitif', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'Data Protection Laws', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Privacy Settings',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    30 => ['id' => 30, 'title' => 'Social Media Privacy', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'Browser Privacy', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Mobile Security',
                        'description' => 'Keamanan perangkat mobile.',
                        'icon' => 'smartphone',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Ancaman Mobile',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    32 => ['id' => 32, 'title' => 'Malware Android', 'duration' => '10 menit', 'status' => 'locked'],
                                    33 => ['id' => 33, 'title' => 'Malware iOS', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Proteksi Mobile',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    34 => ['id' => 34, 'title' => 'App Permissions', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'Mobile Security Apps', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Security Tools',
                        'description' => 'Tools yang digunakan dalam keamanan siber.',
                        'icon' => 'tool',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Security Scanner',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    36 => ['id' => 36, 'title' => 'Nmap', 'duration' => '10 menit', 'status' => 'locked'],
                                    37 => ['id' => 37, 'title' => 'Wireshark', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Penetration Testing',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    38 => ['id' => 38, 'title' => 'Basic Pentesting', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'Ethical Hacking', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Security Best Practices',
                        'description' => 'Praktik keamanan terbaik untuk semua orang.',
                        'icon' => 'check-circle',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Daily Security',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'Safe Browsing', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Public WiFi Safety', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Incident Response',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    42 => ['id' => 42, 'title' => 'Reporting Breach', 'duration' => '10 menit', 'status' => 'locked'],
                                    43 => ['id' => 43, 'title' => 'Recovery Steps', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Cyber Security Dasar',
                    'description' => 'Uji pemahamanmu tentang Cyber Security.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu phishing?', 'options' => ['A' => 'Teknik memancing ikan', 'B' => 'Serangan social engineering melalui email/pesan palsu', 'C' => 'Jenis virus', 'D' => 'Metode enkripsi', ], 'correct' => 'B', 'explanation' => 'Phishing adalah serangan social engineering yang menggunakan email atau pesan palsu untuk mencuri data sensitif.'],
                        2 => ['question' => 'Cara membuat password yang aman?', 'options' => ['A' => 'Gunakan tanggal lahir', 'B' => 'Gunakan nama hewan peliharaan', 'C' => 'Campuran huruf, angka, dan simbol dengan panjang minimal 12', 'D' => 'Gunakan password 123456', ], 'correct' => 'C', 'explanation' => 'Password aman harus campuran huruf besar/kecil, angka, dan simbol dengan minimal 12 karakter.'],
                        3 => ['question' => 'Apa itu Two-Factor Authentication?', 'options' => ['A' => 'Login dua kali', 'B' => 'Metode autentikasi dengan dua faktor keamanan', 'C' => 'Dua password', 'D' => 'Dua akun', ], 'correct' => 'B', 'explanation' => '2FA adalah metode autentikasi yang membutuhkan dua faktor: sesuatu yang kamu tahu (password) dan sesuatu yang kamu miliki (OTP/token).'],
                        4 => ['question' => 'Bahaya menggunakan WiFi publik tanpa VPN?', 'options' => ['A' => 'Internet lambat', 'B' => 'Data bisa disadap oleh pihak ketiga', 'C' => 'Baterai boros', 'D' => 'Tidak ada bahaya', ], 'correct' => 'B', 'explanation' => 'WiFi publik tanpa VPN rentan terhadap Man-in-the-Middle attack di mana data bisa disadap.'],
                        5 => ['question' => 'Apa itu ransomware?', 'options' => ['A' => 'Virus yang menghapus file', 'B' => 'Malware yang mengenkripsi data dan meminta tebusan', 'C' => 'Program antivirus', 'D' => 'Jenis firewall', ], 'correct' => 'B', 'explanation' => 'Ransomware adalah malware yang mengenkripsi data korban dan meminta tebusan untuk membuka kuncinya.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 7: DATA SCIENCE DASAR
            // =============================================
            7 => [
                'id' => 7,
                'title' => 'Data Science Dasar',
                'slug' => 'data-science-dasar',
                'category' => 'Data Science',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar-dasar Data Science. Dari statistik hingga visualisasi data dengan Python.',
                'short_description' => 'Belajar menganalisis dan memvisualisasikan data.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '132 menit',
                'total_lessons' => 44,
                'icon' => 'database',
                'color' => '#06B6D4',
                'objectives' => [
                    'Memahami konsep Data Science',
                    'Menguasai statistik dasar',
                    'Membuat visualisasi data',
                    'Mengenal Python untuk data analysis',
                    'Membersihkan dan memproses data',
                ],
                'prerequisites' => [
                    'Dasar matematika',
                    'Kemauan belajar tinggi',
                    'Komputer dengan Python terinstall',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Data Science',
                        'description' => 'Memahami apa itu data science.',
                        'icon' => 'database',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Data Science?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Peran Data Scientist', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Tools Data Science', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Data Science Pipeline',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Data Collection', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Data Processing', 'duration' => '10 menit', 'status' => 'locked'],
                                    5 => ['id' => 5, 'title' => 'Model Building', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Statistik Dasar',
                        'description' => 'Memahami statistik untuk analisis data.',
                        'icon' => 'bar-chart',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Statistik Deskriptif',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    6 => ['id' => 6, 'title' => 'Mean, Median, Mode', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Standard Deviation', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Statistik Inferensial',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'Probability', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Hypothesis Testing', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Python untuk Data',
                        'description' => 'Menggunakan Python untuk analisis data.',
                        'icon' => 'terminal',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Pandas',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    10 => ['id' => 10, 'title' => 'DataFrame', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'Data Manipulation', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'NumPy',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    12 => ['id' => 12, 'title' => 'Array Operations', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Mathematical Functions', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Data Cleaning',
                        'description' => 'Membersihkan data sebelum dianalisis.',
                        'icon' => 'tool',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Data Quality',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'Missing Values', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'Duplicate Data', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Data Transformation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    16 => ['id' => 16, 'title' => 'Normalization', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'Encoding Categorical Data', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Exploratory Data Analysis',
                        'description' => 'Eksplorasi data untuk menemukan insight.',
                        'icon' => 'search',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'EDA Techniques',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    18 => ['id' => 18, 'title' => 'Summary Statistics', 'duration' => '10 menit', 'status' => 'locked'],
                                    19 => ['id' => 19, 'title' => 'Data Distribution', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Correlation Analysis',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    20 => ['id' => 20, 'title' => 'Correlation Matrix', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'Feature Relationships', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Visualisasi Data',
                        'description' => 'Membuat grafik dan chart dari data.',
                        'icon' => 'pie-chart',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Matplotlib',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'Line Chart', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'Bar Chart', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Scatter Plot', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Seaborn',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'Heatmap', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Distribution Plot', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'SQL untuk Data Science',
                        'description' => 'Menggunakan SQL untuk query data.',
                        'icon' => 'database',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'SQL Dasar',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'SELECT Query', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'WHERE Clause', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'JOIN', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'SQL Aggregation',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    30 => ['id' => 30, 'title' => 'GROUP BY', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'Subquery', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'Window Functions', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Machine Learning Dasar',
                        'description' => 'Pengenalan ML untuk data science.',
                        'icon' => 'cpu',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'ML Concepts',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'Supervised Learning', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'Model Evaluation', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Regression',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'Linear Regression', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Polynomial Regression', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Storytelling dengan Data',
                        'description' => 'Menyajikan hasil analisis data.',
                        'icon' => 'message-square',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Data Presentation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Dashboard Design', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Insight Communication', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Report Generation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'Jupyter Notebook', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'Data Reports', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Mini Project',
                        'description' => 'Project analisis data nyata.',
                        'icon' => 'rocket',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Data Collection',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    41 => ['id' => 41, 'title' => 'Web Scraping', 'duration' => '10 menit', 'status' => 'locked'],
                                    42 => ['id' => 42, 'title' => 'API Data', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Full Analysis',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    43 => ['id' => 43, 'title' => 'EDA to Visualization', 'duration' => '10 menit', 'status' => 'locked'],
                                    44 => ['id' => 44, 'title' => 'Final Report', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Data Science Dasar',
                    'description' => 'Uji pemahamanmu tentang Data Science.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu Data Science?', 'options' => ['A' => 'Ilmu data biasa', 'B' => 'Interdisipliner yang menggunakan metode ilmiah untuk mengekstrak pengetahuan dari data', 'C' => 'Program komputer', 'D' => 'Database', ], 'correct' => 'B', 'explanation' => 'Data Science adalah bidang interdisipliner yang menggabungkan statistik, ilmu komputer, dan domain knowledge untuk mengekstrak insight dari data.'],
                        2 => ['question' => 'Library Python untuk manipulasi data tabular?', 'options' => ['A' => 'NumPy', 'B' => 'Matplotlib', 'C' => 'Pandas', 'D' => 'Scikit-learn', ], 'correct' => 'C', 'explanation' => 'Pandas adalah library Python utama untuk manipulasi dan analisis data tabular menggunakan DataFrame.'],
                        3 => ['question' => 'Apa fungsi dari EDA?', 'options' => ['A' => 'Membuat model ML', 'B' => 'Eksplorasi data untuk menemukan pola dan insight', 'C' => 'Deploy model', 'D' => 'Membersihkan server', ], 'correct' => 'B', 'explanation' => 'EDA (Exploratory Data Analysis) adalah proses mengeksplorasi data untuk menemukan pola, anomali, dan insight.'],
                        4 => ['question' => 'Cara menangani missing values?', 'options' => ['A' => 'Hapus semua data', 'B' => 'Abaikan', 'C' => 'Imputasi atau hapus baris/kolom', 'D' => 'Ganti dengan 0', ], 'correct' => 'C', 'explanation' => 'Missing values bisa ditangani dengan imputasi (mean, median, modus) atau penghapusan baris/kolom yang tidak lengkap.'],
                        5 => ['question' => 'Library untuk visualisasi data di Python?', 'options' => ['A' => 'Pandas', 'B' => 'NumPy', 'C' => 'Matplotlib/Seaborn', 'D' => 'Flask', ], 'correct' => 'C', 'explanation' => 'Matplotlib dan Seaborn adalah library populer untuk visualisasi data di Python.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 8: MOBILE APP DEVELOPMENT
            // =============================================
            8 => [
                'id' => 8,
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'category' => 'Programming',
                'level' => 'Menengah',
                'level_color' => 'yellow',
                'description' => 'Belajar membuat aplikasi mobile cross-platform dengan React Native. Dari dasar hingga deployment.',
                'short_description' => 'Buat aplikasi mobile untuk Android dan iOS.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '123 menit',
                'total_lessons' => 41,
                'icon' => 'smartphone',
                'color' => '#6366F1',
                'objectives' => [
                    'Memahami konsep mobile development',
                    'Setup React Native environment',
                    'Membuat UI components',
                    'Managing state aplikasi',
                    'Deploy ke App Store/Play Store',
                ],
                'prerequisites' => [
                    'Pemahaman JavaScript dasar',
                    'Pemahaman React basics',
                    'Komputer dengan Node.js terinstall',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan React Native',
                        'description' => 'Memahami dasar React Native.',
                        'icon' => 'smartphone',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu React Native?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'React Native vs Native', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Kelebihan React Native', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Setup Environment',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Installing Expo', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Project Setup', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Core Components',
                        'description' => 'Membuat tampilan aplikasi dengan komponen dasar.',
                        'icon' => 'layout',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Basic Components',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'View dan Text', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'Image dan ScrollView', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Input Components',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    7 => ['id' => 7, 'title' => 'TextInput', 'duration' => '10 menit', 'status' => 'locked'],
                                    8 => ['id' => 8, 'title' => 'Button dan Touchable', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Styling',
                        'description' => 'Mengatur tampilan dengan StyleSheet.',
                        'icon' => 'palette',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'StyleSheet',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    9 => ['id' => 9, 'title' => 'Flexbox Layout', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'Dimensions', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Responsive Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Platform-Specific Code', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Safe Area', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Navigation',
                        'description' => 'Navigasi antar halaman aplikasi.',
                        'icon' => 'compass',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'React Navigation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    13 => ['id' => 13, 'title' => 'Stack Navigator', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'Tab Navigator', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Passing Data',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    15 => ['id' => 15, 'title' => 'Params', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Global State', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'State Management',
                        'description' => 'Mengelola state aplikasi.',
                        'icon' => 'layers',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'useState dan useEffect',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'State Hook', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'Effect Hook', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Context API',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'Creating Context', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'Provider Pattern', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'API Integration',
                        'description' => 'Mengambil dan mengirim data dari/to API.',
                        'icon' => 'cloud',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Fetch API',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    21 => ['id' => 21, 'title' => 'GET Request', 'duration' => '10 menit', 'status' => 'locked'],
                                    22 => ['id' => 22, 'title' => 'POST Request', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Data Handling',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    23 => ['id' => 23, 'title' => 'JSON Parsing', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Error Handling', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Lists and Storage',
                        'description' => 'Menampilkan list data dan storage lokal.',
                        'icon' => 'list',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'FlatList',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'Rendering Lists', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Pull to Refresh', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Local Storage',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'AsyncStorage', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'SQLite', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Native Features',
                        'description' => 'Mengakses fitur native device.',
                        'icon' => 'cpu',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Camera dan Gallery',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    29 => ['id' => 29, 'title' => 'Image Picker', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'Camera API', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Location',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'Geolocation API', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'Maps Integration', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Testing & Debugging',
                        'description' => 'Testing dan debugging aplikasi.',
                        'icon' => 'bug',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Debugging',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'Remote Debugging', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'React DevTools', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Testing',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'Unit Testing', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Component Testing', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Project Akhir',
                        'description' => 'Membuat dan deploy aplikasi mobile.',
                        'icon' => 'rocket',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Build App',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'App Architecture', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Implement Features', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Deployment',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'Build for Android', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'Build for iOS', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'App Store Submission', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Mobile App Development',
                    'description' => 'Uji pemahamanmu tentang Mobile App Development.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa kelebihan React Native?', 'options' => ['A' => 'Hanya untuk Android', 'B' => 'Cross-platform untuk Android dan iOS', 'C' => 'Hanya untuk iOS', 'D' => 'Tidak perlu coding', ], 'correct' => 'B', 'explanation' => 'React Native memungkinkan pembuatan aplikasi cross-platform untuk Android dan iOS dengan satu codebase.'],
                        2 => ['question' => 'Komponen untuk menampilkan list data di React Native?', 'options' => ['A' => 'View', 'B' => 'Text', 'C' => 'FlatList', 'D' => 'Image', ], 'correct' => 'C', 'explanation' => 'FlatList adalah komponen React Native yang dioptimasi untuk menampilkan list data.'],
                        3 => ['question' => 'Library untuk navigasi di React Native?', 'options' => ['A' => 'React Router', 'B' => 'React Navigation', 'C' => 'Express Router', 'D' => 'Vue Router', ], 'correct' => 'B', 'explanation' => 'React Navigation adalah library navigasi populer untuk React Native.'],
                        4 => ['question' => 'Apa itu Expo?', 'options' => ['A' => 'Text editor', 'B' => 'Framework untuk React Native', 'C' => 'Database', 'D' => 'Operating System', ], 'correct' => 'B', 'explanation' => 'Expo adalah framework dan platform untuk React Native yang memudahkanå¼€å‘ dan deployment.'],
                        5 => ['question' => 'Hook untuk side effects di React?', 'options' => ['A' => 'useState', 'B' => 'useEffect', 'C' => 'useContext', 'D' => 'useReducer', ], 'correct' => 'B', 'explanation' => 'useEffect digunakan untuk side effects seperti fetching data, subscriptions, dan DOM manipulation.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 9: DEVOPS DASAR
            // =============================================
            9 => [
                'id' => 9,
                'title' => 'DevOps Dasar',
                'slug' => 'devops-dasar',
                'category' => 'DevOps',
                'level' => 'Menengah',
                'level_color' => 'yellow',
                'description' => 'Pelajari dasar-dasar DevOps. Dari containerization dengan Docker hingga CI/CD pipeline.',
                'short_description' => 'Belajar automasi deployment dan operasi.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '123 menit',
                'total_lessons' => 41,
                'icon' => 'server',
                'color' => '#F97316',
                'objectives' => [
                    'Memahami konsep DevOps',
                    'Menguasai Docker containerization',
                    'Membuat CI/CD pipeline',
                    'Deploy aplikasi ke cloud',
                    'Monitoring aplikasi production',
                ],
                'prerequisites' => [
                    'Pemahaman dasar Linux',
                    'Pengalaman programming',
                    'Pemahaman dasar networking',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan DevOps',
                        'description' => 'Memahami konsep dan budaya DevOps.',
                        'icon' => 'refresh-cw',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu DevOps?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'DevOps Culture', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'DevOps Lifecycle', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'DevOps Tools',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Jenkins', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'GitLab CI', 'duration' => '10 menit', 'status' => 'locked'],
                                    5 => ['id' => 5, 'title' => 'GitHub Actions', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Version Control',
                        'description' => 'Menguasai Git dan version control.',
                        'icon' => 'git-branch',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Git Basics',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    6 => ['id' => 6, 'title' => 'Git Init, Add, Commit', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Branching Strategy', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Git Workflow',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'Merge vs Rebase', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Pull Request', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Linux Basics',
                        'description' => 'Dasar Linux untuk DevOps.',
                        'icon' => 'terminal',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Linux Commands',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    10 => ['id' => 10, 'title' => 'File Operations', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'Process Management', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Shell Scripting',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    12 => ['id' => 12, 'title' => 'Bash Basics', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Automation Scripts', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Docker Dasar',
                        'description' => 'Containerisasi aplikasi dengan Docker.',
                        'icon' => 'box',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Docker Fundamentals',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'Docker Image', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'Docker Container', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Dockerfile',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    16 => ['id' => 16, 'title' => 'Writing Dockerfile', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'Multi-Stage Build', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Docker Compose',
                        'description' => 'Mengelola multi-container apps.',
                        'icon' => 'layers',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Docker Compose',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    18 => ['id' => 18, 'title' => 'compose.yml', 'duration' => '10 menit', 'status' => 'locked'],
                                    19 => ['id' => 19, 'title' => 'Service Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Networking',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    20 => ['id' => 20, 'title' => 'Docker Networks', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'Volume Management', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'CI/CD',
                        'description' => 'Continuous Integration & Deployment.',
                        'icon' => 'git-merge',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'CI Pipeline',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'Build and Test', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'Code Quality Check', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'CD Pipeline',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    24 => ['id' => 24, 'title' => 'Deployment Strategy', 'duration' => '10 menit', 'status' => 'locked'],
                                    25 => ['id' => 25, 'title' => 'Rollback', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Cloud Deployment',
                        'description' => 'Deploy aplikasi ke cloud.',
                        'icon' => 'cloud',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Cloud Platforms',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    26 => ['id' => 26, 'title' => 'AWS EC2', 'duration' => '10 menit', 'status' => 'locked'],
                                    27 => ['id' => 27, 'title' => 'Google Cloud Run', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Container Orchestration',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    28 => ['id' => 28, 'title' => 'Kubernetes Basics', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'Helm Charts', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Monitoring',
                        'description' => 'Monitor aplikasi di production.',
                        'icon' => 'activity',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Monitoring Tools',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    30 => ['id' => 30, 'title' => 'Prometheus', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'Grafana', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Logging',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    32 => ['id' => 32, 'title' => 'ELK Stack', 'duration' => '10 menit', 'status' => 'locked'],
                                    33 => ['id' => 33, 'title' => 'Centralized Logging', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Security in DevOps',
                        'description' => 'Keamanan dalam pipeline DevOps.',
                        'icon' => 'shield',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'DevSecOps',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    34 => ['id' => 34, 'title' => 'Security Scanning', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'Secret Management', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Compliance',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    36 => ['id' => 36, 'title' => 'Infrastructure as Code', 'duration' => '10 menit', 'status' => 'locked'],
                                    37 => ['id' => 37, 'title' => 'Audit Trail', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Project Akhir',
                        'description' => 'Membangun full DevOps pipeline.',
                        'icon' => 'rocket',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Pipeline Setup',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    38 => ['id' => 38, 'title' => 'Git to Deploy Pipeline', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'Automated Testing', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Production Ready',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'Monitoring Setup', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Incident Response', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz DevOps Dasar',
                    'description' => 'Uji pemahamanmu tentang DevOps.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu DevOps?', 'options' => ['A' => 'Software development', 'B' => 'Setå®žè·µ yang menggabungkan development dan operations', 'C' => 'Bahasa pemrograman', 'D' => 'Database', ], 'correct' => 'B', 'explanation' => 'DevOps adalah kumpulan praktik yang menggabungkan pengembangan perangkat lunak (Dev) dan operasi TI (Ops).'],
                        2 => ['question' => 'Apa itu Docker?', 'options' => ['A' => 'Virtual machine', 'B' => 'Platform containerization untuk aplikasi', 'C' => 'Database', 'D' => 'Text editor', ], 'correct' => 'B', 'explanation' => 'Docker adalah platform yang memudahkan pembuatan, deployment, dan menjalankan aplikasi menggunakan container.'],
                        3 => ['question' => 'CI/CD berfungsi untuk?', 'options' => ['A' => 'Coding', 'B' => 'Automasi testing dan deployment', 'C' => 'Desain UI', 'D' => 'Database management', ], 'correct' => 'B', 'explanation' => 'CI/CD memautomasi proses integrasi kode, testing, dan deployment aplikasi.'],
                        4 => ['question' => 'Apa keuntungan container dibanding VM?', 'options' => ['A' => 'Lebih berat', 'B' => 'Lebih ringan dan cepat startup', 'C' => 'Lebih aman', 'D' => 'Lebih mahal', ], 'correct' => 'B', 'explanation' => 'Container lebih ringan dari VM karena berbagi OS kernel, sehingga startup lebih cepat dan resource usage lebih efisien.'],
                        5 => ['question' => 'Apa itu Infrastructure as Code?', 'options' => ['A' => 'Coding untuk infrastructure', 'B' => 'Mengelola infrastructure menggunakan code/manifest', 'C' => 'Bahasa untuk infra', 'D' => 'Database config', ], 'correct' => 'B', 'explanation' => 'IaC adalah pendekatan mengelola dan menyediakan infrastructure melalui machine-readable definition files.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 10: CLOUD COMPUTING DASAR
            // =============================================
            10 => [
                'id' => 10,
                'title' => 'Cloud Computing Dasar',
                'slug' => 'cloud-computing-dasar',
                'category' => 'Cloud',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar Cloud Computing. Memahami layanan cloud, deployment models, dan implementasi AWS.',
                'short_description' => 'Mengenal cloud computing dan layanannya.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '123 menit',
                'total_lessons' => 41,
                'icon' => 'cloud',
                'color' => '#0EA5E9',
                'objectives' => [
                    'Memahami konsep cloud computing',
                    'Mengenal layanan cloud (IaaS, PaaS, SaaS)',
                    'Deploy aplikasi ke AWS',
                    'Mengelola cloud storage',
                    'Memahami cloud security',
                ],
                'prerequisites' => [
                    'Penggunaan komputer dasar',
                    'Pemahaman dasar networking',
                    'Kemauan belajar teknologi cloud',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Cloud',
                        'description' => 'Memahami konsep dasar cloud computing.',
                        'icon' => 'cloud',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Cloud?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Cloud Computing Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Cloud vs Traditional', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Cloud Models',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Public, Private, Hybrid', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Deployment Models', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Cloud Services',
                        'description' => 'Mengenal layanan cloud computing.',
                        'icon' => 'layers',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Service Models',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'IaaS', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'PaaS', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'SaaS', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Use Cases',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'When to Use Each Model', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Real Examples', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'AWS Basics',
                        'description' => 'Mengenal Amazon Web Services.',
                        'icon' => 'server',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'AWS Overview',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    10 => ['id' => 10, 'title' => 'AWS Console', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'AWS CLI Setup', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'EC2',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    12 => ['id' => 12, 'title' => 'Launching Instance', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Security Groups', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Cloud Storage',
                        'description' => 'Penyimpanan data di cloud.',
                        'icon' => 'hard-drive',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'S3 Storage',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'Creating Bucket', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'Upload Object', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Database Services',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    16 => ['id' => 16, 'title' => 'RDS', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'DynamoDB Basics', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Networking',
                        'description' => 'Jaringan di cloud.',
                        'icon' => 'wifi',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'VPC',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    18 => ['id' => 18, 'title' => 'Virtual Private Cloud', 'duration' => '10 menit', 'status' => 'locked'],
                                    19 => ['id' => 19, 'title' => 'Subnets', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Load Balancing',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    20 => ['id' => 20, 'title' => 'ELB', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'Auto Scaling', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Cloud Security',
                        'description' => 'Keamanan di cloud.',
                        'icon' => 'shield',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'IAM',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'Users and Roles', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'Policy Management', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Encryption',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    24 => ['id' => 24, 'title' => 'Data at Rest', 'duration' => '10 menit', 'status' => 'locked'],
                                    25 => ['id' => 25, 'title' => 'Data in Transit', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Serverless',
                        'description' => 'Membuat aplikasi tanpa mengelola server.',
                        'icon' => 'zap',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'AWS Lambda',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    26 => ['id' => 26, 'title' => 'Creating Function', 'duration' => '10 menit', 'status' => 'locked'],
                                    27 => ['id' => 27, 'title' => 'Event Triggers', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'API Gateway',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    28 => ['id' => 28, 'title' => 'REST API', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'WebSocket API', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Cloud Deployment',
                        'description' => 'Deploy aplikasi ke cloud.',
                        'icon' => 'upload-cloud',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Elastic Beanstalk',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    30 => ['id' => 30, 'title' => 'Web App Deployment', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'Environment Config', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Container on Cloud',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    32 => ['id' => 32, 'title' => 'ECS', 'duration' => '10 menit', 'status' => 'locked'],
                                    33 => ['id' => 33, 'title' => 'EKS Basics', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Cost Management',
                        'description' => 'Mengelola biaya cloud.',
                        'icon' => 'dollar-sign',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Pricing Models',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    34 => ['id' => 34, 'title' => 'Pay as You Go', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'Reserved Instances', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Cost Optimization',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    36 => ['id' => 36, 'title' => 'AWS Free Tier', 'duration' => '10 menit', 'status' => 'locked'],
                                    37 => ['id' => 37, 'title' => 'Budget Alerts', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Cloud Architecture',
                        'description' => 'Arsitektur cloud yang baik.',
                        'icon' => 'grid',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Well-Architected Framework',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    38 => ['id' => 38, 'title' => '5 Pillars', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'Best Practices', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Disaster Recovery',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'Backup Strategy', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'High Availability', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Cloud Computing Dasar',
                    'description' => 'Uji pemahamanmu tentang Cloud Computing.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu Cloud Computing?', 'options' => ['A' => 'Komputasi awan', 'B' => 'Layanan computing over internet', 'C' => 'Hardware komputer', 'D' => 'Software installed locally', ], 'correct' => 'B', 'explanation' => 'Cloud Computing adalah penyediaan layanan computing (server, storage, database, etc) melalui internet.'],
                        2 => ['question' => 'Perbedaan IaaS, PaaS, SaaS?', 'options' => ['A' => 'Sama saja', 'B' => 'IaaS = infrastructure, PaaS = platform, SaaS = software', 'C' => 'IaaS = software', 'D' => 'SaaS = infrastructure', ], 'correct' => 'B', 'explanation' => 'IaaS menyediakan infrastructure, PaaS menyediakan platform untuk develop, SaaS menyediakan software langsung digunakan.'],
                        3 => ['question' => 'AWS S3 digunakan untuk?', 'options' => ['A' => 'Computing', 'B' => 'Object storage', 'C' => 'Database', 'D' => 'Networking', ], 'correct' => 'B', 'explanation' => 'AWS S3 (Simple Storage Service) adalah layanan object storage untuk menyimpan dan mengambil data.'],
                        4 => ['question' => 'Apa itu serverless?', 'options' => ['A' => 'Tanpa server', 'B' => 'Membangun aplikasi tanpa mengelola infrastructure', 'C' => 'Server offline', 'D' => 'Local server', ], 'correct' => 'B', 'explanation' => 'Serverless memungkinkan developer membangun aplikasi tanpa mengelola server, provider mengurus scaling dan maintenance.'],
                        5 => ['question' => 'Apa itu AWS EC2?', 'options' => ['A' => 'Storage service', 'B' => 'Elastic Compute Cloud untuk virtual servers', 'C' => 'Database service', 'D' => 'Networking service', ], 'correct' => 'B', 'explanation' => 'EC2 (Elastic Compute Cloud) menyediakan virtual servers (instances) yang bisa dikonfigurasi sesuai kebutuhan.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 11: DATABASE DASAR
            // =============================================
            11 => [
                'id' => 11,
                'title' => 'Database Dasar',
                'slug' => 'database-dasar',
                'category' => 'Programming',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar database dan SQL. Dari konsep relasional hingga query kompleks dan optimasi.',
                'short_description' => 'Belajar mengelola data dengan database SQL.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '162 menit',
                'total_lessons' => 54,
                'icon' => 'database',
                'color' => '#8B5CF6',
                'objectives' => [
                    'Memahami konsep database',
                    'Menguasai SQL dasar hingga lanjutan',
                    'Membuat dan mengelola database MySQL',
                    'Memahami NoSQL database',
                    'Optimasi query performance',
                ],
                'prerequisites' => [
                    'Logika pemrograman dasar',
                    'Penggunaan komputer aktif',
                    'Kemauan belajar',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Database',
                        'description' => 'Memahami konsep dasar database.',
                        'icon' => 'database',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Database?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Database Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Relational vs Non-Relational', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Database Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Entity Relationship', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Normalization', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'SQL Dasar',
                        'description' => 'Belajar SQL dari nol.',
                        'icon' => 'terminal',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'DDL Commands',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'CREATE TABLE', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'ALTER TABLE', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'DROP TABLE', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'DML Commands',
                                'duration' => '40 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'INSERT', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'SELECT', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'UPDATE', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'DELETE', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'SQL Filtering',
                        'description' => 'Filtering dan sorting data.',
                        'icon' => 'search',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'WHERE Clause',
                                'duration' => '40 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    12 => ['id' => 12, 'title' => 'Comparison Operators', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'BETWEEN', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'IN', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'LIKE', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Sorting dan Limiting',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    16 => ['id' => 16, 'title' => 'ORDER BY', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'LIMIT', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'OFFSET', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'SQL JOIN',
                        'description' => 'Menggabungkan data dari beberapa tabel.',
                        'icon' => 'git-merge',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Types of JOIN',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'INNER JOIN', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'LEFT JOIN', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'RIGHT JOIN', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Advanced JOIN',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'FULL JOIN', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'Self Join', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Cross Join', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'SQL Aggregation',
                        'description' => 'Mengelompokkan dan mengagregasi data.',
                        'icon' => 'bar-chart',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Aggregate Functions',
                                'duration' => '50 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'COUNT', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'SUM', 'duration' => '10 menit', 'status' => 'locked'],
                                    27 => ['id' => 27, 'title' => 'AVG', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'MAX', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'MIN', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'GROUP BY',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    30 => ['id' => 30, 'title' => 'Grouping Data', 'duration' => '10 menit', 'status' => 'locked'],
                                    31 => ['id' => 31, 'title' => 'HAVING Clause', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'SQL Lanjutan',
                        'description' => 'Query SQL kompleks.',
                        'icon' => 'zap',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Subquery',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    32 => ['id' => 32, 'title' => 'Subquery in WHERE', 'duration' => '10 menit', 'status' => 'locked'],
                                    33 => ['id' => 33, 'title' => 'Subquery in FROM', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Window Functions',
                                'duration' => '40 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    34 => ['id' => 34, 'title' => 'ROW_NUMBER', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'RANK', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'LAG', 'duration' => '10 menit', 'status' => 'locked'],
                                    37 => ['id' => 37, 'title' => 'LEAD', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'MySQL',
                        'description' => 'Menggunakan MySQL sebagai DBMS.',
                        'icon' => 'server',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'MySQL Setup',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    38 => ['id' => 38, 'title' => 'Installation', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'MySQL Workbench', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'MySQL Features',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'User Management', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Backup and Restore', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'NoSQL',
                        'description' => 'Mengenal database NoSQL.',
                        'icon' => 'layers',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'NoSQL Types',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    42 => ['id' => 42, 'title' => 'Document DB (MongoDB)', 'duration' => '10 menit', 'status' => 'locked'],
                                    43 => ['id' => 43, 'title' => 'Key-Value (Redis)', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'When to Use NoSQL',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    44 => ['id' => 44, 'title' => 'SQL vs NoSQL', 'duration' => '10 menit', 'status' => 'locked'],
                                    45 => ['id' => 45, 'title' => 'Use Cases', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Database Security',
                        'description' => 'Keamanan database.',
                        'icon' => 'shield',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Access Control',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    46 => ['id' => 46, 'title' => 'User Privileges', 'duration' => '10 menit', 'status' => 'locked'],
                                    47 => ['id' => 47, 'title' => 'Role Management', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Data Protection',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    48 => ['id' => 48, 'title' => 'Encryption', 'duration' => '10 menit', 'status' => 'locked'],
                                    49 => ['id' => 49, 'title' => 'SQL Injection Prevention', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Project',
                        'description' => 'Membangun database untuk aplikasi.',
                        'icon' => 'rocket',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Design Database',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    50 => ['id' => 50, 'title' => 'ER Diagram', 'duration' => '10 menit', 'status' => 'locked'],
                                    51 => ['id' => 51, 'title' => 'Schema Design', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Implementation',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    52 => ['id' => 52, 'title' => 'Create Tables', 'duration' => '10 menit', 'status' => 'locked'],
                                    53 => ['id' => 53, 'title' => 'Seed Data', 'duration' => '10 menit', 'status' => 'locked'],
                                    54 => ['id' => 54, 'title' => 'Complex Queries', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Database Dasar',
                    'description' => 'Uji pemahamanmu tentang Database.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu database relasional?', 'options' => ['A' => 'Database tanpa tabel', 'B' => 'Database yang menyimpan data dalam tabel dengan hubungan', 'C' => 'Database cloud', 'D' => 'Database flat file', ], 'correct' => 'B', 'explanation' => 'Database relasional menyimpan data dalam tabel-tabel yang saling berhubungan menggunakan primary dan foreign keys.'],
                        2 => ['question' => 'Perbedaan WHERE dan HAVING?', 'options' => ['A' => 'Sama saja', 'B' => 'WHERE filter baris, HAVING filter group', 'C' => 'HAVING untuk insert', 'D' => 'WHERE untuk delete', ], 'correct' => 'B', 'explanation' => 'WHERE memfilter baris sebelum grouping, HAVING memfilter hasil group setelah GROUP BY.'],
                        3 => ['question' => 'Apa itu primary key?', 'options' => ['A' => 'Kunci utama', 'B' => 'Kolom unik yang mengidentifikasi setiap baris', 'C' => 'Foreign key', 'D' => 'Index', ], 'correct' => 'B', 'explanation' => 'Primary key adalah kolom atau kombinasi kolom yang unik mengidentifikasi setiap baris dalam tabel.'],
                        4 => ['question' => 'INNER JOIN mengembalikan?', 'options' => ['A' => 'Semua data', 'B' => 'Hanya baris yang cocok di kedua tabel', 'C' => 'Semua dari tabel kiri', 'D' => 'Semua dari tabel kanan', ], 'correct' => 'B', 'explanation' => 'INNER JOIN mengembalikan hanya baris yang memiliki kecocokan di kedua tabel.'],
                        5 => ['question' => 'Kapan menggunakan NoSQL?', 'options' => ['A' => 'Untuk data terstruktur sempurna', 'B' => 'Untuk data semi-terstruktur atau unstructured', 'C' => 'Hanya untuk keuangan', 'D' => 'Saat butuh ACID', ], 'correct' => 'B', 'explanation' => 'NoSQL cocok untuk data semi-terstruktur atau tidak terstruktur, dan ketika butuh horizontal scaling.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 12: GAME DEVELOPMENT DASAR
            // =============================================
            12 => [
                'id' => 12,
                'title' => 'Game Development Dasar',
                'slug' => 'game-development-dasar',
                'category' => 'Programming',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar game development. Membuat game 2D dengan pendekatan praktis dari konsep hingga deploy.',
                'short_description' => 'Belajar membuat game dari nol.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '123 menit',
                'total_lessons' => 41,
                'icon' => 'gamepad',
                'color' => '#E11D48',
                'objectives' => [
                    'Memahami konsep game development',
                    'Membuat game 2D sederhana',
                    'Mengenal game mechanics',
                    'Audio dan UI game',
                    'Build dan deploy game',
                ],
                'prerequisites' => [
                    'Dasar pemrograman',
                    'Komputer yang memadai',
                    'Kreativitas dan kesabaran',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Game Dev',
                        'description' => 'Memahami game development dan toolsnya.',
                        'icon' => 'gamepad',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Game Dev?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Game Industry Overview', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Game Engine Selection', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Game Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Game Design Document', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Core Loop Design', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Game Design Fundamentals',
                        'description' => 'Prinsip desain game yang baik.',
                        'icon' => 'palette',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Game Mechanics',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'Rules and Systems', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'Player Motivation', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Level Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    7 => ['id' => 7, 'title' => 'Progression Design', 'duration' => '10 menit', 'status' => 'locked'],
                                    8 => ['id' => 8, 'title' => 'Difficulty Balancing', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => '2D Graphics',
                        'description' => 'Membuat grafik 2D untuk game.',
                        'icon' => 'image',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Sprite Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    9 => ['id' => 9, 'title' => 'Sprite Sheet', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'Animation Frames', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Tilemap',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Tile-based Design', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Level Layout', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Game Physics',
                        'description' => 'Fisika dasar dalam game.',
                        'icon' => 'zap',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Basic Physics',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    13 => ['id' => 13, 'title' => 'Gravity and Velocity', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'Collision Detection', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Physics Engine',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    15 => ['id' => 15, 'title' => 'Rigidbody', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Collider', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Player Controls',
                        'description' => 'Membuat kontrol karakter.',
                        'icon' => 'gamepad',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Input Handling',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'Keyboard Input', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'Touch Input', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Character Controller',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'Movement System', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'Jump Mechanics', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => '2D Game Mechanics',
                        'description' => 'Mekanik game 2D yang menarik.',
                        'icon' => 'settings',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Combat System',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    21 => ['id' => 21, 'title' => 'Health System', 'duration' => '10 menit', 'status' => 'locked'],
                                    22 => ['id' => 22, 'title' => 'Damage System', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Collectibles',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    23 => ['id' => 23, 'title' => 'Power-ups', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'Score System', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Audio in Games',
                        'description' => 'Sound dan musik dalam game.',
                        'icon' => 'volume-2',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Sound Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'Sound Effects', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Background Music', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Audio Implementation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'Audio Manager', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => '3D Audio', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Game UI',
                        'description' => 'User interface untuk game.',
                        'icon' => 'layout',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'HUD Design',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    29 => ['id' => 29, 'title' => 'Health Bar', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'Score Display', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Menu System',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'Main Menu', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'Pause Menu', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Game AI',
                        'description' => 'Artificial Intelligence untuk NPC.',
                        'icon' => 'brain',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Basic AI',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'Patrol Behavior', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'Chase Behavior', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'State Machine',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'Finite State Machine', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Behavior Trees', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Build & Deploy',
                        'description' => 'Export dan publish game.',
                        'icon' => 'package',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Build Settings',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Platform Selection', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Build Optimization', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Publishing',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'Google Play Store', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'Steam', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Web Build', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Game Development Dasar',
                    'description' => 'Uji pemahamanmu tentang Game Development.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu game engine?', 'options' => ['A' => 'Mesin game', 'B' => 'Software framework untuk membuat game', 'C' => 'Hardware gaming', 'D' => 'Database game', ], 'correct' => 'B', 'explanation' => 'Game engine adalah software framework yang menyediakan tools untuk membuat dan mengembangkan game.'],
                        2 => ['question' => 'Sprite dalam game berfungsi untuk?', 'options' => ['A' => 'Sound', 'B' => '2D image yang digunakan di game', 'C' => 'Script', 'D' => '3D model', ], 'correct' => 'B', 'explanation' => 'Sprite adalah 2D image yang digunakan sebagai karakter, objek, atau elemen visual dalam game.'],
                        3 => ['question' => 'Apa itu game loop?', 'options' => ['A' => 'Loop di code', 'B' => 'Siklus utama game yang memproses input, update, dan render', 'C' => 'Level game', 'D' => 'Musik game', ], 'correct' => 'B', 'explanation' => 'Game loop adalah siklus utama yang terus berjalan selama game aktif, memproses input, update state, dan render frame.'],
                        4 => ['question' => 'Collision detection berfungsi untuk?', 'options' => ['A' => 'Menghapus objek', 'B' => 'Mendeteksi tabrakan antar objek game', 'C' => 'Membuat musik', 'D' => 'Mengatur warna', ], 'correct' => 'B', 'explanation' => 'Collision detection mendeteksi ketika dua atau lebih objek dalam game saling bersentuhan atau beririsan.'],
                        5 => ['question' => 'Apa itu HUD?', 'options' => ['A' => 'Head Up Display - informasi yang ditampilkan di layar game', 'B' => 'Hardware', 'C' => 'Sound system', 'D' => 'Game controller', ], 'correct' => 'A', 'explanation' => 'HUD (Heads-Up Display) adalah tampilan informasi di layar game seperti health bar, score, dan mini-map.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 13: BLOCKCHAIN DASAR
            // =============================================
            13 => [
                'id' => 13,
                'title' => 'Blockchain Dasar',
                'slug' => 'blockchain-dasar',
                'category' => 'Blockchain',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar Blockchain. Memahami konsep distributed ledger, cryptocurrency, smart contracts, dan DeFi.',
                'short_description' => 'Mengenal teknologi blockchain dan penerapannya.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '129 menit',
                'total_lessons' => 43,
                'icon' => 'link',
                'color' => '#14B8A6',
                'objectives' => [
                    'Memahami konsep blockchain',
                    'Mengenal cryptocurrency',
                    'Memahami smart contract',
                    'Mengenal DeFi dan NFT',
                    'Memahami keamanan blockchain',
                ],
                'prerequisites' => [
                    'Pemahaman dasar teknologi',
                    'Internet aktif',
                    'Kemauan belajar konsep baru',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Blockchain',
                        'description' => 'Memahami konsep dasar blockchain.',
                        'icon' => 'link',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Blockchain?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Blockchain Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'How Blockchain Works', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Sejarah Blockchain',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Bitcoin Genesis', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Ethereum Launch', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Cryptography',
                        'description' => 'Dasar kriptografi untuk blockchain.',
                        'icon' => 'lock',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Hashing',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'SHA-256', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'Hash Functions', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Public Key Cryptography',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    7 => ['id' => 7, 'title' => 'Private & Public Keys', 'duration' => '10 menit', 'status' => 'locked'],
                                    8 => ['id' => 8, 'title' => 'Digital Signatures', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Consensus Mechanism',
                        'description' => 'Mekanisme kesepakatan dalam blockchain.',
                        'icon' => 'check-circle',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Proof of Work',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    9 => ['id' => 9, 'title' => 'Mining Process', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'Energy Consumption', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Proof of Stake',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Staking', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Validator Nodes', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Cryptocurrency',
                        'description' => 'Memahami cryptocurrency.',
                        'icon' => 'dollar-sign',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Bitcoin',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    13 => ['id' => 13, 'title' => 'Bitcoin Basics', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'Bitcoin Wallet', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Altcoins',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    15 => ['id' => 15, 'title' => 'Ethereum', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Stablecoins', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'Altcoin Landscape', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Smart Contract',
                        'description' => 'Memahami smart contract.',
                        'icon' => 'file-text',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Smart Contract?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    18 => ['id' => 18, 'title' => 'Smart Contract Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    19 => ['id' => 19, 'title' => 'How It Works', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Solidity Basics',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    20 => ['id' => 20, 'title' => 'Contract Structure', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'Functions and Events', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Ethereum & DApps',
                        'description' => 'Membangun decentralized applications.',
                        'icon' => 'cpu',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Ethereum Platform',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'EVM', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'Gas Fees', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'DApp Development',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    24 => ['id' => 24, 'title' => 'Web3.js', 'duration' => '10 menit', 'status' => 'locked'],
                                    25 => ['id' => 25, 'title' => 'MetaMask Integration', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'DeFi',
                        'description' => 'Decentralized Finance.',
                        'icon' => 'trending-up',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'DeFi Concepts',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    26 => ['id' => 26, 'title' => 'Lending & Borrowing', 'duration' => '10 menit', 'status' => 'locked'],
                                    27 => ['id' => 27, 'title' => 'DEX (Decentralized Exchange)', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'DeFi Protocols',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    28 => ['id' => 28, 'title' => 'Uniswap', 'duration' => '10 menit', 'status' => 'locked'],
                                    29 => ['id' => 29, 'title' => 'Aave', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'Compound', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'NFT',
                        'description' => 'Non-Fungible Tokens.',
                        'icon' => 'image',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu NFT?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'NFT Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'ERC-721 Standard', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'NFT Marketplace',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'OpenSea', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'Minting Process', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Blockchain Security',
                        'description' => 'Keamanan dalam blockchain.',
                        'icon' => 'shield',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Security Risks',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'Smart Contract Vulnerabilities', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => '51% Attack', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Best Practices',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Audit Process', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Secure Development', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Blockchain Use Cases',
                        'description' => 'Penerapan blockchain di dunia nyata.',
                        'icon' => 'grid',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Industry Applications',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'Supply Chain', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'Healthcare', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Voting', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Future of Blockchain',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    42 => ['id' => 42, 'title' => 'Web3 Vision', 'duration' => '10 menit', 'status' => 'locked'],
                                    43 => ['id' => 43, 'title' => 'Mainstream Adoption', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Blockchain Dasar',
                    'description' => 'Uji pemahamanmu tentang Blockchain.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu blockchain?', 'options' => ['A' => 'Database biasa', 'B' => 'Distributed ledger yang terdesentralisasi dan transparan', 'C' => 'Software akuntansi', 'D' => 'Jaringan sosial', ], 'correct' => 'B', 'explanation' => 'Blockchain adalah distributed ledger yang terdesentralisasi, di mana data disimpan dalam blok-blok yang terhubung secara kriptografis.'],
                        2 => ['question' => 'Apa itu mining dalam Bitcoin?', 'options' => ['A' => 'Menambang emas', 'B' => 'Proses memvalidasi transaksi dan menambah blok baru', 'C' => 'Mengunduh wallet', 'D' => 'Membeli bitcoin', ], 'correct' => 'B', 'explanation' => 'Mining adalah proses memvalidasi transaksi dan menambah blok baru ke blockchain menggunakan komputasi intensif (Proof of Work).'],
                        3 => ['question' => 'Smart contract berfungsi untuk?', 'options' => ['A' => 'Menyimpan file', 'B' => 'Menjalankan kode otomatis saat kondisi terpenuhi', 'C' => 'Membuat website', 'D' => 'Mengirim email', ], 'correct' => 'B', 'explanation' => 'Smart contract adalah kode yang menjalankan instruksi otomatis saat kondisi tertentu terpenuhi di blockchain.'],
                        4 => ['question' => 'Apa beda Proof of Work dan Proof of Stake?', 'options' => ['A' => 'Sama saja', 'B' => 'PoW pakai komputasi, PoS pakai staking/milik koin', 'C' => 'PoS lebih lambat', 'D' => 'PoW lebih baru', ], 'correct' => 'B', 'explanation' => 'PoW membutuhkan komputasi intensif untuk mining, PoS memilih validator berdasarkan jumlah koin yang di-stake.'],
                        5 => ['question' => 'Apa itu DeFi?', 'options' => ['A' => 'Desentralisasi internet', 'B' => 'Sistem keuangan terdesentralisasi tanpa perantara', 'C' => 'Database keuangan', 'D' => 'Aplikasi mobile banking', ], 'correct' => 'B', 'explanation' => 'DeFi (Decentralized Finance) adalah sistem keuangan terdesentralisasi yang berjalan di blockchain tanpa perantara tradisional.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 14: INTERNET OF THINGS (IOT)
            // =============================================
            14 => [
                'id' => 14,
                'title' => 'Internet of Things (IoT)',
                'slug' => 'internet-of-things',
                'category' => 'Hardware',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar IoT. Menghubungkan perangkat fisik ke internet dengan Arduino dan sensor.',
                'short_description' => 'Buat proyek IoT dengan Arduino dan sensor.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '126 menit',
                'total_lessons' => 42,
                'icon' => 'wifi',
                'color' => '#F59E0B',
                'objectives' => [
                    'Memahami konsep IoT',
                    'Menggunakan Arduino',
                    'Membaca data sensor',
                    'Mengirim data ke cloud',
                    'Membuat proyek IoT',
                ],
                'prerequisites' => [
                    'Dasar elektronik',
                    'Komputer dengan Arduino IDE',
                    'Arduino starter kit',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan IoT',
                        'description' => 'Memahami konsep dasar IoT.',
                        'icon' => 'wifi',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu IoT?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'IoT Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'IoT Ecosystem', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'IoT Applications',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Smart Home', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Industrial IoT', 'duration' => '10 menit', 'status' => 'locked'],
                                    5 => ['id' => 5, 'title' => 'Wearable', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'Arduino Basics',
                        'description' => 'Mengenal Arduino dan cara menggunakannya.',
                        'icon' => 'cpu',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Mengenal Arduino',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    6 => ['id' => 6, 'title' => 'Arduino Board', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Arduino IDE Setup', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Program Pertama',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'Blink LED', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'Digital Read/Write', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Digital Sensors',
                        'description' => 'Menggunakan sensor digital.',
                        'icon' => 'radio',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Sensor Suhu',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    10 => ['id' => 10, 'title' => 'DHT11/DHT22', 'duration' => '10 menit', 'status' => 'locked'],
                                    11 => ['id' => 11, 'title' => 'Temperature Reading', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Sensor Jarak',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    12 => ['id' => 12, 'title' => 'Ultrasonic Sensor', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Distance Measurement', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Analog Sensors',
                        'description' => 'Menggunakan sensor analog.',
                        'icon' => 'activity',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Sensor Cahaya',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'LDR Sensor', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'Light Intensity', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Sensor Potensio',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    16 => ['id' => 16, 'title' => 'Potentiometer', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'Analog Input', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Actuators',
                        'description' => 'Mengontrol perangkat output.',
                        'icon' => 'settings',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Servo Motor',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    18 => ['id' => 18, 'title' => 'Servo Control', 'duration' => '10 menit', 'status' => 'locked'],
                                    19 => ['id' => 19, 'title' => 'Sweeping Motion', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Relay',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    20 => ['id' => 20, 'title' => 'Relay Module', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'AC Device Control', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'IoT Communication',
                        'description' => 'Komunikasi data IoT.',
                        'icon' => 'send',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Serial Communication',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'UART', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'I2C', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => 'SPI', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Wireless',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'WiFi Module (ESP8266)', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Bluetooth', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'IoT Networking',
                        'description' => 'Jaringan untuk perangkat IoT.',
                        'icon' => 'network',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'MQTT Protocol',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'Publish-Subscribe', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'Topic Structure', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'HTTP API',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    29 => ['id' => 29, 'title' => 'REST API', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'JSON Data Format', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Cloud IoT',
                        'description' => 'Mengirim data ke cloud.',
                        'icon' => 'cloud',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Cloud Platforms',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'ThingSpeak', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'Firebase', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Dashboard',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'Data Visualization', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'Real-time Monitoring', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'IoT Security',
                        'description' => 'Keamanan perangkat IoT.',
                        'icon' => 'shield',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Security Challenges',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'Device Security', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Network Security', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Best Practices',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Firmware Updates', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Secure Communication', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'IoT Projects',
                        'description' => 'Membuat proyek IoT lengkap.',
                        'icon' => 'rocket',
                        'duration' => '1 Jam',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Smart Home Project',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    39 => ['id' => 39, 'title' => 'Automatic Light', 'duration' => '10 menit', 'status' => 'locked'],
                                    40 => ['id' => 40, 'title' => 'Temperature Monitor', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Environmental Monitoring',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    41 => ['id' => 41, 'title' => 'Air Quality Sensor', 'duration' => '10 menit', 'status' => 'locked'],
                                    42 => ['id' => 42, 'title' => 'Data Logging', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Internet of Things',
                    'description' => 'Uji pemahamanmu tentang IoT.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu IoT?', 'options' => ['A' => 'Internet of Text', 'B' => 'Jaringan perangkat fisik yang terhubung ke internet', 'C' => 'Software internet', 'D' => 'Jaringan sosial', ], 'correct' => 'B', 'explanation' => 'IoT (Internet of Things) adalah jaringan perangkat fisik yang terhubung ke internet dan dapat bertukar data.'],
                        2 => ['question' => 'Arduino berfungsi untuk?', 'options' => ['A' => 'Menyimpan data', 'B' => 'Mikrokontroler untuk proyek elektronik dan IoT', 'C' => 'Database', 'D' => 'Web browser', ], 'correct' => 'B', 'explanation' => 'Arduino adalah mikrokontroler open-source yang digunakan untuk membuat proyek elektronik dan IoT.'],
                        3 => ['question' => 'Apa itu sensor DHT11?', 'options' => ['A' => 'Sensor cahaya', 'B' => 'Sensor suhu dan kelembaban', 'C' => 'Sensor jarak', 'D' => 'Sensor suara', ], 'correct' => 'B', 'explanation' => 'DHT11 adalah sensor yang mengukur suhu dan kelembaban udara.'],
                        4 => ['question' => 'Protokol MQTT digunakan untuk?', 'options' => ['A' => 'Email', 'B' => 'Komunikasi publish-subscribe untuk IoT', 'C' => 'Video streaming', 'D' => 'File transfer', ], 'correct' => 'B', 'explanation' => 'MQTT adalah protokol komunikasi ringan yang menggunakan model publish-subscribe, cocok untuk IoT.'],
                        5 => ['question' => 'Apa itu ESP8266?', 'options' => ['A' => 'Sensor suhu', 'B' => 'WiFi module untuk menghubungkan Arduino ke internet', 'C' => 'Database module', 'D' => 'Display module', ], 'correct' => 'B', 'explanation' => 'ESP8266 adalah modul WiFi yang memungkinkan Arduino terhubung ke jaringan internet.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 15: NETWORKING DASAR
            // =============================================
            15 => [
                'id' => 15,
                'title' => 'Networking Dasar',
                'slug' => 'networking-dasar',
                'category' => 'Networking',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar jaringan komputer. Dari konsep TCP/IP hingga troubleshoot masalah jaringan.',
                'short_description' => 'Belajar memahami dan mengelola jaringan komputer.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '135 menit',
                'total_lessons' => 45,
                'icon' => 'network',
                'color' => '#3B82F6',
                'objectives' => [
                    'Memahami konsep jaringan',
                    'Menguasai protokol TCP/IP',
                    'Mengenal perangkat jaringan',
                    'Troubleshoot masalah jaringan',
                    'Memahami keamanan jaringan',
                ],
                'prerequisites' => [
                    'Penggunaan komputer dasar',
                    'Penggunaan internet aktif',
                    'Kemauan belajar teknis',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Networking',
                        'description' => 'Memahami konsep dasar jaringan.',
                        'icon' => 'network',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Networking?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Network Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Types of Networks', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Network Models',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'OSI Model', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'TCP/IP Model', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'TCP/IP',
                        'description' => 'Memahami protokol TCP/IP.',
                        'icon' => 'globe',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'IP Addressing',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    5 => ['id' => 5, 'title' => 'IPv4', 'duration' => '10 menit', 'status' => 'locked'],
                                    6 => ['id' => 6, 'title' => 'IPv6', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Subnetting', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'TCP & UDP',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    8 => ['id' => 8, 'title' => 'TCP Protocol', 'duration' => '10 menit', 'status' => 'locked'],
                                    9 => ['id' => 9, 'title' => 'UDP Protocol', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'Port Numbers', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Network Devices',
                        'description' => 'Mengenal perangkat jaringan.',
                        'icon' => 'server',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Basic Devices',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Router', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Switch', 'duration' => '10 menit', 'status' => 'locked'],
                                    13 => ['id' => 13, 'title' => 'Hub', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Advanced Devices',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    14 => ['id' => 14, 'title' => 'Firewall', 'duration' => '10 menit', 'status' => 'locked'],
                                    15 => ['id' => 15, 'title' => 'Access Point', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'Load Balancer', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'LAN & WAN',
                        'description' => 'Jaringan local dan wide area.',
                        'icon' => 'wifi',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'LAN',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    17 => ['id' => 17, 'title' => 'Local Area Network', 'duration' => '10 menit', 'status' => 'locked'],
                                    18 => ['id' => 18, 'title' => 'Ethernet', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'WAN',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    19 => ['id' => 19, 'title' => 'Wide Area Network', 'duration' => '10 menit', 'status' => 'locked'],
                                    20 => ['id' => 20, 'title' => 'VPN Connection', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Wireless Networking',
                        'description' => 'Jaringan nirkabel.',
                        'icon' => 'wifi',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'WiFi Standards',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    21 => ['id' => 21, 'title' => '802.11 Standards', 'duration' => '10 menit', 'status' => 'locked'],
                                    22 => ['id' => 22, 'title' => 'WiFi Security', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Cellular Networks',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    23 => ['id' => 23, 'title' => '4G/LTE', 'duration' => '10 menit', 'status' => 'locked'],
                                    24 => ['id' => 24, 'title' => '5G Technology', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'DNS & DHCP',
                        'description' => 'Protokol penting dalam jaringan.',
                        'icon' => 'refresh-cw',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'DNS',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    25 => ['id' => 25, 'title' => 'DNS Resolution', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'DNS Records', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'DHCP',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'IP Assignment', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'DHCP Server', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Network Security',
                        'description' => 'Keamanan jaringan.',
                        'icon' => 'shield',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Firewall',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    29 => ['id' => 29, 'title' => 'Packet Filtering', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'Stateful Inspection', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Encryption',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'SSL/TLS', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'VPN Security', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Network Tools',
                        'description' => 'Tools untuk administrasi jaringan.',
                        'icon' => 'tool',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Diagnostic Tools',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'ping', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'traceroute', 'duration' => '10 menit', 'status' => 'locked'],
                                    35 => ['id' => 35, 'title' => 'nslookup', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Monitoring Tools',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    36 => ['id' => 36, 'title' => 'Wireshark', 'duration' => '10 menit', 'status' => 'locked'],
                                    37 => ['id' => 37, 'title' => 'NetFlow', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Troubleshooting',
                        'description' => 'Memperbaiki masalah jaringan.',
                        'icon' => 'alert-triangle',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Common Issues',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    38 => ['id' => 38, 'title' => 'Connectivity Issues', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'Slow Network', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Debug Process',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'OSI Layer Debug', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Log Analysis', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Cloud Networking',
                        'description' => 'Jaringan di cloud computing.',
                        'icon' => 'cloud',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Cloud Network',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    42 => ['id' => 42, 'title' => 'VPC Setup', 'duration' => '10 menit', 'status' => 'locked'],
                                    43 => ['id' => 43, 'title' => 'Cloud VPN', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Hybrid Network',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    44 => ['id' => 44, 'title' => 'On-Premise to Cloud', 'duration' => '10 menit', 'status' => 'locked'],
                                    45 => ['id' => 45, 'title' => 'SD-WAN', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Networking Dasar',
                    'description' => 'Uji pemahamanmu tentang Networking.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa fungsi router?', 'options' => ['A' => 'Menyimpan data', 'B' => 'Menghubungkan jaringan dan mengarahkan paket data', 'C' => 'Mencetak dokumen', 'D' => 'Menampilkan grafik', ], 'correct' => 'B', 'explanation' => 'Router berfungsi menghubungkan dua atau lebih jaringan dan mengarahkan paket data ke tujuan yang benar.'],
                        2 => ['question' => 'Perbedaan TCP dan UDP?', 'options' => ['A' => 'Sama saja', 'B' => 'TCP reliable, UDP cepat tapi tidak reliable', 'C' => 'UDP lebih aman', 'D' => 'TCP lebih cepat', ], 'correct' => 'B', 'explanation' => 'TCP memastikan data sampai dengan benar (reliable), UDP lebih cepat tapi tanpa jaminan pengiriman.'],
                        3 => ['question' => 'Apa itu DNS?', 'options' => ['A' => 'Domain Name System', 'B' => 'Data Network System', 'C' => 'Digital Network Service', 'D' => 'Direct Network Setup', ], 'correct' => 'A', 'explanation' => 'DNS (Domain Name System) adalah sistem yang mengubah nama domain menjadi IP address.'],
                        4 => ['question' => 'Fungsi subnet mask?', 'options' => ['A' => 'Menyembunyikan IP', 'B' => 'Memisahkan network ID dan host ID', 'C' => 'Mengenkripsi data', 'D' => 'Mempercepat internet', ], 'correct' => 'B', 'explanation' => 'Subnet mask digunakan untuk memisahkan bagian network ID dan host ID dari sebuah IP address.'],
                        5 => ['question' => 'Apa itu firewall?', 'options' => ['A' => 'Anti virus', 'B' => 'Sistem keamanan yang memfilter lalu lintas jaringan', 'C' => 'Router', 'D' => 'Switch', ], 'correct' => 'B', 'explanation' => 'Firewall adalah sistem keamanan jaringan yang memfilter lalu lintas data masuk dan keluar berdasarkan aturan keamanan.'],
                    ],
                ],
            ],
            // =============================================
            // COURSE 16: DIGITAL MARKETING
            // =============================================
            16 => [
                'id' => 16,
                'title' => 'Digital Marketing',
                'slug' => 'digital-marketing',
                'category' => 'Marketing',
                'level' => 'Pemula',
                'level_color' => 'green',
                'description' => 'Pelajari dasar Digital Marketing. SEO, social media marketing, content marketing, dan analytics.',
                'short_description' => 'Belajar strategi pemasaran digital.',
                'instructor' => 'EduCare Learning Team',
                'duration' => '138 menit',
                'total_lessons' => 46,
                'icon' => 'trending-up',
                'color' => '#10B981',
                'objectives' => [
                    'Memahami konsep digital marketing',
                    'Menguasai SEO basics',
                    'Strategi social media marketing',
                    'Content marketing',
                    'Analisis performa marketing',
                ],
                'prerequisites' => [
                    'Penggunaan social media aktif',
                    'Pemahaman dasar internet',
                    'Kreativitas tinggi',
                ],
                'modules' => [
                    1 => [
                        'id' => 1,
                        'title' => 'Pengenalan Digital Marketing',
                        'description' => 'Memahami dasar digital marketing.',
                        'icon' => 'trending-up',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Apa itu Digital Marketing?',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    1 => ['id' => 1, 'title' => 'Digital Marketing Definition', 'duration' => '10 menit', 'status' => 'locked'],
                                    2 => ['id' => 2, 'title' => 'Traditional vs Digital', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Digital Marketing Channels',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    3 => ['id' => 3, 'title' => 'Owned Media', 'duration' => '10 menit', 'status' => 'locked'],
                                    4 => ['id' => 4, 'title' => 'Earned Media', 'duration' => '10 menit', 'status' => 'locked'],
                                    5 => ['id' => 5, 'title' => 'Paid Media', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'id' => 2,
                        'title' => 'SEO Basics',
                        'description' => 'Search Engine Optimization.',
                        'icon' => 'search',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'On-Page SEO',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    6 => ['id' => 6, 'title' => 'Keyword Research', 'duration' => '10 menit', 'status' => 'locked'],
                                    7 => ['id' => 7, 'title' => 'Meta Tags', 'duration' => '10 menit', 'status' => 'locked'],
                                    8 => ['id' => 8, 'title' => 'Content Optimization', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Off-Page SEO',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    9 => ['id' => 9, 'title' => 'Backlink Building', 'duration' => '10 menit', 'status' => 'locked'],
                                    10 => ['id' => 10, 'title' => 'Domain Authority', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'id' => 3,
                        'title' => 'Content Marketing',
                        'description' => 'Strategi konten yang efektif.',
                        'icon' => 'file-text',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Content Strategy',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    11 => ['id' => 11, 'title' => 'Content Calendar', 'duration' => '10 menit', 'status' => 'locked'],
                                    12 => ['id' => 12, 'title' => 'Content Types', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Copywriting',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    13 => ['id' => 13, 'title' => 'Headline Writing', 'duration' => '10 menit', 'status' => 'locked'],
                                    14 => ['id' => 14, 'title' => 'Call to Action', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'id' => 4,
                        'title' => 'Social Media Marketing',
                        'description' => 'Marketing di social media.',
                        'icon' => 'share-2',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Platform Strategy',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    15 => ['id' => 15, 'title' => 'Instagram Marketing', 'duration' => '10 menit', 'status' => 'locked'],
                                    16 => ['id' => 16, 'title' => 'TikTok Marketing', 'duration' => '10 menit', 'status' => 'locked'],
                                    17 => ['id' => 17, 'title' => 'LinkedIn', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Social Media Ads',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    18 => ['id' => 18, 'title' => 'Facebook Ads', 'duration' => '10 menit', 'status' => 'locked'],
                                    19 => ['id' => 19, 'title' => 'Instagram Ads', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'id' => 5,
                        'title' => 'Email Marketing',
                        'description' => 'Email marketing yang efektif.',
                        'icon' => 'mail',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Email Campaign',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    20 => ['id' => 20, 'title' => 'Building Email List', 'duration' => '10 menit', 'status' => 'locked'],
                                    21 => ['id' => 21, 'title' => 'Newsletter Design', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Automation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    22 => ['id' => 22, 'title' => 'Drip Campaign', 'duration' => '10 menit', 'status' => 'locked'],
                                    23 => ['id' => 23, 'title' => 'Email Sequences', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'id' => 6,
                        'title' => 'Paid Advertising',
                        'description' => 'Iklan berbayar digital.',
                        'icon' => 'dollar-sign',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Google Ads',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    24 => ['id' => 24, 'title' => 'Search Ads', 'duration' => '10 menit', 'status' => 'locked'],
                                    25 => ['id' => 25, 'title' => 'Display Ads', 'duration' => '10 menit', 'status' => 'locked'],
                                    26 => ['id' => 26, 'title' => 'Campaign Setup', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Retargeting',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    27 => ['id' => 27, 'title' => 'Pixel Setup', 'duration' => '10 menit', 'status' => 'locked'],
                                    28 => ['id' => 28, 'title' => 'Retargeting Campaign', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'id' => 7,
                        'title' => 'Analytics',
                        'description' => 'Analisis performa marketing.',
                        'icon' => 'bar-chart',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Google Analytics',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    29 => ['id' => 29, 'title' => 'Setting Up GA4', 'duration' => '10 menit', 'status' => 'locked'],
                                    30 => ['id' => 30, 'title' => 'Traffic Analysis', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Key Metrics',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    31 => ['id' => 31, 'title' => 'Conversion Rate', 'duration' => '10 menit', 'status' => 'locked'],
                                    32 => ['id' => 32, 'title' => 'ROI Measurement', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'id' => 8,
                        'title' => 'Brand Building',
                        'description' => 'Membangun brand yang kuat.',
                        'icon' => 'star',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Brand Identity',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    33 => ['id' => 33, 'title' => 'Brand Positioning', 'duration' => '10 menit', 'status' => 'locked'],
                                    34 => ['id' => 34, 'title' => 'Visual Identity', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Brand Voice',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    35 => ['id' => 35, 'title' => 'Tone of Message', 'duration' => '10 menit', 'status' => 'locked'],
                                    36 => ['id' => 36, 'title' => 'Consistent Messaging', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    9 => [
                        'id' => 9,
                        'title' => 'Marketing Funnel',
                        'description' => 'Memahami customer journey.',
                        'icon' => 'filter',
                        'duration' => '30 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Funnel Stages',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    37 => ['id' => 37, 'title' => 'Awareness', 'duration' => '10 menit', 'status' => 'locked'],
                                    38 => ['id' => 38, 'title' => 'Consideration', 'duration' => '10 menit', 'status' => 'locked'],
                                    39 => ['id' => 39, 'title' => 'Decision', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Lead Generation',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    40 => ['id' => 40, 'title' => 'Landing Pages', 'duration' => '10 menit', 'status' => 'locked'],
                                    41 => ['id' => 41, 'title' => 'Lead Magnets', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                    10 => [
                        'id' => 10,
                        'title' => 'Marketing Strategy',
                        'description' => 'Membuat strategi marketing lengkap.',
                        'icon' => 'target',
                        'duration' => '45 menit',
                        'chapters' => [
                            1 => [
                                'id' => 1,
                                'title' => 'Planning',
                                'duration' => '20 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    42 => ['id' => 42, 'title' => 'Market Research', 'duration' => '10 menit', 'status' => 'locked'],
                                    43 => ['id' => 43, 'title' => 'Competitor Analysis', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                            2 => [
                                'id' => 2,
                                'title' => 'Execution',
                                'duration' => '30 menit',
                                'status' => 'locked',
                                'lessons' => [
                                    44 => ['id' => 44, 'title' => 'Campaign Planning', 'duration' => '10 menit', 'status' => 'locked'],
                                    45 => ['id' => 45, 'title' => 'Budget Allocation', 'duration' => '10 menit', 'status' => 'locked'],
                                    46 => ['id' => 46, 'title' => 'A/B Testing', 'duration' => '10 menit', 'status' => 'locked'],
                                ],
                            ],
                        ],
                    ],
                ],
                'quiz' => [
                    'title' => 'Quiz Digital Marketing',
                    'description' => 'Uji pemahamanmu tentang Digital Marketing.',
                    'duration' => 15,
                    'passing_score' => 70,
                    'questions' => [
                        1 => ['question' => 'Apa itu SEO?', 'options' => ['A' => 'Social Engine Optimization', 'B' => 'Search Engine Optimization', 'C' => 'Social Engagement Online', 'D' => 'Sales Enhancement Online', ], 'correct' => 'B', 'explanation' => 'SEO (Search Engine Optimization) adalah teknik mengoptimasi website agar ranking tinggi di search engine.'],
                        2 => ['question' => 'Apa itu conversion rate?', 'options' => ['A' => 'Jumlah pengunjung', 'B' => 'Persentase pengunjung yang melakukan aksi yang diinginkan', 'C' => 'Jumlah like', 'D' => 'Jumlah share', ], 'correct' => 'B', 'explanation' => 'Conversion rate adalah persentase pengunjung yang menyelesaikan aksi yang diinginkan (belajar, daftar, beli).'],
                        3 => ['question' => 'Konten marketing berfungsi untuk?', 'options' => ['A' => 'Menjual langsung', 'B' => 'Menarik dan engage audiens melalui konten bermanfaat', 'C' => 'Spam email', 'D' => 'Iklan banner', ], 'correct' => 'B', 'explanation' => 'Content marketing berfokus menciptakan konten bermanfaat untuk menarik, melibatkan, dan mengubah prospek menjadi pelanggan.'],
                        4 => ['question' => 'Apa itu retargeting?', 'options' => ['A' => 'Menghapus target', 'B' => 'Menampilkan iklan ke orang yang sudah pernah mengunjungi website', 'C' => 'Target baru', 'D' => 'Mengubah target', ], 'correct' => 'B', 'explanation' => 'Retargeting adalah menampilkan iklan ke user yang sudah pernah berinteraksi dengan website atau brand kamu.'],
                        5 => ['question' => 'Fungsi Google Analytics?', 'options' => ['A' => 'Membuat website', 'B' => 'Menganalisis traffic dan perilaku pengunjung website', 'C' => 'Membuat iklan', 'D' => 'Mengirim email', ], 'correct' => 'B', 'explanation' => 'Google Analytics digunakan untuk melacak dan menganalisis data traffic, perilaku pengunjung, dan performa website.'],
                    ],
                ],
            ],
        ];
    }

    public static function getCourses()
    {
        self::init();
        return self::$courses;
    }

    public static function getCourse($id)
    {
        self::init();
        return self::$courses[$id] ?? null;
    }

    public static function getCategories()
    {
        return [
            ['name' => 'Programming', 'icon' => 'terminal', 'count' => 5],
            ['name' => 'Web Development', 'icon' => 'code', 'count' => 1],
            ['name' => 'UI/UX Design', 'icon' => 'palette', 'count' => 1],
            ['name' => 'Artificial Intelligence', 'icon' => 'cpu', 'count' => 1],
            ['name' => 'Cyber Security', 'icon' => 'shield', 'count' => 1],
            ['name' => 'Data Science', 'icon' => 'database', 'count' => 1],
            ['name' => 'DevOps', 'icon' => 'server', 'count' => 1],
            ['name' => 'Cloud', 'icon' => 'cloud', 'count' => 1],
            ['name' => 'Blockchain', 'icon' => 'link', 'count' => 1],
            ['name' => 'Hardware', 'icon' => 'wifi', 'count' => 1],
            ['name' => 'Networking', 'icon' => 'network', 'count' => 1],
            ['name' => 'Marketing', 'icon' => 'trending-up', 'count' => 1],
        ];
    }

    public function index(Request $request)
    {
        $courses = self::getCourses();
        $categories = self::getCategories();

        $search = $request->get('search', '');
        $category = $request->get('category', '');
        $level = $request->get('level', '');

        if ($search) {
            $courses = array_filter($courses, function ($c) use ($search) {
                return stripos($c['title'], $search) !== false ||
                       stripos($c['description'], $search) !== false;
            });
        }

        if ($category) {
            $courses = array_filter($courses, function ($c) use ($category) {
                return $c['category'] === $category;
            });
        }

        if ($level) {
            $courses = array_filter($courses, function ($c) use ($level) {
                return $c['level'] === $level;
            });
        }

        $userProgress = session('module_progress', []);

        return view('modules.index', compact('courses', 'categories', 'search', 'category', 'level', 'userProgress'));
    }

    public function show($id)
    {
        $course = self::getCourse($id);
        if (!$course) abort(404);

        $userProgress = session('module_progress', []);

        $totalLessons = 0;
        $completedLessons = 0;
        foreach ($course['modules'] as $mod) {
            foreach ($mod['chapters'] as $ch) {
                foreach ($ch['lessons'] as $lesson) {
                    $totalLessons++;
                    if (isset($userProgress[$id][$lesson['id']])) {
                        $completedLessons++;
                    }
                }
            }
        }

        $progress = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;

        return view('modules.show', compact('course', 'userProgress', 'progress', 'completedLessons', 'totalLessons'));
    }

    public function lesson($moduleId, $lessonId)
    {
        $course = self::getCourse($moduleId);
        if (!$course) abort(404);

        $found = false;
        $allLessons = [];
        $prevLesson = null;
        $nextLesson = null;
        $currentLesson = null;
        $currentChapter = null;

        foreach ($course['modules'] as $mod) {
            foreach ($mod['chapters'] as $ch) {
                foreach ($ch['lessons'] as $lesson) {
                    $allLessons[] = ['module' => $mod, 'chapter' => $ch, 'lesson' => $lesson];
                }
            }
        }

        foreach ($allLessons as $i => $item) {
            if ($item['lesson']['id'] == $lessonId) {
                $currentLesson = $item['lesson'];
                $currentChapter = $item['chapter'];
                $currentModule = $item['module'];
                $prevLesson = $i > 0 ? $allLessons[$i - 1] : null;
                $nextLesson = $i < count($allLessons) - 1 ? $allLessons[$i + 1] : null;
                $found = true;
                break;
            }
        }

        if (!$found) abort(404);

        $userProgress = session('module_progress', []);
        $isCompleted = isset($userProgress[$moduleId][$lessonId]);

        $totalLessons = count($allLessons);
        $completedCount = 0;
        foreach ($allLessons as $item) {
            if (isset($userProgress[$moduleId][$item['lesson']['id']])) {
                $completedCount++;
            }
        }
        $courseProgress = $totalLessons > 0 ? round(($completedCount / $totalLessons) * 100) : 0;

        $lessonContent = self::getLessonContent($moduleId, $lessonId);

        return view('modules.lesson', compact(
            'course', 'currentLesson', 'currentChapter', 'currentModule',
            'prevLesson', 'nextLesson', 'isCompleted',
            'courseProgress', 'totalLessons', 'completedCount',
            'allLessons', 'userProgress', 'moduleId', 'lessonId', 'lessonContent'
        ));
    }

    public function completeLesson($moduleId, $lessonId)
    {
        $course = self::getCourse($moduleId);
        if (!$course) abort(404);

        $progress = session('module_progress', []);
        $progress[$moduleId][$lessonId] = true;
        session(['module_progress' => $progress]);

        $userId = session('user.id');
        if ($userId) {
            $totalLessons = 0;
            $completedLessons = 0;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        $totalLessons++;
                        if (isset($progress[$moduleId][$lesson['id']])) {
                            $completedLessons++;
                        }
                    }
                }
            }
            $percentage = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;
            $completed = $percentage >= 100;

            \App\Models\Progress::updateOrCreate(
                ['user_id' => $userId, 'material_id' => $moduleId],
                [
                    'percentage' => $percentage,
                    'completed' => $completed,
                    'completed_at' => $completed ? now() : null,
                ]
            );
        }

        return back()->with('success', 'Lesson berhasil diselesaikan!');
    }

    public function quiz($moduleId)
    {
        $course = self::getCourse($moduleId);
        if (!$course) abort(404);
        if (!isset($course['quiz'])) abort(404);

        $quiz = $course['quiz'];
        $quizResult = session('quiz_results', [])[$moduleId] ?? null;

        return view('modules.quiz', compact('course', 'quiz', 'quizResult'));
    }

    public function quizSubmit(Request $request, $moduleId)
    {
        $course = self::getCourse($moduleId);
        if (!$course) abort(404);

        $quiz = $course['quiz'];
        $questions = $quiz['questions'];

        $correctAnswers = 0;
        $totalQuestions = count($questions);

        foreach ($questions as $qId => $question) {
            $userAnswer = $request->input("answer_{$qId}");
            if ($userAnswer && strtoupper($userAnswer) === strtoupper($question['correct'])) {
                $correctAnswers++;
            }
        }

        $wrongAnswers = $totalQuestions - $correctAnswers;
        $score = $totalQuestions > 0 ? round(($correctAnswers / $totalQuestions) * 100) : 0;
        $passed = $score >= $quiz['passing_score'];

        $quizResults = session('quiz_results', []);
        $quizResults[$moduleId] = [
            'score' => $score,
            'correct' => $correctAnswers,
            'wrong' => $wrongAnswers,
            'passed' => $passed,
            'completed_at' => now()->format('d F Y'),
        ];
        session(['quiz_results' => $quizResults]);

        $userId = session('user.id');
        if ($userId && $passed) {
            $userProgress = session('module_progress', []);
            $allLessonsCompleted = true;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        if (!isset($userProgress[$moduleId][$lesson['id']])) {
                            $allLessonsCompleted = false;
                            break 3;
                        }
                    }
                }
            }
        }

        session(['last_quiz_result' => [
            'course' => $course,
            'quiz' => $quiz,
            'score' => $score,
            'correctAnswers' => $correctAnswers,
            'wrongAnswers' => $wrongAnswers,
            'passed' => $passed,
            'totalQuestions' => $totalQuestions,
        ]]);

        return redirect('/modules/' . $moduleId . '/quiz/result');
    }

    public function quizResult($moduleId)
    {
        $data = session('last_quiz_result');
        if (!$data || $data['course']['id'] != $moduleId) {
            return redirect('/modules/' . $moduleId);
        }

        return view('modules.quiz-result', $data);
    }

    public function certificates()
    {
        $user = session('user', ['name' => 'User']);
        $userId = session('user.id');
        $certificates = [];
        $certNumber = 1;

        $dbCerts = $userId ? \App\Models\Certificate::where('user_id', $userId)->orderBy('created_at')->get() : collect();
        $quizResults = session('quiz_results', []);
        foreach ($dbCerts as $dbCert) {
            $courseId = null;
            foreach (self::getCourses() as $c) {
                if ($c['title'] === $dbCert->title) { $courseId = $c['id']; break; }
            }
            $score = isset($quizResults[$courseId]) ? $quizResults[$courseId]['score'] : 100;
            $certificates[] = [
                'id' => $certNumber,
                'certificate_number' => $dbCert->certificate_number,
                'user_name' => $user['name'],
                'course_name' => $dbCert->title,
                'course_id' => $courseId,
                'instructor' => $courseId ? (self::getCourse($courseId)['instructor'] ?? 'EduCare') : 'EduCare',
                'completed_at' => $dbCert->issued_at ? $dbCert->issued_at->format('d F Y') : $dbCert->created_at->format('d F Y'),
                'issued_at' => $dbCert->issued_at ? $dbCert->issued_at->format('d F Y') : $dbCert->created_at->format('d F Y'),
                'score' => $score,
                'status' => 'valid',
            ];
            $certNumber++;
        }

        if (empty($certificates)) {
            $quizResults = session('quiz_results', []);
            $userProgress = session('module_progress', []);
            foreach (self::getCourses() as $course) {
                $courseId = $course['id'];

                $totalLessons = 0;
                $completedLessons = 0;
                foreach ($course['modules'] as $mod) {
                    foreach ($mod['chapters'] as $ch) {
                        foreach ($ch['lessons'] as $lesson) {
                            $totalLessons++;
                            if (isset($userProgress[$courseId][$lesson['id']])) {
                                $completedLessons++;
                            }
                        }
                    }
                }
                $allLessonsCompleted = $totalLessons > 0 && $completedLessons === $totalLessons;
                $quizPassed = isset($quizResults[$courseId]) && $quizResults[$courseId]['passed'];

                if ($allLessonsCompleted && $quizPassed) {
                    $certificates[] = [
                        'id' => $certNumber,
                        'certificate_number' => 'EDU-2026-' . str_pad($certNumber, 4, '0', STR_PAD_LEFT),
                        'user_name' => $user['name'],
                        'course_name' => $course['title'],
                        'course_id' => $courseId,
                        'instructor' => $course['instructor'],
                        'completed_at' => $quizResults[$courseId]['completed_at'],
                        'issued_at' => $quizResults[$courseId]['completed_at'],
                        'score' => $quizResults[$courseId]['score'],
                        'status' => 'valid',
                    ];
                    $certNumber++;
                }
            }
        }

        return view('modules.certificates', compact('certificates'));
    }

    public function certificateShow($id)
    {
        $user = session('user', ['name' => 'User']);
        $userId = session('user.id');

        $dbCert = $userId ? \App\Models\Certificate::where('user_id', $userId)->orderBy('created_at')->skip($id - 1)->first() : null;
        if ($dbCert) {
            $courseId = null;
            $course = null;
            foreach (self::getCourses() as $c) {
                if ($c['title'] === $dbCert->title) { $courseId = $c['id']; $course = $c; break; }
            }
            $quizResults = session('quiz_results', []);
            $score = isset($quizResults[$courseId]) ? $quizResults[$courseId]['score'] : 100;
            $cert = [
                'id' => $id,
                'certificate_number' => $dbCert->certificate_number,
                'user_name' => $user['name'],
                'course_name' => $dbCert->title,
                'course_id' => $courseId,
                'instructor' => $course['instructor'] ?? 'EduCare',
                'completed_at' => $dbCert->issued_at ? $dbCert->issued_at->format('d F Y') : $dbCert->created_at->format('d F Y'),
                'issued_at' => $dbCert->issued_at ? $dbCert->issued_at->format('d F Y') : $dbCert->created_at->format('d F Y'),
                'score' => $score,
                'status' => 'valid',
            ];
            return view('modules.certificate-show', compact('cert'));
        }

        $userProgress = session('module_progress', []);
        $quizResults = session('quiz_results', []);
        $cert = null;
        $certNumber = 1;

        foreach (self::getCourses() as $course) {
            $courseId = $course['id'];

            $totalLessons = 0;
            $completedLessons = 0;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        $totalLessons++;
                        if (isset($userProgress[$courseId][$lesson['id']])) {
                            $completedLessons++;
                        }
                    }
                }
            }
            $allLessonsCompleted = $totalLessons > 0 && $completedLessons === $totalLessons;
            $quizPassed = isset($quizResults[$courseId]) && $quizResults[$courseId]['passed'];

            if ($allLessonsCompleted && $quizPassed) {
                if ($certNumber == $id) {
                    $cert = [
                        'id' => $certNumber,
                        'certificate_number' => 'EDU-2026-' . str_pad($certNumber, 4, '0', STR_PAD_LEFT),
                        'user_name' => $user['name'],
                        'course_name' => $course['title'],
                        'course_id' => $courseId,
                        'instructor' => $course['instructor'],
                        'completed_at' => $quizResults[$courseId]['completed_at'],
                        'issued_at' => $quizResults[$courseId]['completed_at'],
                        'score' => $quizResults[$courseId]['score'],
                        'status' => 'valid',
                    ];
                    break;
                }
                $certNumber++;
            }
        }

        if (!$cert) abort(404);

        return view('modules.certificate-show', compact('cert'));
    }

    public function certificateVerify($number)
    {
        $userProgress = session('module_progress', []);
        $quizResults = session('quiz_results', []);
        $user = session('user', ['name' => 'User']);

        $cert = null;
        $certNumber = 1;

        foreach (self::getCourses() as $course) {
            $courseId = $course['id'];

            $totalLessons = 0;
            $completedLessons = 0;
            foreach ($course['modules'] as $mod) {
                foreach ($mod['chapters'] as $ch) {
                    foreach ($ch['lessons'] as $lesson) {
                        $totalLessons++;
                        if (isset($userProgress[$courseId][$lesson['id']])) {
                            $completedLessons++;
                        }
                    }
                }
            }

            $allCompleted = $totalLessons > 0 && $completedLessons === $totalLessons;
            $quizPassed = isset($quizResults[$courseId]) && $quizResults[$courseId]['passed'];

            if ($allCompleted && $quizPassed) {
                $generatedNumber = 'EDU-2026-' . str_pad($certNumber, 4, '0', STR_PAD_LEFT);
                if ($generatedNumber === $number) {
                    $cert = [
                        'id' => $certNumber,
                        'certificate_number' => $generatedNumber,
                        'user_name' => $user['name'],
                        'course_name' => $course['title'],
                        'instructor' => $course['instructor'],
                        'completed_at' => $quizResults[$courseId]['completed_at'],
                        'issued_at' => $quizResults[$courseId]['completed_at'],
                        'score' => $quizResults[$courseId]['score'],
                        'status' => 'valid',
                    ];
                    break;
                }
                $certNumber++;
            }
        }

        return view('modules.certificate-verify', compact('cert', 'number'));
    }

    protected static function getLessonContent($moduleId, $lessonId)
    {
        $course = self::getCourse($moduleId);
        if (!$course) return self::defaultLessonContent();

        $currentLesson = null;
        $currentChapter = null;
        $currentModule = null;

        foreach ($course['modules'] as $mod) {
            foreach ($mod['chapters'] as $ch) {
                foreach ($ch['lessons'] as $lesson) {
                    if ($lesson['id'] == $lessonId) {
                        $currentLesson = $lesson;
                        $currentChapter = $ch;
                        $currentModule = $mod;
                        break 3;
                    }
                }
            }
        }

        if (!$currentLesson) return self::defaultLessonContent();

        $lessonTitle = $currentLesson['title'];
        $moduleTitle = $currentModule['title'];
        $chapterTitle = $currentChapter['title'];
        $courseTitle = $course['title'];
        $courseColor = $course['color'];

        $objectives = [
            "Memahami konsep {$lessonTitle}",
            "Menerapkan {$lessonTitle} dalam praktik",
            "Menguasai penggunaan {$lessonTitle} dengan benar",
        ];

        $content = "<h2>{$lessonTitle}</h2>";
        $content .= "<p>Pada lesson ini, kita akan mempelajari tentang <strong>{$lessonTitle}</strong> dalam konteks <strong>{$moduleTitle}</strong>.</p>";
        $content .= "<h3>Konsep Dasar</h3>";
        $content .= "<p>{$lessonTitle} merupakan bagian penting dari {$moduleTitle} dalam {$courseTitle}. ";
        $content .= "Memahami {$lessonTitle} akan membantu kamu dalam mengembangkan kemampuan di bidang ini.</p>";
        $content .= "<h3>Langkah-langkah Pembelajaran</h3>";
        $content .= "<ol><li>Pahami definisi dan konsep dasar {$lessonTitle}</li>";
        $content .= "<li>Pelajari contoh penerapan dalam situasi nyata</li>";
        $content .= "<li>Praktikkan langsung melalui latihan dan proyek</li>";
        $content .= "<li>Evaluasi pemahaman melalui quiz</li></ol>";
        $content .= "<h3>Poin Penting</h3>";
        $content .= "<p>Perhatikan baik-baik penjelasan pada lesson ini. {$lessonTitle} adalah fondasi yang akan digunakan pada lesson selanjutnya di {$moduleTitle}.</p>";
        $content .= "<p>Luangkan waktu untuk memahami setiap konsep sebelum melanjutkan ke lesson berikutnya.</p>";

        $code = null;
        $lowerTitle = strtolower($lessonTitle);
        if (in_array($moduleId, [1, 2, 5, 11])) {
            $codeExamples = [
                'sejarah javascript' => null,
                'javascript di browser' => '<script>\n    console.log("JavaScript berjalan di browser!");\n    document.write("<h2>Hello from JavaScript!</h2>");\n</script>',
                'chrome devtools console' => '// Buka Chrome DevTools (F12)\n// Tab Console\nconsole.log("Hello World!");\nconsole.warn("Warning message");\nconsole.error("Error message");\nconsole.table([{name: "Alice", age: 25}, {name: "Bob", age: 30}]);',
                'menulis kode pertama' => '<!DOCTYPE html>\n<html lang="id">\n<head>\n    <meta charset="UTF-8">\n    <title>Kode Pertama</title>\n</head>\n<body>\n    <h1 id="judul">Hello World!</h1>\n    <button onclick="sapa()">Klik Saya</button>\n    <script>\n        function sapa() {\n            document.getElementById("judul").textContent = "Halo! Selamat Datang!";\n        }\n    </script>\n</body>\n</html>',
                'pengertian website' => null,
                'jenis-jenis website' => null,
                'tag dasar html' => '<!-- Heading -->\n<h1>Judul Utama</h1>\n<h2>Sub Judul</h2>\n<h3>Sub Sub Judul</h3>\n\n<!-- Paragraf -->\n<p>Ini adalah paragraf.</p>\n\n<!-- Link -->\n<a href="https://example.com">Kunjungi Website</a>\n\n<!-- Gambar -->\n<img src="foto.jpg" alt="Deskripsi Gambar">',
                'struktur dokumen html' => '<!DOCTYPE html>\n<html lang="id">\n<head>\n    <meta charset="UTF-8">\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\n    <title>Judul Website</title>\n</head>\n<body>\n    <header>\n        <h1>Nama Website</h1>\n    </header>\n    <main>\n        <p>Konten utama di sini.</p>\n    </main>\n    <footer>\n        <p>&copy; 2026 Website</p>\n    </footer>\n</body>\n</html>',
                'heading dan paragraph' => '<!-- Heading Levels -->\n<h1>Heading 1</h1>\n<h2>Heading 2</h2>\n<h3>Heading 3</h3>\n\n<!-- Paragraph -->\n<p>Paragraf pertama.</p>\n<p>Paragraf kedua.</p>\n\n<!-- Bold dan Italic -->\n<p><strong>Teks tebal</strong> dan <em>teks miring</em>.</p>',
                'link dan image' => '<!-- Hyperlink -->\n<a href="https://google.com">Kunjungi Google</a>\n<a href="https://google.com" target="_blank">Buka di Tab Baru</a>\n\n<!-- Gambar -->\n<img src="foto.jpg" alt="Deskripsi gambar" width="300">',
                'list dan table' => '<!-- Unordered List -->\n<ul>\n    <li>HTML</li>\n    <li>CSS</li>\n    <li>JavaScript</li>\n</ul>\n\n<!-- Ordered List -->\n<ol>\n    <li>Pertama</li>\n    <li>Kedua</li>\n</ol>\n\n<!-- Table -->\n<table>\n    <tr><th>Nama</th><th>Nilai</th></tr>\n    <tr><td>Budi</td><td>90</td></tr>\n</table>',
                'input form' => '<form action="/submit" method="POST">\n    <label for="nama">Nama:</label>\n    <input type="text" id="nama" name="nama">\n    \n    <label for="email">Email:</label>\n    <input type="email" id="email" name="email">\n    \n    <label for="password">Password:</label>\n    <input type="password" id="password" name="password">\n    \n    <button type="submit">Kirim</button>\n</form>',
                'var, let, const' => '// var - function scope\nvar nama = "Budi";\n\n// let - block scope\nlet umur = 25;\n\n// const - constant\nconst PI = 3.14159;\n\nconsole.log(nama, umur, PI);',
                'for loop' => '// For Loop\nfor (let i = 1; i <= 5; i++) {\n    console.log("Iterasi ke-" + i);\n}\n\n// For...of\nconst buah = ["apel", "mangga", "jeruk"];\nfor (const item of buah) {\n    console.log(item);\n}',
                'function declaration' => '// Function Declaration\nfunction sapa(nama) {\n    return "Halo, " + nama + "!";\n}\n\n// Arrow Function\nconst tambah = (a, b) => a + b;\n\nconsole.log(sapa("Budi"));\nconsole.log(tambah(3, 5));',
                'membuat array' => '// Membuat Array\nconst angka = [1, 2, 3, 4, 5];\nconst buah = ["apel", "mangga", "jeruk"];\n\n// Akses Element\nconsole.log(angka[0]); // 1\nconsole.log(buah.length); // 3',
                'membuat object' => '// Membuat Object\nconst siswa = {\n    nama: "Budi",\n    umur: 20,\n    kelas: "TI-2A",\n    belajar: function() {\n        return this.nama + " sedang belajar";\n    }\n};\n\nconsole.log(siswa.nama);\nconsole.log(siswa.belajar());',
                'queryselector' => '// Mengakses Element\nconst judul = document.querySelector("h1");\nconst btn = document.querySelector(".btn-primary");\nconst input = document.querySelector("#email");\n\n// querySelectorAll\nconst semua = document.querySelectorAll("p");\nsemua.forEach(p => console.log(p.textContent));',
                'event listener' => '// Event Listener\nconst btn = document.querySelector("button");\n\nbtn.addEventListener("click", function() {\n    alert("Button diklik!");\n});\n\n// Keyboard Event\ndocument.addEventListener("keydown", function(e) {\n    console.log("Key pressed:", e.key);\n});',
                'callback function' => '// Callback Function\nfunction fetchData(callback) {\n    setTimeout(() => {\n        callback("Data berhasil diambil!");\n    }, 1000);\n}\n\nfetchData(function(result) {\n    console.log(result);\n});',
            ];

            if (isset($codeExamples[$lowerTitle])) {
                $code = $codeExamples[$lowerTitle];
            }
        }

        $tips = [
            "Luangkan waktu untuk membaca dan memahami materi {$lessonTitle} dengan seksama.",
            "Praktikkan langsung apa yang sudah dipelajari untuk memperkuat pemahaman.",
            "Jika ada yang belum paham, ulangi lesson ini atau diskusikan di forum.",
            "Catat poin-poin penting untuk referensi di kemudian hari.",
        ];

        $summary = "{$lessonTitle} adalah bagian penting dari {$moduleTitle} dalam {$courseTitle}. Pahami konsep dasarnya dan praktikkan langsung untuk hasil yang optimal.";

        return [
            'title' => $lessonTitle,
            'objectives' => $objectives,
            'content' => $content,
            'code' => $code,
            'tips' => $tips,
            'summary' => $summary,
        ];
    }

    protected static function defaultLessonContent()
    {
        return [
            'title' => 'Materi Pembelajaran',
            'objectives' => ['Memahami konsep dasar', 'Menerapkan dalam praktik'],
            'content' => '<h2>Materi Pembelajaran</h2><p>Halaman materi ini sedang dalam pengembangan. Konten pembelajaran lengkap akan segera tersedia.</p>',
            'code' => null,
            'tips' => ['Manfaatkan Developer Tools browser untuk bereksperimen dengan kode.'],
            'summary' => 'Materi ini sedang dalam pengembangan.',
        ];
    }
}