<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DPMPTSP Provinsi Riau - Ambil Antrian </title>

  <!-- Custom fonts for this theme -->
  <link href="<?php echo base_url('assets/user')?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="<?php echo base_url('assets/user')?>/css/freelancer.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/user')?>/lib/noty.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/user')?>/lib/themes/metroui.css" rel="stylesheet">


  <link rel="shortcut icon" href="<?php echo base_url('assets/user')?>/img/dpmptsp_icon.png">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tgl_antrian_layanan" ).datepicker({
      dateFormat: "yy-mm-dd"
    });
  } );
  </script>
</head>
<style type="text/css">
  .btncostume{
    background: #2c3e50;
    color: white;
  }
  sup{
    color: red;
  }
  .border1{
    border: thin solid;
  }

  .costum{
    background: white;
    border: thin solid #fff;
  }

  .masthead .masthead-avatar {
    width: 8rem !important;
}
  .bg-beranda{
        background-image: url(<?php echo base_url("assets/2.png");?>);
        background-size: cover;
    }
    .bg-navbar{
        background-image: url(<?php echo base_url("assets/navbar.png");?>);
        background-size: cover;
    }
    .bg-3{
        background-image: url(<?php echo base_url("assets/3.png");?>);
        background-size: cover;
    }
    .bg-4{
        background-image: url(<?php echo base_url("assets/4.png");?>);
        background-size: cover;
    }
    .bg-5{
        background-image: url(<?php echo base_url("assets/5.png");?>);
        background-size: cover;
    }
