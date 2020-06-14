<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header"><h3>Pilih Soal Aktif</h3></div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="border:none;">No</th>
                            <th class="nosort" style="border:none;">Kelas</th>
                            <th class="nosort" style="border:none;">Bahasa</th>
                            <th class="nosort" style="float: right; padding-right: 38px; border:none;">Status</th>
                            <th class="nosort" style="border: none; padding-left: 34px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no=1;
                            $sql=mysqli_query($koneksi, "SELECT * FROM allsoal INNER JOIN kelas ON allsoal.id_kelas=kelas.id_kelas INNER JOIN bahasa ON allsoal.id_bahasa=bahasa.id_bahasa");
                            while ($data=mysqli_fetch_array($sql)) {
                         ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$data['kelas']?></td>
                                <td><?=$data['bahasa']?></td>
                                <td>
                                    <?php if ($data['status']==1){ ?>
                                        <a href="?page=soalaktif&aksi=nonaktif&id=<?=$data['id_as']?>" class="btn btn-small btn-success" style="float: right; margin-right: 17px;">Aktif</a>
                                    <?php }else{?>
                                        <a href="?page=soalaktif&aksi=aktif&id=<?=$data['id_as']?>" class="btn btn-small btn-danger" style="float: right;">Tidak aktif</a>
                                    <?php } ?>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <a href=""><i class="ik ik-edit text-yellow"></i></a>
                                        <a href=""  onclick="return confirm('Anda yakin ingin menghapus data?')"><i class="ik ik-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header"><h3>Tambah Soal</h3></div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option selected="true" disabled="disabled">- Pilih kelas -</option>
                          <?php
                            $sql=mysqli_query($koneksi, "SELECT*FROM kelas");
                            while($row1=$sql->fetch_array()) {
                              ?>
                              <option value="<?=$row1['id_kelas']?>"><?=$row1['kelas']?></option>
                              <?php
                            }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bahasa">Bahasa</label>
                        <select class="form-control" name="bahasa" id="bahasa">
                            <option selected="true" disabled="disabled">- Pilih bahasa -</option>
                          <?php
                            $sql=mysqli_query($koneksi, "SELECT*FROM bahasa");
                            while($row1=$sql->fetch_array()) {
                              ?>
                              <option value="<?=$row1['id_bahasa']?>"><?=$row1['bahasa']?></option>
                              <?php
                            }
                          ?>
                        </select>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary mr-2">Tambah</button>
                </form>
                <?php
                    if (isset($_POST['tambah'])) {
                        $kelas=$_POST['kelas'];
                        $bahasa=$_POST['bahasa'];
                        $status=0;
                        $sql=mysqli_query($koneksi, "INSERT INTO allsoal SET id_kelas='$kelas', id_bahasa='$bahasa', status='$status'");
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
                                    location.href='?page=bahasa'
                                });
                            </script>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>