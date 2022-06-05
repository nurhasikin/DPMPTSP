<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Super.php');

class Antrian_layanan extends Super
{
    
    function __construct()
    {
        parent::__construct();
        $this->language       = 'english'; /** Indonesian / english **/
        $this->tema           = "flexigrid"; /** datatables / flexigrid **/
        $this->tabel          = "antrian_layanan";
        $this->active_id_menu = "Antrian";
        $this->nama_view      = "Antrian";
        $this->status         = true; 
        $this->field_tambah   = array(); 
        $this->field_edit     = array(); 
        $this->field_tampil   = array('id_layanan','id_pengguna','tgl_antrian_layanan','no_antrian_layanan'); 
        $this->folder_upload  = 'assets/uploads/files';
        $this->add            = true;
        $this->edit           = false;
        $this->delete         = false;
        $this->crud;
    }

    function index(){
            $data = [];
            if($this->crud->getState() == "add")
            redirect(base_url('admin/Antrian_layanan/addAntrianLayanan'));
            /** Bagian GROCERY CRUD USER**/


            /** Relasi Antar Tabel 
            * @parameter (nama_field_ditabel_ini, tabel_relasi, field_dari_tabel_relasinya)
            **/
            $this->crud->set_relation('id_pengguna','pengguna','nama');
            $this->crud->set_relation('id_layanan','kategori_layanan','nama_layanan');

            /** Upload **/
            // $this->crud->set_field_upload('nama_field_upload',$this->folder_upload);  
            // $this->crud->set_field_upload('gambar',$this->folder_upload);  
            
            /** Ubah Nama yang akan ditampilkan**/
            // ->display_as('nama','Nama Setelah di Edit')
            $this->crud->display_as('id_layanan','Poli'); 
            $this->crud->display_as('id_pengguna','Nama Pasien'); 
            
            /** Akhir Bagian GROCERY CRUD Edit Oleh User**/
            $data = array_merge($data,$this->generateBreadcumbs());
            $data = array_merge($data,$this->generateData());
            $this->generate();
            $data['output'] = $this->crud->render();
            $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    private function generateBreadcumbs(){
        $data['breadcumbs'] = array(
                array(
                    'nama'=>'Dashboard',
                    'icon'=>'fa fa-dashboard',
                    'url'=>'admin/dashboard'
                ),
                array(
                    'nama'=>'Admin',
                    'icon'=>'fa fa-users',
                    'url'=>'admin/useradmin'
                ),
            );
        return $data;
    }

    public function addAntrianLayanan(){
        $data = [];
        $data = array_merge($data,$this->generateBreadcumbs());
        $data = array_merge($data,$this->generateData());
        $this->generate();

        $rowPoli = $this->db->get('kategori_layanan')->result();
        $data['getPoli'] = $rowPoli;
        // var_dump($rowPoli); exit();

        $rowPasien =$this->db->get('pengguna')->result();
        $data['getPasien'] = $rowPasien;

        $data['page'] = 'v_antrian_poli';
        $data['output'] = $this->crud->render();
        $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }

    public function getNoAntrian(){
        $id_layanan = $this->input->post('id_layanan');
        $tanggal = date("Y-m-d");

        $this->db->where('antrian_layanan.id_layanan',$id_layanan);
        $this->db->where('antrian_layanan.tgl_antrian_layanan',$tanggal);
        $sql = $this->db->get('antrian_layanan');
        $getPoli = $sql->num_rows();//cek jumlah row


        

        if($getPoli==0){//kondisi jika belum ada yg daftar perhari
            $this->db->where('id_layanan',$id_layanan);
            $sql2 = $this->db->get('kategori_layanan');
            $rowPoli = $sql2->row();
            $no = 1;
            $kode=$rowPoli->kode_layanan;
            $noAntrian = $kode.$no;
            $maks = $rowPoli->jumlah_maksimal;

        }else{
            //kondisi jika sudah ada data per hari
            $this->db->limit(1);
            $this->db->order_by('no_antrian_layanan',"DESC");
            $this->db->where('antrian_layanan.id_layanan',$id_layanan);
            $this->db->where('antrian_layanan.tgl_antrian_layanan',$tanggal);
            $sql = $this->db->get('antrian_layanan');
            $rowNo = $sql->row();


            $this->db->where('id_layanan',$id_layanan);
            $sql2 = $this->db->get('kategori_layanan');
            $rowPoli = $sql2->row();
            $kode = $rowPoli->kode_layanan;
            $no = $rowNo->no_antrian_layanan + 1;
            $maks = $rowPoli->jumlah_maksimal;

            // var_dump($rowNo); exit();
            $noAntrian = $kode.$no;
        }

        $hasil = array("no_hasil"=>$noAntrian, "no"=>$no, "maks"=>$maks);
        echo json_encode($hasil);
    }

    public function save(){
        // var_dump($_POST); exit();
        $id_layanan = $this->input->post('id_layanan');
        $no_antrian_layanan = $this->input->post('no_antrian_layanan');
        // $no_antrian_layanan = substr($this->input->post('no_antrian_layanan'),4);
        $id_pengguna = $this->input->post('id_pengguna');
        $tanggal = date("Y-m-d");

        // echo $tanggal; exit();

        $this->db->set('id_layanan',$id_layanan);
        $this->db->set('no_antrian_layanan',$no_antrian_layanan);
        $this->db->set('id_pengguna',$id_pengguna);
        $this->db->set('tgl_antrian_layanan',$tanggal);
        $this->db->insert('antrian_layanan');

        redirect(base_url('admin/Antrian_layanan'));

    }
}