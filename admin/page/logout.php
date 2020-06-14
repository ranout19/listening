<?php 
session_start();
session_unset();
session_destroy();
?>
<script>
    Swal.fire({
      type: 'success',
      title: 'Berhasil Logout',
      text: 'Sampai Jumpa lagi!',
      showConfirmButton: false,
      timer: 2000
    }).then(()=>{
        location.href='page/login.php'
    });
</script>
<?php
exit;
?>