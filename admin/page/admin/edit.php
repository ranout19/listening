<?php 
    $id=$_GET['id'];
    $sql=mysqli_query($koneksi, "SELECT*FROM admin WHERE id_admin='$id'");
    $data=mysqli_fetch_array($sql);
 ?>
<div class="col-md-6">
    <div class="card">
        <div class="card-header"><h3>Ubah Admin</h3></div>
        <div class="card-body">
            <form class="forms-sample" method="post" action="">
                <input type="hidden" name="id" class="form-control" value="<?=$data['id_admin']?>" required>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="<?=$data['username']?>" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Bahasa</label>
                    <input type="password" name="password" class="form-control" value="<?=$data['password']?>" id="password" required>
                </div>
                <button type="submit" name="edit" class="btn btn-primary mr-2">Edit</button>
            </form>
        </div>
    </div>
</div>
    <?php
        if (isset($_POST['edit'])) {
            $ida=$_POST['id'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sql=mysqli_query($koneksi, "UPDATE admin SET username='$username', password='$password' where id_admin='$ida'");
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
                        location.href='?page=admin'
                    });
                </script>
                <?php
            }
        }
    ?>