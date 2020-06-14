<?php 
	$id=$_GET['id'];
	$aktif=1;
	$sql= mysqli_query($koneksi, "SELECT * FROM allsoal WHERE status=1");
	$cek= mysqli_num_rows($sql);
	if ($cek == 1) {
		?>
        <script>
            Swal.fire({
              type: 'warning',
              title: 'Gagal',
              text: 'Hanya 1 kelas yang boleh aktif',
              showConfirmButton: false,
              timer: 2000
            }).then(()=>{
                location.href='?page=soalaktif'
            });
        </script>
        <?php
	}else{
		$edit=mysqli_query($koneksi, "UPDATE allsoal SET status='$aktif' WHERE id_as='$id'");
		if ($edit) {
	        ?>
	        <script>
	            Swal.fire({
	              type: 'success',
	              title: 'Berhasil!',
	              text: 'Kelas diaktifkan',
	              showConfirmButton: false,
	              timer: 2000
	            }).then(()=>{
	                location.href='?page=soalaktif'
	            });
	        </script>
	        <?php
	    }
	}
 ?>
 <h1>aktif</h1>