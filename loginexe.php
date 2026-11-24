
<?php
session_start();

include "koneksi.php";

// Cek apakah tombol login ditekan
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    $level    = mysqli_real_escape_string($koneksi, $_POST['level']);

    // Cek username dan level
    $sql_login = mysqli_query($koneksi, "
        SELECT * FROM tb_user
        WHERE username = '$username'
        AND level = '$level'
    ");

    // Cek query database
    if (!$sql_login) {
        die("Query Error: " . mysqli_error($koneksi));
    }

    // Cek apakah akun ditemukan
    if (mysqli_num_rows($sql_login) > 0) {

        $data = mysqli_fetch_assoc($sql_login);

        // Verifikasi password
        if ($password === $data['password']){

            // Membuat session baru-
            session_regenerate_id(true);

            $_SESSION['id_user']  = $data['id_user'];
            $_SESSION['nama']     = $data['nama'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level']    = $data['level'];

            // Redirect berdasarkan level pengguna
            if ($data['level'] == "admin") {

                $tujuan = "/pembayaran_spp/admin/index.php";
                $pesan = "Login berhasil sebagai Admin!";

            } elseif ($data['level'] == "petugas") {

                $tujuan = "/pembayaran_spp/petugas/index.php";
                $pesan = "Login berhasil sebagai Petugas!";

            } elseif ($data['level'] == "siswa") {

                $tujuan = "/pembayaran_spp/siswa/index.php";
                $pesan = "Login berhasil sebagai Siswa!";

            } else {

                session_destroy();

                echo "<script>
                    alert('Level pengguna tidak dikenali!');
                    window.location.href = 'form_login.php';
                </script>";
                exit;
            }

            // Menampilkan pesan dan mengarahkan halaman
            echo "<script>
                alert('$pesan');
                window.location.href = '$tujuan';
            </script>";
            exit;

        } else {

            echo "<script>
                alert('Password salah!');
                window.location.href = 'form_login.php';
            </script>";
            exit;
        }

    } else {

        echo "<script>
            alert('Username atau level salah!');
            window.location.href = 'form_login.php';
        </script>";
        exit;
    }

} else {

    // Jika halaman diakses tanpa menekan tombol login
    header("Location: form_login.php");
    exit;
}
?>
