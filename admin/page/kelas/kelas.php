<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3>Data Kelas</h3></div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="border:none;">No</th>
                            <th class="nosort" style="border:none;">Kelas</th>
                            <th class="nosort" style="float: right; padding-right: 31px; border:none;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            $sql=mysqli_query($koneksi, "SELECT*FROM kelas");
                            while ($data=mysqli_fetch_array($sql)) {?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$data['kelas']?></td>
                                <td>
                                    <div class="table-actions" style="padding-right: 10px;">
                                        <a href="?page=kelas&aksi=edit&id=<?php echo $data['id_kelas'];?>"><i class="ik ik-edit text-yellow"></i></a>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="?page=kelas&aksi=hapus&id=<?php echo $data['id_kelas'];?>"><i class="ik ik-trash-2 text-danger"></i></a>
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
            <div class="card-header"><h3>Tambah Kelas</h3></div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas">
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary mr-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['tambah'])) {
            $kelas=$_POST['kelas'];
            $sql=mysqli_query($koneksi, "INSERT INTO kelas SET kelas='$kelas'");
            if ($sql) {
                ?>
                <script type="text/javascript">
                    Swal.fire({
                      type: 'success',
                      title: 'Berhasil',
                      text: 'Data ditambahkan',
                      showConfirmButton: false,
                      timer:2000
                    }).then(()=>{
                        location.href='?page=kelas'
                    });
                </script>
                <?php
            }
        }
    ?>
</div>