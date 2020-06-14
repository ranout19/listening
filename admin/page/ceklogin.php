<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
      @font-face{
          font-family: semua;
          src:url(../lib/Montserrat-Regular.ttf);
      }
      *{
          font-family: semua;
      }
  </style>
</head>
<body>
<script src="../plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: ../index.php");
    die();
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include '../lib/koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query= mysqli_query($koneksi, "SELECT * FROM admin WHERE username ='$username' AND password ='$password'");
$kode = mysqli_fetch_array($query);
$cek=mysqli_num_rows($query);

if ($cek > 0){
  $_SESSION['username']=$kode['username'];
  $_SESSION['password']=$kode['password'];
  ?>
  <script>
    Swal.fire({
      type: 'success',
      title: 'Berhasil!',
      text: 'Selamat datang!',
      showConfirmButton: false,
      timer: 2000
    }).then(()=>{
        location.href='../index.php'
    });
</script>
<?php   
} else {?>
	<script>
      Swal.fire({
        type: 'error',
        title: 'Gagal!',
        text: 'username atau password salah!',
        showConfirmButton: false,
        timer: 2000
      }).then(()=>{
          location.href='login.php'
      });
  </script>
	<?php 
}
?>
</body>
</html>