<?php 
    $id=$_GET['id'];
    $sql=mysqli_query($koneksi, "SELECT*FROM soal INNER JOIN kelas ON soal.id_kelas=kelas.id_kelas INNER JOIN bahasa ON soal.id_bahasa=bahasa.id_bahasa WHERE id_soal='$id'");
    $data=mysqli_fetch_array($sql);
 ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Edit Soal</h3></div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?=$data['id_soal']?>">
                                <label for="kelas">Kelas</label>
                                <select class="form-control" name="kelas" id="kelas">
                                    <option disabled="disabled">- pilih kelas -</option>
                                    <option selected="true" value="<?=$data['id_kelas']?>"><?=$data['kelas']?></option>
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bahasa">Bahasa</label>
                                <select class="form-control" name="bahasa" id="bahasa">
                                    <option selected="true" disabled="disabled">- pilih bahasa -</option>
                                    <option selected="true" value="<?=$data['id_bahasa']?>"><?=$data['bahasa']?></option>
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
                    </div>
                    <div class="form-group">
                        <label>Upload Audio</label><br>
                        <audio class="col-md-12" controls style="margin-bottom: 10px;">
                                <source src="audio/<?=$data['audio']?>" type="audio/mpeg">
                            </audio><br>
                        <input type="file" name="audio" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="<?=$data['audio']?>">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Soal</label>
                          <input class="form-control" value="<?=$data['soal']?>" name="soal">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Text</label>
                          <textarea class="form-control" id="ckeditor" name="text"><?=$data['teks']?></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-lg btn-success mr-2 col-sm-6 offset-3">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['ubah'])) {
        $ids=$_POST['id'];
        $bahasa=$_POST['bahasa'];
        $kelas=$_POST['kelas'];
        $audiofile=$_FILES['audio']['tmp_name'];
        $audioname=$_FILES['audio']['name'];
        $audiofolder="audio/";
        $soal=$_POST['soal'];
        $teks=$_POST['text'];
        $audio=move_uploaded_file($audiofile, $audiofolder.$audioname);
        if (!$audio) {
            $sql=mysqli_query($koneksi, "UPDATE soal SET soal='$soal', teks='$teks', id_bahasa='$bahasa', id_kelas='$kelas' WHERE id_soal='$ids'");
            if ($sql) {
                ?>
                <script>
                    Swal.fire({
                      type: 'success',
                      title: 'Berhasil!',
                      text: 'Data diubah',
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
                      text: 'Data gagal diubah',
                      showConfirmButton: false,
                      timer: 2000
                    }).then(()=>{
                        location.href='?page=soal'
                    });
                </script>
                <?php
            }
        }elseif($audio){
            $sql2=mysqli_query($koneksi, "UPDATE soal SET audio ='$audioname', teks='$teks', soal='$soal', id_bahasa='$bahasa', id_kelas='$kelas' WHERE id_soal='$ids'");
            if ($sql2) {
                ?>
                <script>
                    Swal.fire({
                      type: 'success',
                      title: 'Berhasil!',
                      text: 'Data diubah',
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
                      text: 'Data gagal diubah',
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