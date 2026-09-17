<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat - {{ $cert['course_name'] }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f3f4f6; }

        .container { max-width: 900px; margin: 40px auto; background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }

        .toolbar { padding: 16px 24px; background: #f8fafc; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center; }
        .toolbar h2 { font-size: 16px; color: #111827; }
        .toolbar-actions { display: flex; gap: 8px; }
        .btn { padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; border: none; transition: all 0.2s; }
        .btn-primary { background: #2563EB; color: white; }
        .btn-primary:hover { background: #1d4ed8; }
        .btn-secondary { background: white; color: #64748b; border: 1px solid #e2e8f0; }
        .btn-secondary:hover { background: #f8fafc; }

        .certificate { padding: 60px; text-align: center; position: relative; overflow: hidden; }

        .certificate-border { position: absolute; inset: 20px; border: 3px solid #2563EB; border-radius: 8px; pointer-events: none; }
        .certificate-corner { position: absolute; width: 40px; height: 40px; border: 4px solid #2563EB; }
        .corner-tl { top: 15px; left: 15px; border-right: none; border-bottom: none; border-radius: 8px 0 0 0; }
        .corner-tr { top: 15px; right: 15px; border-left: none; border-bottom: none; border-radius: 0 8px 0 0; }
        .corner-bl { bottom: 15px; left: 15px; border-right: none; border-top: none; border-radius: 0 0 0 8px; }
        .corner-br { bottom: 15px; right: 15px; border-left: none; border-top: none; border-radius: 0 0 8px 0; }

        .logo { margin-bottom: 20px; }
        .logo-icon { width: 60px; height: 60px; background: #2563EB; border-radius: 16px; display: inline-flex; align-items: center; justify-content: center; }
        .logo-icon svg { width: 32px; height: 32px; color: white; }

        .title { font-size: 14px; letter-spacing: 4px; color: #64748b; text-transform: uppercase; margin-bottom: 8px; }
        .subtitle { font-size: 28px; font-weight: 800; color: #111827; margin-bottom: 30px; }

        .presented-to { font-size: 13px; color: #64748b; margin-bottom: 8px; }
        .recipient-name { font-size: 36px; font-weight: 800; color: #2563EB; margin-bottom: 8px; font-style: italic; }
        .name-underline { width: 300px; height: 2px; background: #2563EB; margin: 0 auto 30px; }

        .course-text { font-size: 13px; color: #64748b; margin-bottom: 4px; }
        .course-name { font-size: 20px; font-weight: 700; color: #111827; margin-bottom: 40px; }

        .meta { display: flex; justify-content: center; gap: 60px; margin-bottom: 30px; }
        .meta-item { text-align: center; }
        .meta-label { font-size: 11px; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
        .meta-value { font-size: 14px; font-weight: 600; color: #111827; }

        .footer-line { width: 100%; height: 1px; background: #e2e8f0; margin: 20px 0; }

        .cert-number { font-size: 11px; color: #94a3b8; margin-top: 20px; }

        .watermark { position: absolute; bottom: 80px; right: 60px; opacity: 0.03; font-size: 120px; font-weight: 900; color: #2563EB; transform: rotate(-15deg); pointer-events: none; }

        @media print {
            body { background: white; }
            .container { box-shadow: none; margin: 0; border-radius: 0; }
            .toolbar { display: none !important; }
            .certificate { padding: 40px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="toolbar no-print">
            <h2>Sertifikat Penyelesaian</h2>
            <div class="toolbar-actions">
                <button class="btn btn-secondary" onclick="window.close()">Tutup</button>
                <button class="btn btn-primary" onclick="window.print()">Download / Cetak</button>
            </div>
        </div>

        <div class="certificate">
            <div class="certificate-border"></div>
            <div class="certificate-corner corner-tl"></div>
            <div class="certificate-corner corner-tr"></div>
            <div class="certificate-corner corner-bl"></div>
            <div class="certificate-corner corner-br"></div>
            <div class="watermark">EDUCARE</div>

            <div class="logo">
                <div class="logo-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>

            <p class="title">Sertifikat Penyelesaian</p>
            <h1 class="subtitle">EduCare Learning Platform</h1>

            <p class="presented-to">Diberikan kepada</p>
            <h2 class="recipient-name">{{ $cert['user_name'] }}</h2>
            <div class="name-underline"></div>

            <p class="course-text">Telah berhasil menyelesaikan course</p>
            <h3 class="course-name">{{ $cert['course_name'] }}</h3>

            <div class="meta">
                <div class="meta-item">
                    <p class="meta-label">Score</p>
                    <p class="meta-value">{{ $cert['score'] }}%</p>
                </div>
                <div class="meta-item">
                    <p class="meta-label">Tanggal Selesai</p>
                    <p class="meta-value">{{ $cert['completed_at'] }}</p>
                </div>
                <div class="meta-item">
                    <p class="meta-label">Instructor</p>
                    <p class="meta-value">{{ $cert['instructor'] }}</p>
                </div>
            </div>

            <div class="footer-line"></div>

            <p class="cert-number">Nomor Sertifikat: {{ $cert['certificate_number'] }}</p>
        </div>
    </div>
</body>
</html>