</style>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg text-uppercase fixed-top bg-navbar" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Antrian DPMPTSP Provinsi Riau</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php if(empty($this->session->userdata('id_pengguna'))) {?>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#registrasi">Login</a>
            </li>
          <?php }else{?>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#"><?php echo $this->session->userdata('nama'); ?></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('Index/logout') ?>">Logout</a>
            </li>
          <?php }?>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#bantuan">Bantuan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Masthead -->
  <header class="masthead text-white text-center bg-beranda">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      

      <!-- Masthead Heading -->
      <img class="avatar mb-2" wdith="500px" height="65px" src="<?php echo base_url('assets/user') ?>/img/DPMPTSP.png" alt="">
      <h1 class="heading text-uppercase mb-2">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h1>
      <div class="row">
          <div class="col-md-12" style="border: thin solid; ">
            <h3>NO ANTRIAN SAAT INI</h3>
          <h1 style="margin-top: 5px;"><?php echo $no_antrian; ?></h1>
          </div>
      </div>
      <?php if(!empty($this->session->userdata('id_pengguna'))){ ?>
        <div class="row" style="margin-top: 60px">
        </div>
        <br>     
        <br>
      <?php } ?>
      <?php if(empty($this->session->userdata('id_pengguna'))){ ?>
        <h4 class="masthead mb-0" style="margin-top: 10px !important;padding: 20px;">Selamat Datang di DPMPTSP Provinsi Riau. 
        <br> Jika anda belum memiliki akun, silakan Registrasi terlebih dahulu.</h4>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Registrasi
        </button>
      <?php } ?>
      

      <!-- Masthead Subheading -->
      <?php if(!empty($this->session->userdata('id_pengguna'))){ ?>
        <div class="row" style="width: 1000px; background-size: cover; margin-top: -30px;">
          <div class="col-md-5 text-right">
            <label><h5>Nomor Antrian Anda :</label></h5>
          </div>
          <div class="col-md-5 text-justify"><h5><?php echo $antrian_pasien ?> </h5></div>
          <div class="col-md-5 text-right">
            <label><h5>Tanggal Kehadiran :</label></h5>
          </div>
          <div class="col-md-5 text-justify"><h5><?php echo $tgl_antrian_layanan ?> </h5></div>
          <?php if(!empty($id)){?>
            <div class="col-md-5" style="position: absolute; left: 29%; margin-top: 130px;"><a href="<?php echo base_url('Index/cetak')."/".$id ?>" style="color: #000; background: #fff; padding: 10px;" target="_blank">Cetak</a></div>
          <?php } ?>
        </div>
        <div class="row" style="width: 1000px;">
          <div class="col-md-5 text-right"><label><h5>Layanan :</label></h5></div>
          <div class="col-md-5 text-justify"><h5><?php echo $nama_layanan?></h5></div>
        </div>
      <?php } ?>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio bg-3" id="registrasi">
     <?php if(empty($this->session->userdata('id_pengguna'))){ ?>
      <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Login</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">

          <div class="container text-white">
            <div class="row justify-content-md-center">
              <div class="col-md-4" style="margin-top: 20px">
                <!-- <h1 align="center">Login </h1> -->
                <form action="<?php echo base_url('Index/proses_login') ?>" method='post'>
                  <label >Username</label>
                  <input type="username" name="username" class="form-control" >
               
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
                  <br><br>

                  <div align="right">
                  <button type="submit"  class="btn btn-primary" >Login</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
    <?php }else{ ?>
      <div class="container ">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white mb-0 ">Ambil Antrian</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">
          <div class="container">
            <div class="row justify-content-md-center text-white">
              <div class="col-md-12" style="margin-top: 20px">
                <!-- <h1 align="center">Login </h1> -->
                <form action="<?php echo base_url('Index/saveAntrian') ?>" method="post">
                  <div class ="row">
                    <div class ="col-md-2">
                      <h6><label>Pilih Layanan</label></h6>   
                    </div>

                    <div class="col-md-5">
                      <select name="id_layanan" id="id_layanan" class="form-control" onchange="noAntrian(this.value)">
                        <option value=""> pilih </option>
                        <?php foreach ($getPoli as $row ) {
                        ?>
                          <option value="<?php echo $row->id_layanan; ?>"> <?php echo $row->nama_layanan; ?> </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <br/>
                  <div class ="row">
                    <div class ="col-md-2">
                      <h6><label>Tanggal kedatangan</label></h6>    
                    </div >
                    <div class="col-md-5">
                    <input type="date" name="tgl_antrian_layanan" id="tgl_antrian_layanan" class="form-control">                   
                      <input type="hidden" name="no_antrian_layanan2" id="no_antrian_layanan2" value="" disabled="" class="form-control">
                      <input type="hidden" name="no_antrian_layanan" id="no_antrian_layanan" value="" class="form-control">
                      <input type="hidden" name="no_antrian" value="<?php echo $no_antrian ?>">
                    </div>
                        </div>

                 <br/>
                  <div class="row text-right">
                    <div class="col-md-7">
                      <input type="submit" name="simpan" id="simpan" value="Ambil Antrian" class="btn btn-primary">
                    </div>
                  </div>
                </form>
                <br />

                 <div class="row text-justify" >
                  <div class ="col-md-2">
                 <h6>Keterangan :</h6></div>
                  <ol>
                  ONLINE SINGLE SUBMISSION
                    <li>Bidang Perdaganan dan Koperasi (BPDK)</li>
                    <li>Bidang Perhubungan (BPHG)</li>
                    <li>Bidang Social (BSCL)</li>
                    <li>Bidang Tenaga Kerja (BTKJ)</li>
                    <li>Lingkungan Hidup dan Kehutanan (LHDK)</li>
                    <li>Bidang Kesehatan (BKST)</li>
                    <li>Bidang Perindustrian (BPRN)</li>
                    <li>Bidang Peternakan (BPNK)</li>
                    <li>Bidang Pariwisata (BPWT)</li>
                    <li>Bidang Sumber Daya Mineral (BSDM)</li>
                    <li>Bidang Pekerjaan Umum dan Penataan Ruang (BPPR)</li>
                    <li>Bidang Kebudayaan (BKDY)</li>
                    <li>Bidang Kelautan dan Perikanan (BKDP)</li>
                    <li>Bidang Perkebunan (BPUN)</li>
                    <li>Bidang Tanaman Pangan dan Holtikultura (BTPH)</li>
                    <li>Bidang Pendidikan (BPDD)</li>
                  </ol>        
                  <ol>
                  NON - ONLINE SINGLE SUBMISSION
                    <li>Non - Bidang Kesatuan Bangsa dan Politik (NKBP)</li>
                    <li>Non - Bidang Perdagangan dan Koperasi (NBPK)</li>
                    <li>Non - Bidang  Perhubungan (NBPH)</li>
                    <li>Non - Bidang Sosial (NBSC)</li>
                    <li>Non - Bidang Tenaga Kerja (NBTK)</li>
                    <li>Non - Lingkungan Hidup dan Kehutanan (NLHK)</li>
                    <li>Non - Bidang Kesehatan (NBKT)</li>
                    <li>Non - Bidang Perindustrian (NBPN)</li>
                    <li>Non - Bidang Peternakan (NBPT)</li>
                    <li>Non - Bidang Pariwisata (NBPW)</li>
                    <li>Non - Bidang Sumber Daya Mineral (NSDM)</li>
                    <li>Non - Bidang Pekerjaan Umum dan Penataan Ruang (NPPR)</li>
                    <li>Non - Bidang Kebudayaan (NBKY)</li>
                    <li>Non - Bidang Kelautan dan Perikanan (NBKP)</li>
                    <li>Non - Bidang Perkebunan (NBPU)</li>
                    <li>Non - Bidang Tanaman Pangan dan Holtikultura (NTPH)</li>
                    <li>Non - Bidang Pendidikan (NPDD)</li>
                  </ol> 
                  <div class ="col-md-2">
                 <h6></h6></div>
                 <ol>
                   Pengambilan Izin atau Rekomendasi (PIRK)
                 </ol>
              </div>
              </div>


            </div>
          </div>

        </div>
        <!-- /.row -->
      </div>
    <?php } ?>
  </section>

  <!-- About Section -->
  <section class="page-section bg-4 text-white mb-0" id="bantuan">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-uppercase text-center text-white">Bantuan</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
    <div class="container">  
      <div class="row">
        <div class="col-lg-4.ml-auto" align="center" >
          <p class="lead">Klik Login > Pilih Pelayanan > Klik Cetak</p>
          <p class="lead">Client melakukan Registrasi > Input Nomor Identitas, Nama Lengkap, Email, NPWP, Nama Perusahaan,
             Alamat, Nomor Telephone, Username dan Password > Klik Login >  Pilih Pelayanan > Klik Cetak </p>
      </div>
    </div>
    </div>
      <!-- About Section Button -->
      <!-- <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
          <i class="fas fa-download mr-2"></i>
          Free Download!
        </a>
      </div> -->
    <!-- </div>
    </div> -->
  </section>

  


  <!-- Footer -->
  <footer class="footer text-center bg-5">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">Jalan Jend. Sudirman No.464, Jadirejo, Kec. Sukajadi 
            <br>Pekanbaru, Riau 28121</p>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-6">
          <h4 class="text-uppercase mb-4">Telephone</h4>
          
          <p class="lead mb-0">(021)79184767</p>
        </div>

      </div>
    </div>
 

  <!-- Copyright Section >
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>&copy; Antrian Puskesmas 2019 Made By Evi Dwi Meliana </small>
    </div>
  </section-->
  </footer>
  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Index/registrasi') ?>" method="post">

            <div>
                <label >Nomor KTP <sup>*</sup></label>
                <input type="text" id="no_identitas" name="no_identitas" class="form-control" value="" placeholder="Nomor KTP" required="">
            </div>

            <div>
               <label >Nama <sup>*</sup></label>
               <input type="text" id="nama" name="nama" class="form-control" value="" placeholder="Nama" required="">
            </div>

            <div>
               <label >Email <sup>*</sup></label>
               <input type="text" id="email" name="email" class="form-control" value="" placeholder="Email" required="">
            </div>

            <div>
               <label >Nomor Pokok Wajib Pajak (NPWP) <sup>*</sup></label>
               <input type="text" id="npwp" name="npwp" class="form-control" value="" placeholder="Nomor Pokok Wajib Pajak (NPWP)" required="">
            </div>

            <div>
               <label >Nama Perusahaan <sup>*</sup></label>
               <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control" value="" placeholder="Nama Perusahaan" required="">
            </div>

            <div>
              <label >Alamat</label>
              <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat"></textarea>
            </div>

            <div>
                <label >Nomor Handphone</label>
                <input type="no_telp" id="no_telp" name="no_telp" class="form-control" value="" placeholder="Nomor Handphone">
            </div>

            <div>
                <label >Username <sup>*</sup></label>
                <input type="text" id="username" name="username" class="form-control" value="" placeholder="Username" required="">
            </div>

            <div>
                <label >Password <sup>*</sup></label>
                <input type="password" id="password" name="password" class="form-control" value="" placeholder="Password" required="">
            </div>

            <br><br>
            <div align="right">
            <!-- <a href="<?php //echo base_url() ?>"  >Registrasi</a> -->
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          
          </form>
      </div>
      
    </div>
  </div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/user')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/user')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('assets/user')?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url('assets/user')?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url('assets/user')?>/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('assets/user')?>/js/freelancer.min.js"></script>
  <script src="<?php echo base_url('assets/user')?>/lib/noty.min.js"></script>
  <script type="text/javascript">
    function noAntrian(id_layanan){
    // alert(id_layanan);?
    if(id_layanan!=""){
      $.ajax({

        url: "<?php echo base_url('Index/getNoAntrian'); ?>",
        type : "POST",
        data : "id_layanan="+id_layanan,
        datatype: "json",
        success:function(response){
          console.log(response);
          // alert(data);
          var output = JSON.parse(response);
          if(output.no > output.maks){
            $("#no_antrian_layanan2").val('Data Sudah Penuh');
            // $("#simpan").toggle('slow');
            $("#simpan").prop("disabled",true);
          }else{

            $("#no_antrian_layanan").val(output.no_hasil);
            $("#no_antrian_layanan2").val(output.no_hasil);
            $("#simpan").prop("disabled",false);
          }
        } // Munculkan alert error
      });
    }else{
      $("#no_antrian_layanan").val("");
      $("#no_antrian_layanan2").val("");
    }
  }
  </script>

   <?php if($this->session->flashdata('notif')){?>
        <script type="text/javascript">
            new Noty({
                
                text: '<?php echo $this->session->flashdata('pesan'); ?>',
                timeout: 3000,
                theme: "metroui",
                type: "<?php echo $this->session->flashdata('type'); ?>",

                
            }).show();
        </script>
        <?php } ?>

</body>

</html>
