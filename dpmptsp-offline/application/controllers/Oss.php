<?php
class Oss extends CI_Controller {
 
    public function __construct(){
		parent::__construct();
		// $this->load->library('fpdf');
	}

    public function home()
      {
         $this->load->view('user/oss');
      }
   public function edit(){
      $id = $this->input->post('id');
      
      $kehadiran = $this->input->post('kehadiran');
      $this->db->set('id', $id);
     
      $this->db->set('kehadiran', $kehadiran="hadir");
      $this->db->where('id', $id);            
      $this->db->update('antrian_layanan');            
      redirect(base_url());
   }

   public function saveAntrian(){
      $id_layanan = $this->input->post('id_layanan');
      $no_antrian_layanan = 4;
      $id_pengguna = $this->session->userdata('id_pengguna');
      $nama = $this->session->userdata('nama');
      $tanggal = date("Y-m-d");

       // echo $tanggal; exit();

   //    $this->db->set('id_layanan',$id_layanan);
   //    $this->db->set('no_antrian_layanan',$nama);
   //    $this->db->set('id_pengguna',$id_pengguna);
   //   $this->db->set('nama',$nama);
   //    $this->db->set('tgl_antrian_layanan',$tanggal);
   //   $this->db->set('kehadiran',"belum");
   //    $this->db->insert('antrian_layanan');

      $no_antrian = $this->input->post('no_antrian');
      $this->db->set('no_antrian',$no_antrian+1);
      $this->db->set('tgl_antrian',$tanggal);
      $this->db->insert('antrian');

      redirect(base_url());

   }
}
