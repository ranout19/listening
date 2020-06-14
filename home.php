<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Listening</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="admin/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="admin/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="admin/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="admin/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="admin/plugins/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="admin/dist/css/theme.min.css">
        <link rel="stylesheet" href="admin/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="admin/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <script src="admin/src/js/vendor/modernizr-2.8.3.min.js"></script>
        <style type="text/css">
            @font-face{
                font-family: semua;
                src:url(admin/lib/Montserrat-Regular.ttf);
            }
            *{
                font-family: semua;
            }
            .wrapper .header-top{
                padding-left: 0;
                color: white;
            }
            .pd{
              padding: 30px;
            }
            .pd1{
              padding: 20px;
            }
        </style>
    </head>

    <body style="background-color: #F6F7FB; ">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header class="header-top" header-theme="blue">
              <div class="container" style="margin-top: 5px;">
              	<?php 
              		include 'admin/lib/koneksi.php';
              		$sql=mysqli_query($koneksi, "SELECT * FROM allsoal INNER JOIN bahasa ON allsoal.id_bahasa=bahasa.id_bahasa INNER JOIN soal ON allsoal.id_kelas=soal.id_kelas INNER JOIN kelas ON allsoal.id_kelas=kelas.id_kelas WHERE status = 1");
              		$row=mysqli_fetch_assoc($sql);
              	 ?>
                <h4 style="float: left;">Kelas <?=$row['kelas']?></h4>
                <h4 style="float: right;">Bahasa <?=$row['bahasa']?></h4>
                <center><img src="admin/src/img/brand-white.svg" class="header-brand-img" style="width: 35px;" alt="lavalite"> </center>
              </div>
            </header>

            <div class="container" style="margin-top: 115px;">
              <div class="row">
                <div class="col-md-8">
                	<div class="owl-container">
                		<div class="owl-carousel single">
                			<?php
                    	$no=1; 
                    	$sql=mysqli_query($koneksi, "SELECT * FROM allsoal INNER JOIN bahasa ON allsoal.id_bahasa=bahasa.id_bahasa INNER JOIN soal ON allsoal.id_kelas=soal.id_kelas INNER JOIN kelas ON allsoal.id_kelas=kelas.id_kelas WHERE status = 1");
              				while($row=mysqli_fetch_assoc($sql)){ ?>
	                			<div class="card pd">
			                    <h5><?=$no++?>. Listening about an accident</h5>
			                    <audio controls style="margin-top: 6px; margin-left: 12px; width: 610px;">
			                      <source src="admin/audio/<?=$row['audio']?>" type="audio/mpeg">
			                    </audio>
			                    <p style="font-style: bold; margin-top: 17px;">Text of above :</p>
			                    <div class="teks" >
			                      <?=$row['teks']?>
			                    </div>
			                    <p style="font-style: bold; margin-top: 24px;">Question :</p>
			                    <div class="soal">
                            <p><?=$row['soal']?></p>
		                    	</div>
	                		  </div>
	                		<?php } ?>
                	  </div>  
                	  <div class="slider-nav text-center" style="position: fixed;top: 297px; right: 140px;">
                          <a href="#" class="btn btn-warning owl-prev">
                              <i class="ik ik-chevron-left"></i>Sebelumnya
                          </a>
                          <a href="#" class="btn btn-primary owl-next" style="margin-left: 7px;">
                              Selanjutnya <i class="ik ik-chevron-right"></i>
                          </a>
                      </div>
                  </div>
                </div>
                <div class="col-md-3" style="position: fixed; top: 115px; right: 105px;">
                  <div class="card pd1">
                    Nomor Soal
                    <hr style="margin-top: 8px;">
                    <div class="row">
                    	<?php
                    	$no=1; 
                    	$sql=mysqli_query($koneksi, "SELECT * FROM allsoal INNER JOIN bahasa ON allsoal.id_bahasa=bahasa.id_bahasa INNER JOIN soal ON allsoal.id_kelas=soal.id_kelas INNER JOIN kelas ON allsoal.id_kelas=kelas.id_kelas WHERE status = 1");
              				while($row=mysqli_fetch_assoc($sql)){ ?>
                      <div class="col-md-2">
                        <a href="" class="badge badge-primary" style="margin-top: 17px;"><?=$no++?></a>
                      </div>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="admin/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="admin/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="admin/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="admin/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="admin/plugins/screenfull/dist/screenfull.js"></script>
        <script src="admin/plugins/moment/moment.js"></script>
        <script src="admin/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="admin/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="admin/plugins/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="admin/dist/js/theme.min.js"></script>
        <script src="admin/js/calendar.js"></script>
        <script src="admin/js/carousel.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
