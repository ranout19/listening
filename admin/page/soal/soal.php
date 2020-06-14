<div class="row">
	<div class="col-lg-4 col-md-6 col-sm-12">
        <div class="widget bg-primary">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>Jumlah Soal</h6>
                        <?php 
                            $sql=mysqli_query($koneksi, "SELECT * FROM soal where id_kelas=3");
                            $jumlah=mysqli_num_rows($sql);
                         ?>
                        <h2><?=$jumlah?></h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-home"></i> 10
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="widget bg-success">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>Jumlah Soal</h6>
                        <?php 
                            $sql=mysqli_query($koneksi, "SELECT * FROM soal where id_kelas=2");
                            $jumlah=mysqli_num_rows($sql);
                         ?>
                        <h2><?=$jumlah?></h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-home"></i> 11
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="widget bg-warning">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>Jumlah Soal</h6>
                        <?php 
                            $sql=mysqli_query($koneksi, "SELECT * FROM soal where id_kelas=1");
                            $jumlah=mysqli_num_rows($sql);
                         ?>
                        <h2><?=$jumlah?></h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-home"></i> 12
                    </div>
  	          </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Semua Soal</h3><a href="?page=soal&aksi=tambah" style="position: absolute; right: 20px;" class="btn btn-primary"><i class="ik ik-plus-circle"></i>Tambah</a></div>
            <div class="card-body">
                <table id="data_table" class="table">
                    <thead>
                        <tr>
                            <th class="nosort" style="border:none;">No</th>
                            <th class="nosort" style="border:none;">Audio</th>
                            <th class="nosort" style="border:none;">Soal</th>
                            <th class="nosort" style="border:none;">Kelas</th>
                            <th class="nosort" style="border:none;">Bahasa</th>
                            <th class="nosort" style="border:none; float: right;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                	<?php 	
                		$no=1;
                		$sql=mysqli_query($koneksi, "SELECT * FROM soal INNER JOIN bahasa ON soal.id_bahasa=bahasa.id_bahasa INNER JOIN kelas ON soal.id_kelas=kelas.id_kelas");
                		while ($data=mysqli_fetch_array($sql)) {?>

                		<tr>
                        	<td><?=$no++ ?></td>
                            <td>
                            	<audio controls style="width: 230px;">
                            		<source src="audio/<?=$data['audio'] ?>" type="audio/mpeg">
                            	</audio>
                        	</td>
        					<td>
        						<?=$data['soal'] ?>
        					</td>
                            
            				<td>
        						<?=$data['kelas'] ?>
        					</td>
        					<td>
        						<?=$data['bahasa'] ?>
        					</td>
                            <td>
                                <div class="table-actions">
                                    <a href="#"><i class="ik ik-eye text-info"></i></a>
                                    <a href="?page=soal&aksi=edit&id=<?=$data['id_soal']?>"><i class="ik ik-edit text-yellow"></i></a>
                                    <a href="?page=soal&aksi=hapus&id=<?=$data['id_soal'] ?>"  onclick="return confirm('Anda yakin ingin menghapus data?')"><i class="ik ik-trash-2 text-danger"></i></a>
                                </div>
                            </td>
                        </tr>
                	<?php	}
                	 ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>