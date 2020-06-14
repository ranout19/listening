<?php 
    $id=$_GET['id'];
    $sql=mysqli_query($koneksi, "SELECT*FROM kelas WHERE id_kelas='$id'");
    $data=mysqli_fetch_array($sql);
 ?>
<div class="col-md-6">
    <div class="card">
        <div class="card-header"><h3>Ubah Bahasa</h3></div>
        <div class="card-body">
            <form class="forms-sample" method="post" action="">
                <input type="hidden" name="id" class="form-control" value="<?=$data['id_kelas']?>" required>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?=$data['kelas']?>" id="bahasa" required>
                </div>
                <button type="submit" name="edit" class="btn btn-primary mr-2">Edit</button>
            </form>
        </div>
    </div>
</div>
    <?php
        if (isset($_POST['edit'])) {
            $idk=$_POST['id'];
            $kelas=$_POST['kelas'];
            $sql=mysqli_query($koneksi, "UPDATE kelas SET kelas='$kelas' where id_kelas='$idk'");
            if ($sql) {
                ?>
                <script>
                    Swal.fire({
                      type: 'success',
                      title: 'Berhasil',
                      text: 'Data diubah',
                      showConfirmButton: false,
                      timer: 2000
                    }).then(()=>{
                        location.href='?page=kelas'
                    });
                </script>
                <?php
            }
        }
    ?>