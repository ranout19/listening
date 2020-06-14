<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Tambah Soal</h3></div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select class="form-control" name="kelas" id="kelas">
                                    <option selected="true" disabled="disabled">- pilih kelas -</option>
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
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="bahasa">Bahasa</label>
                                <select class="form-control" name="bahasa" id="bahasa">
                                    <option selected="true" disabled="disabled">- pilih bahasa -</option>
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
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Upload Audio</label>
                                <input type="file" name="audio" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Audio">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Soal</label>
                          <input class="form-control" name="soal">
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Text</label>
                          <textarea class="form-control" id="ckeditor" name="text"></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-lg btn-primary mr-2 col-sm-6 offset-3">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <?php
        if (isset($_POST['tambah'])) {
            $bahasa=$_POST['bahasa'];
            $kelas=$_POST['kelas'];
            $audiofile=$_FILES['audio']['tmp_name'];
            $audioname=$_FILES['audio']['name'];
            $audiofolder="audio/";
            $teks=$_POST['text'];
            $soal=$_POST['soal'];
            if (!move_uploaded_file($audiofile, $audiofolder.$audioname)) {
                 ?>
                <script>
                    Swal.fire({
                      type: 'error',
                      title: 'Gagal Upload!',
                      text: 'Data gagal ditambahkan',
                      showConfirmButton: false,
                      timer: 2000
                    }).then(()=>{
                        location.href='?page=soal'
                    });
                </script>
                <?php
            }else{
                $sql=mysqli_query($koneksi, "INSERT INTO soal (audio, soal, teks, id_bahasa, id_kelas) VALUES ('$audioname', '$soal', '$teks', '$bahasa', '$kelas')");
                if ($sql) {
                    ?>
                    <script>
                        Swal.fire({
                          type: 'success',
                          title: 'Berhasil!',
                          text: 'Data ditambahkan',
                          showConfirmButton: false,
                          timer: 2000
                        }).then(()=>{
                            location.href='?page=soal'
                        });
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        Swal.fire({
                          type: 'error',
                          title: 'Gagal!',
                          text: 'Data gagal ditambahkan',
                          showConfirmButton: false,
                          timer: 2000
                        }).then(()=>{
                            location.href='?page=soal'
                        });
                    </script>
                    <?php
                } 
            }            
        }
    ?>
</div>