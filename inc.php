<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Login</title>
  </head>
  <body>
    <!-- Include form login dari file login.php -->
    <?php include 'login.php'; ?>

    <?php
      // Cek apakah data telah dikirim melalui POST setelah form login disubmit
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        // Cek apakah nama dan email diisi
        if (empty($name) || empty($email)) {
          // Redirect ke halaman lain jika data tidak lengkap
          header("Location: error.php");
          exit();
        }

        // Tampilkan pesan selamat datang beserta informasi waktu dan tanggal di Indonesia
        date_default_timezone_set("Asia/Jakarta");
        echo "<h1>Selamat Datang</h1>";
        echo "<p>Nama          : $name</p>";
        echo "<p>Email         : $email</p>";
        echo "<p>Tanggal Login : " . date("l, j F Y") . "</p>";
        echo "<p>Waktu Login   : " . date("H:i:s") . "</p>";
        
      }
    ?>
  </body>
</html>
