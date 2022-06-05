<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
         if(!$this->session->userdata('login_admin')){
            redirect('admin/login');
        }
    }

    function index(){
        $data['active']     = 'dash';
        $data['judul_1']    = 'Dashboard';
        $data['judul_2']    = 'Selamat Datang';
        $data['page']       = 'v_dashboard';
        $data['menu']       = $this->Menus->generateMenu();
        $data['breadcumbs'] = array(
            array(
                'nama'=>'Dashboard',
                'icon'=>'fa fa-dashboard',
                'url'=>'admin/dashboard'
            ),
        );
        $nowDate = date('Y-m-d');
        $getPoli = $this->db->get('kategori_layanan')->result();
            foreach ($getPoli as $key) {
                $this->db->limit('1');
                $this->db->where('id_layanan',$key->id_layanan);
                $this->db->where('tgl_antrian_layanan',$nowDate);
                $this->db->order_by('no_antrian_layanan','DESC');
                $antrianpoli = $this->db->get('antrian_layanan')->row();

                if($key->id_layanan == 1){
					if($antrianpoli){
						$data['bpdk'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bpdk'] = 0;
					}
				}elseif($key->id_layanan == 2){
					if($antrianpoli){
						$data['bphg'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bphg'] = 0;
					}
				}elseif($key->id_layanan == 3){
					if($antrianpoli){
						$data['bscl'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bscl'] = 0;
					}
				}elseif($key->id_layanan == 4){
					if($antrianpoli){
						$data['btkj'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['btkj'] = 0;
					}
				}elseif($key->id_layanan == 5){
					if($antrianpoli){
						$data['lhdk'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['lhdk'] = 0;
					}
				}elseif($key->id_layanan == 6){
					if($antrianpoli){
						$data['bkst'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bkst'] = 0;
					}
				}elseif($key->id_layanan == 7){
					if($antrianpoli){
						$data['bprn'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bprn'] = 0;
					}
				}elseif($key->id_layanan == 8){
					if($antrianpoli){
						$data['bpnk'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bpnk'] = 0;
					}
				}elseif($key->id_layanan == 9){
					if($antrianpoli){
						$data['bpwt'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bpwt'] = 0;
					}
				}elseif($key->id_layanan == 10){
					if($antrianpoli){
						$data['bsdm'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bsdm'] = 0;
					}
				}elseif($key->id_layanan == 11){
					if($antrianpoli){
						$data['bppr'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bppr'] = 0;
					}
				}elseif($key->id_layanan == 12){
					if($antrianpoli){
						$data['bkdy'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bkdy'] = 0;
					}
				}elseif($key->id_layanan == 13){
					if($antrianpoli){
						$data['bkdp'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bkdp'] = 0;
					}
				}elseif($key->id_layanan == 14){
					if($antrianpoli){
						$data['bpun'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bpun'] = 0;
					}
				}elseif($key->id_layanan == 15){
					if($antrianpoli){
						$data['btph'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['btph'] = 0;
					}
				}elseif($key->id_layanan == 16){
					if($antrianpoli){
						$data['bpdd'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['bpdd'] = 0;
					}
				}elseif($key->id_layanan == 17){
					if($antrianpoli){
						$data['nkbp'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nkbp'] = 0;
					}
				}elseif($key->id_layanan == 18){
					if($antrianpoli){
						$data['nbpk'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbpk'] = 0;
					}
				}elseif($key->id_layanan == 19){
					if($antrianpoli){
						$data['nbph'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbph'] = 0;
					}
				}elseif($key->id_layanan == 20){
					if($antrianpoli){
						$data['nbsc'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbsc'] = 0;
					}
				}elseif($key->id_layanan == 21){
					if($antrianpoli){
						$data['nbtk'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbtk'] = 0;
					}
				}elseif($key->id_layanan == 22){
					if($antrianpoli){
						$data['nlhk'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nlhk'] = 0;
					}
				}elseif($key->id_layanan == 23){
					if($antrianpoli){
						$data['nbkt'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbkt'] = 0;
					}
				}elseif($key->id_layanan == 24){
					if($antrianpoli){
						$data['nbpn'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbpn'] = 0;
					}
				}elseif($key->id_layanan == 25){
					if($antrianpoli){
						$data['nbpt'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbpt'] = 0;
					}
				}elseif($key->id_layanan == 26){
					if($antrianpoli){
						$data['nbpw'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbpw'] = 0;
					}
				}elseif($key->id_layanan == 27){
					if($antrianpoli){
						$data['nsdm'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nsdm'] = 0;
					}
				}elseif($key->id_layanan == 28){
					if($antrianpoli){
						$data['nppr'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nppr'] = 0;
					}
				}elseif($key->id_layanan == 29){
					if($antrianpoli){
						$data['nbky'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbky'] = 0;
					}
				}elseif($key->id_layanan == 30){
					if($antrianpoli){
						$data['nbkp'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbkp'] = 0;
					}
				}elseif($key->id_layanan == 31){
					if($antrianpoli){
						$data['nbpu'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['nbpu'] = 0;
					}
				}elseif($key->id_layanan == 32){
					if($antrianpoli){
						$data['ntph'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['ntph'] = 0;
					}
				}elseif($key->id_layanan == 33){
					if($antrianpoli){
						$data['npdd'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['npdd'] = 0;
					}
				}elseif($key->id_layanan == 34){
					if($antrianpoli){
						$data['pirk'] = $antrianpoli->no_antrian_layanan;

					}else{
						$data['pirk'] = 0;
					}
				}
            }

        $this->load->view('admin/'.$this->session->userdata('theme').'/v_index',$data);
    }
}