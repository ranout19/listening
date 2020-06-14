<?php 
    $id=$_GET['id'];
    $sql=mysqli_query($koneksi, "SELECT*FROM bahasa WHERE id_bahasa='$id'");
    $data=mysqli_fetch_array($sql);
 ?>
<div class="col-md-6">
    <div class="card">
        <div class="card-header"><h3>Ubah Bahasa</h3></div>
        <div class="card-body">
            <form class="forms-sample" method="post" action="">
                <input type="hidden" name="id" class="form-control" value="<?=$data['id_bahasa']?>" required>
                <div class="form-group">
                    <label for="bahasa">Bahasa</label>
                    <input type="text" name="bahasa" class="form-control" value="<?=$data['bahasa']?>" id="bahasa" required>
                </div>
                <button type="submit" name="edit" class="btn btn-primary mr-2">Edit</button>
            </form>
        </div>
    </div>
</div>
    <?php
        if (isset($_POST['edit'])) {
            $idb=$_POST['id'];
            $bahasa=$_POST['bahasa'];
            $sql=mysqli_query($koneksi, "UPDATE bahasa SET bahasa='$bahasa' where id_bahasa='$idb'");
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
                        location.href='?page=bahasa'
                    });
                </script>
                <?php
            }
        }
    ?>