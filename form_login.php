
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIP-SMART</title>

    <link rel="stylesheet" href="css/stylelgn.css">
</head>

<body>

    <div class="login-page">

        <div class="login-container">

            <!-- BAGIAN INFORMASI -->
            <div class="login-information">

                <div class="brand-logo">
                    <div class="logo-icon">S</div>
                    <span>SIP<span>SMART</span></span>
                </div>

                <div class="information-content">

                    <span class="welcome-label">
                        SELAMAT DATANG
                    </span>

                    <h1>
                        Kelola Pembayaran SPP dengan Lebih Mudah.
                    </h1>

                    <p>
                        Sistem informasi pembayaran SPP yang membantu
                        pengelolaan administrasi sekolah menjadi lebih
                        cepat, terstruktur, dan transparan.
                    </p>

                </div>

                <div class="information-footer">
                    <span>SMART SCHOOL MANAGEMENT SYSTEM</span>
                    <span>© 2026 SIP-SMART</span>
                </div>

            </div>


            <!-- BAGIAN FORM LOGIN -->
            <div class="login-form-section">

                <div class="form-heading">

                    <span class="form-label">
                        ACCOUNT ACCESS
                    </span>

                    <h2>Masuk ke Akun</h2>

                    <p>
                        Silakan masukkan akun Anda untuk melanjutkan.
                    </p>

                </div>


                <!-- FORM LOGIN -->
                <form
                    name="form_login"
                    method="POST"
                    action="loginexe.php"
                    class="login-form"
                >

                    <!-- USERNAME -->
                    <div class="form-group">

                        <label for="username">Username</label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Masukkan username"
                            autocomplete="username"
                            required
                        >

                    </div>


                    <!-- PASSWORD -->
                    <div class="form-group">

                        <label for="password">Password</label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >

                    </div>


                    <!-- LEVEL PENGGUNA -->
                    <div class="form-group">

                        <label for="level">Login Sebagai</label>

                        <select
                            name="level"
                            id="level"
                            required
                        >

                            <option value="" disabled selected>
                                Pilih level pengguna
                            </option>

                            <option value="admin">
                                Administrator
                            </option>

                            <option value="petugas">
                                Petugas
                            </option>

                            <option value="siswa">
                                Siswa
                            </option>

                        </select>

                    </div>


                    <!-- TOMBOL LOGIN -->
                    <button
                        type="submit"
                        name="login"
                        class="btn-login"
                    >
                        Masuk ke Dashboard
                        <span>→</span>
                    </button>

                </form>


                <!-- INFORMASI KEAMANAN -->
                <div class="login-note">

                    <span class="security-icon">●</span>

                    Sistem login aman dan terlindungi.

                </div>

            </div>

        </div>

    </div>

</body>
</html>
