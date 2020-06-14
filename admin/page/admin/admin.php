<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3>Data Admin</h3></div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="border:none;">No</th>
                            <th class="nosort" style="border:none;">Username</th>
                            <th class="nosort" style="border:none;">Password</th>
                            <th class="nosort" style="float: right; padding-right: 31px; border:none;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            $sql=mysqli_query($koneksi, "SELECT*FROM admin");
                            while ($data=mysqli_fetch_array($sql)) {?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$data['username']?></td>
                                <td><?=$data['password']?></td>
                                <td>
                                    <div class="table-actions" style="padding-right: 10px;">
                                        <a href="?page=admin&aksi=edit&id=<?php echo $data['id_admin'];?>"><i class="ik ik-edit text-yellow"></i></a>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="?page=admin&aksi=hapus&id=<?php echo $data['id_admin'];?>"><i class="ik ik-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3>Tambah Admin</h3></div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary mr-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <?php
                if (isset($_POST['tambah'])) {
                    $nm=$_POST['username'];
                    $pw=$_POST['password'];
                    $sql=mysqli_query($koneksi, "INSERT INTO admin SET username='$nm', password='$pw'");
                    if ($sql) {
                        ?>
                        <script>
                            Swal.fire({
                              type: 'success',
                              title: 'Berhasil',
                              text: 'Data ditambahkan',
                              showConfirmButton: false,
                              timer: 1500
                            }).then(()=>{
                                location.href='?page=admin'
                            });
                        </script>
                        <?php
                    }
                }
            ?>
</div>