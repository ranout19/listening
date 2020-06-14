<?php 
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM soal WHERE id_soal = '$id' ");
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
            location.href='?page=soal'
        });
    </script>
    <?php   
}
?>