
<?php
// Halaman utama SIP-SMART sebelum login
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP-SMART | Sistem Informasi Pembayaran SPP</title>

    <link rel="stylesheet" href="css/styleM1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="container nav-content">

            <a href="index.php" class="logo">
                <div class="logo-icon">S</div>
                <div class="logo-text">
                    <h2>SIP-SMART</h2>
                    <span>Payment Information System</span>
                </div>
            </a>

            <nav class="nav-menu">
                <a href="#beranda" class="active">Beranda</a>
                <a href="#layanan">Layanan</a>
                <a href="#informasi">Informasi</a>
                <a href="#tentang">Tentang</a>
                <a href="#kontak">Kontak</a>
            </nav>

            <a href="form_login.php" class="btn-login">
                Login <span>→</span>
            </a>

        </div>
    </header>


    <!-- HERO SECTION -->
    <section class="hero" id="beranda">
        <div class="container hero-content">

            <div class="hero-text">

                <div class="hero-label">
                    <span class="status-dot"></span>
                    SISTEM INFORMASI SEKOLAH
                </div>

                <h1>
                    Pembayaran SPP
                    <span>Lebih Mudah</span>
                    dan Terorganisir.
                </h1>

                <p>
                    Selamat datang di SIP-SMART, sistem informasi
                    pembayaran SPP yang membantu pengelolaan
                    administrasi sekolah menjadi lebih mudah,
                    cepat, dan transparan.
                </p>

                <div class="hero-buttons">
                    <a href="form_login.php" class="btn-primary">
                        Mulai Sekarang <span>→</span>
                    </a>

                    <a href="#tentang" class="btn-secondary">
                        Pelajari Sistem
                    </a>
                </div>

                <div class="hero-note">
                    <span>✓</span> Informasi pembayaran lebih terstruktur
                </div>

            </div>

            <div class="hero-visual">

                <div class="visual-decoration decoration-one"></div>
                <div class="visual-decoration decoration-two"></div>

                <div class="payment-card">

                    <div class="card-top">
                        <div>
                            <span class="card-small">SISTEM INFORMASI</span>
                            <h3>SIP-SMART</h3>
                        </div>

                        <div class="card-icon">✦</div>
                    </div>

                    <div class="card-illustration">
                        <div class="illustration-circle">
                            <span>✓</span>
                        </div>
                    </div>

                    <div class="card-bottom">
                        <div>
                            <span class="card-small">LAYANAN DIGITAL</span>
                            <h4>Pembayaran SPP</h4>
                        </div>

                        <span class="card-arrow">↗</span>
                    </div>

                </div>

                <div class="floating-info info-top">
                    <span class="floating-icon">✓</span>
                    <div>
                        <strong>Lebih Praktis</strong>
                        <small>Administrasi terstruktur</small>
                    </div>
                </div>

                <div class="floating-info info-bottom">
                    <span class="floating-icon blue">▤</span>
                    <div>
                        <strong>Data Terorganisir</strong>
                        <small>Informasi lebih mudah diakses</small>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- LAYANAN -->
    <section class="services section" id="layanan">

        <div class="container">

            <div class="section-heading">
                <span class="section-label">LAYANAN KAMI</span>
                <h2>Kemudahan dalam Satu Sistem</h2>
                <p>
                    SIP-SMART menyediakan berbagai layanan
                    untuk mendukung administrasi pembayaran sekolah.
                </p>
            </div>

            <div class="service-grid">

                <div class="service-card">
                    <div class="service-icon icon-blue">▤</div>
                    <h3>Informasi Pembayaran</h3>
                    <p>
                        Informasi mengenai tagihan dan kewajiban
                        pembayaran SPP siswa.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon icon-green">✓</div>
                    <h3>Pencatatan Pembayaran</h3>
                    <p>
                        Membantu petugas mencatat transaksi
                        pembayaran secara terstruktur.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon icon-purple">◷</div>
                    <h3>Riwayat Pembayaran</h3>
                    <p>
                        Memudahkan siswa melihat riwayat
                        pembayaran melalui akun masing-masing.
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-icon icon-orange">▥</div>
                    <h3>Laporan Pembayaran</h3>
                    <p>
                        Mendukung pengelolaan dan penyajian
                        laporan administrasi pembayaran.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- ALUR PEMBAYARAN -->
    <section class="workflow section" id="informasi">

        <div class="container">

            <div class="section-heading">
                <span class="section-label">CARA PENGGUNAAN</span>
                <h2>Mulai dengan Langkah Sederhana</h2>
                <p>
                    Ikuti langkah berikut untuk menggunakan
                    layanan SIP-SMART.
                </p>
            </div>

            <div class="workflow-grid">

                <div class="workflow-item">
                    <div class="step-number">01</div>
                    <h3>Login Akun</h3>
                    <p>Masuk menggunakan username dan password yang telah diberikan.</p>
                </div>

                <div class="workflow-item">
                    <div class="step-number">02</div>
                    <h3>Akses Informasi</h3>
                    <p>Lihat informasi tagihan dan data pembayaran sesuai hak akses.</p>
                </div>

                <div class="workflow-item">
                    <div class="step-number">03</div>
                    <h3>Proses Pembayaran</h3>
                    <p>Lakukan pembayaran melalui petugas sekolah.</p>
                </div>

                <div class="workflow-item">
                    <div class="step-number">04</div>
                    <h3>Lihat Riwayat</h3>
                    <p>Periksa riwayat transaksi dan bukti pembayaran.</p>
                </div>

            </div>

        </div>

    </section>


    <!-- TENTANG -->
    <section class="about section" id="tentang">

        <div class="container about-content">

            <div class="about-visual">
                <div class="about-box">
                    <div class="about-symbol">S</div>
                    <h3>SIP-SMART</h3>
                    <p>Smart School Payment Information</p>
                </div>
            </div>

            <div class="about-text">

                <span class="section-label">TENTANG SISTEM</span>

                <h2>Mengenal SIP-SMART</h2>

                <p>
                    SIP-SMART merupakan sistem informasi pembayaran
                    SPP yang dirancang untuk membantu sekolah dalam
                    mengelola administrasi pembayaran secara
                    lebih terstruktur dan efisien.
                </p>

                <p>
                    Sistem ini menyediakan akses berbeda untuk
                    admin, petugas, dan siswa sesuai dengan
                    kebutuhan dan tanggung jawab masing-masing.
                </p>

                <a href="form_login.php" class="btn-primary">
                    Masuk ke Sistem →
                </a>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="cta-section">

        <div class="container cta-content">

            <div>
                <span class="cta-label">SIP-SMART</span>
                <h2>Kelola Administrasi SPP dengan Lebih Mudah.</h2>
                <p>Masuk ke akun untuk mulai menggunakan layanan SIP-SMART.</p>
            </div>

            <a href="form_login.php" class="btn-cta">
                Login Sekarang <span>→</span>
            </a>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="footer" id="kontak">

        <div class="container footer-content">

            <div class="footer-brand">
                <a href="index.php" class="logo">
                    <div class="logo-icon">S</div>
                    <div class="logo-text">
                        <h2>SIP-SMART</h2>
                        <span>Payment Information System</span>
                    </div>
                </a>

                <p>
                    Sistem informasi pembayaran SPP untuk
                    mendukung administrasi sekolah yang
                    lebih terstruktur.
                </p>
            </div>

            <div class="footer-links">
                <h3>Navigasi</h3>
                <a href="#beranda">Beranda</a>
                <a href="#layanan">Layanan</a>
                <a href="#informasi">Informasi</a>
                <a href="#tentang">Tentang</a>
            </div>

            <div class="footer-links">
                <h3>Akses Sistem</h3>
                <a href="form_login.php">Login Pengguna</a>
                <a href="form_login.php">Admin</a>
                <a href="form_login.php">Petugas</a>
                <a href="form_login.php">Siswa</a>
            </div>

        </div>

        <div class="container footer-bottom">
            <p>© 2026 SIP-SMART. All Rights Reserved.</p>
            <p>Smart School Payment Information System.</p>
        </div>

    </footer>

</body>
</html>
