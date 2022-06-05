<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DPMPTSP Provinsi Riau - Ambil Antrian - NON-OSS </title>

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
  <link rel="shortcut icon" href="<?php echo base_url('assets/user')?>/img/dpmptsp_icon.png">
</head>
<style>
body{
  background-image: url(<?php echo base_url("assets/8.png");?>);
  background-size: cover;
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  color: #333;
  background-color: #eee;
}

h1, h2, h3, h4, h5, h6{
  font-weight: 200;
}

h1{
  text-align: center;
  padding-bottom: 10px;
  border-bottom: 2px solid #2fcc71;
  max-width: 40%;
  margin: 20px auto;
}

/* CONTAINERS */

.container {max-width: 1980px; width: 90%; margin: 0 auto;}
.four { width: 18%; max-width: 18%;}


/* COLUMNS */

.col {
  display: block;
  float:left;
  margin: 1% 0 2% 1.6%;
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
  background-image: url(<?php echo base_url("assets/9.png");?>);
  background-size: cover;
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
  font-size: 25px;
  text-align: center;
  height: 150px;
  line-height: 30px;
  display: block;
  cursor: pointer;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 30px;
}

.form .plan input:checked + label, .form .payment-plan input:checked + label, .form .payment-type input:checked + label{
  border: 3px solid #333;
  background-color: #2fcc71;
}

.form .plan input:checked + label:after, form .payment-plan input:checked + label:after, .form .payment-type input:checked + label:after{
  content: "\2713";
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 100%;
  border: 2px solid #333;
  background: rgb(209,9,138);
  background: linear-gradient(90deg, rgba(209,9,138,0.950315160243785) 0%, rgba(150,24,238,1) 100%);
  z-index: 999;
  position: absolute;
  top: 85%;
  right: 40%;
}

.submit{
  padding: 15px 60px;
  display: inline-block;
  border: none;
  margin: 20px;
  background-color: #2fcc71;
  color: #fff;
  background-image: url(<?php echo base_url("assets/9.png");?>);
  background-size: cover;
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
  font-size: 18px;
  border-radius: 30px;
  -webkit-transition: transform 0.3s ease-in-out;
  -o-transition: transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
}

.submit:hover{
  cursor: pointer;
  transform: rotateX(360deg);
}
</style>  

<body class="d-flex h-100">
<div class="container">
    <form class="form cf" action="<?php echo base_url('Index/saveAntrian') ?>" method="post" >
    <section class="plan cf" onchange="noAntrian(this.value)">
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="17" value="17"><label class="17-label four col" for="17">Non - Bidang Kesatuan Bangsa dan Politik</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="18" value="18"><label class="18-label four col" for="18">Non - Bidang Perdagangan dan Koperasi</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="19" value="19"><label class="19-label four col" for="19">Non - Bidang Perhubungan</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="20" value="20"><label class="20-label four col" for="20">Non - Bidang Social</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="21" value="21"><label class="21-label four col" for="21">Non - Bidang Tenaga Kerja</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="22" value="22"><label class="22-label four col" for="22">Non - Lingkungan Hidup dan Kehutanan</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="23" value="23"><label class="23-label four col" for="23">Non - Bidang Kesehatan</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="24" value="24"><label class="24-label four col" for="24">Non - Bidang Perindustrian</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="25" value="25"><label class="25-label four col" for="25">Non - Bidang Peternakan</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="26" value="26"><label class="26-label four col" for="26">Non - Bidang Pariwisata</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="27" value="27"><label class="27-label four col" for="27">Non - Bidang Sumber Daya Mineral</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="28" value="28"><label class="28-label four col" for="28">Non - Bidang Pekerjaan Umum dan Penataan Ruang</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="29" value="29"><label class="29-label four col" for="29">Non - Bidang Kebudayaan</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="30" value="30"><label class="30-label four col" for="30">Non - Bidang Kelautan dan Perikanan</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="31" value="31"><label class="31-label four col" for="31">Non - Bidang Perkebunan</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="32" value="32"><label class="32-label four col" for="32">Non - Bidang Tanaman Pangan dan Holtikultura</label>
        <input type="radio" name="id_layanan" onchange="this.form.submit();" id="33" value="33"><label class="33-label four col" for="33">Non - Bidang Pendidikan</label>
        
        <!--input class="submit" type="submit" value="Submit"-->   
    </section> 
    </form>
    <div style="margin-top: -100px; ">
    <a href="<?=site_url('/Index/index') ?>"><button type="button"
              class="btn rounded-pill text-white shadow-lg" style="
             margin-left: -610px;">
                <i class="bi bi-arrow-left-circle ms-2" style="font-size: 60px;"></i>
    </button></a>
</div>
  </div>
  
  </main>
  
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
            $("#no_antrian_poli2").val('Data Sudah Penuh');
            // $("#simpan").toggle('slow');
            $("#simpan").prop("disabled",true);
          }else{

            $("#no_antrian_poli").val(output.no_hasil);
            $("#no_antrian_poli2").val(output.no_hasil);
            $("#simpan").prop("disabled",false);
          }
        } // Munculkan alert error
      });
    }else{
      $("#no_antrian_poli").val("");
      $("#no_antrian_poli2").val("");
    }
  }
  </script>
  <script>
      const st = {};

st.flap = document.querySelector('#flap');
st.toggle = document.querySelector('.toggle');

st.choice1 = document.querySelector('#choice1');
st.choice2 = document.querySelector('#choice2');

st.flap.addEventListener('transitionend', () => {

    if (st.choice1.checked) {
        st.toggle.style.transform = 'rotateY(-15deg)';
        setTimeout(() => st.toggle.style.transform = '', 400);
    } else {
        st.toggle.style.transform = 'rotateY(15deg)';
        setTimeout(() => st.toggle.style.transform = '', 400);
    }

})

st.clickHandler = (e) => {

    if (e.target.tagName === 'LABEL') {
        setTimeout(() => {
            st.flap.children[0].textContent = e.target.textContent;
        }, 250);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    st.flap.children[0].textContent = st.choice2.nextElementSibling.textContent;
});

document.addEventListener('click', (e) => st.clickHandler(e));
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
