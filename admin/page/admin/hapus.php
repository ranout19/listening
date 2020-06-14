<?php 
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin = '$id' ");
if($sql) {
  ?>
    <script type="text/javascript">
        Swal.fire({
          type: 'success',
          title: 'Berhasil',
          text: 'Data dihapus',
          showConfirmButton: false,
          timer: 1500
        }).then(()=>{
            location.href='?page=admin'
        });
    </script>
    <?php   
}

?>