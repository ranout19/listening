<?php 
	$id=$_GET['id'];
	$nonaktif=0;
	$sql=mysqli_query($koneksi, "UPDATE allsoal SET status='$nonaktif' WHERE id_as='$id'");
	if ($sql) {
        ?>
        <script>
            Swal.fire({
              type: 'success',
              title: 'Berhasil!',
              text: 'Kelas di nonaktifkan',
              showConfirmButton: false,
              timer: 2000
            }).then(()=>{
                location.href='?page=soalaktif'
            });
        </script>
        <?php
    }
 ?>