<div class="row clearfix">
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
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="widget bg-danger">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>Jumlah Semua Soal</h6>
                        <?php 
                            $sql=mysqli_query($koneksi, "SELECT * FROM soal");
                            $jumlah=mysqli_num_rows($sql);
                         ?>
                        <h2><?=$jumlah?></h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-layers" style="font-size: 48px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="widget bg-info">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>Jumlah Kelas</h6>
                        <?php 
                            $sql=mysqli_query($koneksi, "SELECT * FROM kelas");
                            $jumlah=mysqli_num_rows($sql);
                         ?>
                        <h2><?=$jumlah?></h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-home" style="font-size: 48px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="widget bg-aqua">
            <div class="widget-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="state">
                        <h6>Jumlah Bahasa</h6>
                        <?php 
                            $sql=mysqli_query($koneksi, "SELECT * FROM bahasa");
                            $jumlah=mysqli_num_rows($sql);
                         ?>
                        <h2><?=$jumlah?></h2>
                    </div>
                    <div class="icon">
                        <i class="ik ik-mic" style="font-size: 48px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>