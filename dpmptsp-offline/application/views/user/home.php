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

    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">
  <meta name="author" content="Indra Styawantoro">
  <link rel="shortcut icon" href="<?php echo base_url('assets/user')?>/img/dpmptsp_icon.png">
  <!-- Title -->
  <title>Aplikasi Antrian Berbasis Web</title>

  <!-- Favicon icon -->
  

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <!-- Custom Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/css/style.css">
  
</head>
<style type="text/css">
body{
  background-image: url(<?php echo base_url("assets/8.png");?>);
  background-size: cover;
  overflow: hidden;
}

/* CONTAINERS */

.container {max-width: auto; width: 80%; margin: 0 auto;}
.four { width: 23%; max-width: 23%;}


/* COLUMNS */

.col {
  display: block;
  float:left;
  margin: 2.2% 0 1% 1.6%;
}

.col:first-of-type { margin-left: 10; }

/* CLEARFIX */

.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

/* FORM */

.form .plan input, .form .payment-plan input, .form .payment-type input{
  display: none;
}

.form label{
  position: relative;
  color: #fff;
  background-size: cover;
  font-size: 20px;
  text-align: center;
  height: 100px;
  line-height: 50px;
  bottom: 575px;
  left: 920px;
  display: block;
  cursor: pointer;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 15px;
}
.video-fluid {
  width: 800px;
  margin-left: 200px;
  box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}


</style>

<body>

  <main class="flex-shrink-0" >
    
    <div class="container pt-5">
      <!-- tampilkan pesan selamat datang -->
      <div class="alert  d-flex align-items-center mb-5 text-white" role="alert" >
      <img class="avatar mb-2" wdith="600px" height="85px" src="<?php echo base_url('assets/user') ?>/img/DPMPTSP.png" alt="">
        <div>
        <h5>Selamat Datang di <strong>DPMPTSP Provinsi Riau</strong>. Silahkan pilih halaman untuk mengambil nomor Antrian.</h5>
        </div>
      </div>
      
        <!-- link halaman nomor antrian -->
        <div class="col-lg-5 mb-4 text-center text-white" style="width: 345px; left: 900px; top: -50px;">
          <div class="card border-0 shadow-lg" style="background-image: url(<?php echo base_url("assets/7.png");?>);
              background-size: cover;">
            <div class="card-body">
              
              <h5>ONLINE SINGLE SUBMISSION</h5>
              <!--p class="mb-4">Halaman Nomor Antrian digunakan pengunjung untuk mengambil nomor antrian.</p-->
              <a href="<?php echo base_url().'oss/home'; ?>" class="btn rounded-pill px-4 py-2 text-white shadow-lg" style="background: rgb(209,9,138);
                  background: linear-gradient(90deg, rgba(209,9,138,0.950315160243785) 0%, rgba(150,24,238,1) 100%);">
                Tampilkan <i class="bi-chevron-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        

       <div class="col-lg-5 mb-4  text-center text-white" style="width: 345px; left: 900px; top: -160px; margin-top: 140px;">
          <div class="card border-0 shadow-lg" style="background-image: url(<?php echo base_url("assets/7.png");?>);
            background-size: cover;">
            <div class="card-body">   
                 
            <br><br><br>
            </div>
          </div>
        </div>


        <!-- link halaman panggilan antrian -->
        <div class="col-lg-5 mb-4  text-center text-white" style="width: 345px; left: 900px; top: -160px;">
          <div class="card border-0 shadow-lg" style="background-image: url(<?php echo base_url("assets/7.png");?>);
            background-size: cover;">
            <div class="card-body">      
              <h5>NON - ONLINE SINGLE SUBMISSION</h5>
              <!--p class="mb-4">Halaman Panggilan Antrian digunakan petugas loket untuk memanggil antrian pengunjung.</p-->
              <a href="<?=site_url('/non_oss/non_oss') ?>" class="btn rounded-pill px-4 py-2 text-white shadow-lg" style="background: rgb(209,9,138);
            background: linear-gradient(90deg, rgba(209,9,138,0.950315160243785) 0%, rgba(150,24,238,1) 100%);">
                Tampilkan <i class="bi-chevron-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-5 text-center text-white" style="width: 345px; left: 900px; top: -160px;">
          <div class="card border-0 shadow-lg" style="background-image: url(<?php echo base_url("assets/7.png");?>);
  background-size: cover;">
            <div class="card-body p-3">
              <div class="mb-2" style="background: rgb(209,9,138);
background: linear-gradient(90deg, rgba(209,9,138,0.950315160243785) 0%, rgba(150,24,238,1) 100%);">             
              </div>
              <h6>MASUKKAN KODE ANTRIAN</h6>
              <!--p class="mb-4">Halaman Panggilan Antrian digunakan petugas loket untuk memanggil antrian pengunjung.</p-->
              <button type="button" data-toggle="modal" data-target="#exampleModal" 
              class="btn rounded-pill px-4 py-2 text-white shadow-lg" style="background: rgb(209,9,138);
                      background: linear-gradient(90deg, rgba(209,9,138,0.950315160243785) 0%, rgba(150,24,238,1) 100%);">
                Tampilkan <i class="bi-chevron-right ms-2"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="">
    <form class="form cf" action="<?php echo base_url('Index/saveAntrian') ?>" method="post" >
    <section class="plan cf" onchange="noAntrian(this.value)">
    <input type="radio" name="id_layanan" onchange="this.form.submit();" id="34" value="34"><label class="34-label four col" for="34">PENGAMBILAN IZIN ATAU REKOMENDASI</label>
    </section>
    </form>
       </div>

       <div style="margin-top: -800px;">
        <video class="video-fluid z-depth-1" autoplay loop controls muted>
          <source src="<?php echo base_url("assets/DPMPTSP.mp4");?>" type="video/mp4" />
        </video>
      </div>
       
  </main>


  <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Kode</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Oss/edit') ?>" method="post">

            <div>
               <label >Kode Antrian <sup>*</sup></label>
               <input type="text" id="id" name="id" class="form-control" value="" placeholder="Contoh : 1" required="">
            </div>
            
            <div>
            <!--label >Pilih Antrian <sup>*</sup></label>
                      <select name="id_layanan" id="id_layanan" class="form-control" onchange="noAntrian(this.value)">
                        <option value="">Klik Disini</option>
                        <?php foreach ($getPoli as $row ) {
                        ?>
                          <option value="<?php echo $row->id_layanan; ?>"> <?php echo $row->kode_layanan; ?> </option>
                        <?php } ?>
                      </select>
                    </div>
            <br--><br>
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
            $("#no_antrian_layanan").val('Data Sudah Penuh');
            // $("#simpan").toggle('slow');
            $("#simpan").prop("disabled",true);
          }else{

            $("#no_antrian_layanan").val(output.no_hasil);
            $("#no_antrian_layanan").val(output.no_hasil);
            $("#simpan").prop("disabled",false);
          }
        } // Munculkan alert error
      });
    }else{
      $("#no_antrian_layanan").val("");
      $("#no_antrian_layanan").val("");
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
