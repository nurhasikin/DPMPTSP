<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {


	function __construct(){
		parent::__construct();
		// $this->load->library('fpdf');
	}

	public function index()
	{
		$nowDate = date('Y-m-d');

		$this->db->limit('1');
		$this->db->where('tgl_antrian',$nowDate);
		$this->db->order_by('no_antrian','DESC');
		$antrian = $this->db->get('antrian')->row();
		if($antrian){
			$data['no_antrian'] = $antrian->no_antrian;

		}else{
			$data['no_antrian'] = 0;
		}

		if(!empty($this->session->userdata('id_pengguna'))){
			$this->db->limit(1);
			$this->db->order_by('id','DESC');
			$this->db->where('id_pengguna',$this->session->userdata('id_pengguna'));
			$this->db->where('tgl_antrian_layanan',$nowDate);
			$this->db->join('kategori_layanan','kategori_layanan.id_layanan=antrian_layanan.id_layanan');
			$rowdata=$this->db->get('antrian_layanan')->row();
			if ($rowdata){
				$data['antrian_pasien']=$rowdata->no_antrian_layanan;
				$data['nama_layanan']=$rowdata->nama_layanan;
				$data['id'] = $rowdata->id;
			}else{
				$data['antrian_pasien']='-';
				// $data['antrian_pasien']='anda belum mengambil nomor antrian poli';
				$data['nama_layanan']='-';
				$data['id'] ="";
			}

			$rowPoli = $this->db->get('kategori_layanan')->result();
			$data['getPoli'] = $rowPoli;

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
		}
		// var_dump($data); die();
		$this->load->view ('user/home',$data);
	}

	public function regis()
	{
		
		$this->load->view ('user/registrasi');
	}

	public function registrasi()
	{
		$no_identitas = $this->input->post('no_identitas'); //langkah 2
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		// $usia = $this->input->post('usia');
		$npwp = $this->input->post('npwp');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$this->db->set('no_identitas',$no_identitas);//langkah ke 3
		$this->db->set('nama',$nama);
		$this->db->set('email',$email);
		// $this->db->set('usia',$usia);
		$this->db->set('npwp',$npwp);
		$this->db->set('nama_perusahaan',$nama_perusahaan);
		$this->db->set('alamat',$alamat);
		$this->db->set('no_telp',$no_telp);
		$this->db->set('username',$username);
		$this->db->set('password',$password);


		$this->db->insert('pengguna');

		$this->session->set_flashdata("notif",true);
		$this->session->set_flashdata("pesan",'Registrasi Berhasil');
		$this->session->set_flashdata("type",'success');

		redirect(base_url());

	}

	public function proses_login(){
		print_r($_POST);
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$getpasien=$this->db->get('pengguna')->row();

		if($getpasien){
			$this->session->set_userdata('id_pengguna',$getpasien->id_pengguna);
			$this->session->set_userdata('nama',$getpasien->nama);

			$this->session->set_flashdata("notif",true);
			$this->session->set_flashdata("pesan",'Login Berhasil');
			$this->session->set_flashdata("type",'success');
			redirect(base_url());
		}else{
			$this->session->set_flashdata("notif",true);
			$this->session->set_flashdata("pesan",'Username atau Password Salah');
			$this->session->set_flashdata("type",'warning');
			redirect(base_url());
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
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

    public function saveAntrian(){
    	$id_layanan = $this->input->post('id_layanan');
		$tanggal = date("Y-m-d");
		$time = date("h:i:sa");
    	// $no_antrian_layanan = $this->db->get('kategori_layanan');
		$this->db->limit(1);
		$this->db->where('tgl_antrian_layanan',$tanggal);
		$this->db->order_by('no_antrian_layanan',"DESC");
		$sql = $this->db->get('antrian_layanan');
		$rowNo = $sql->row();
		$no_antrian_layanan = $rowNo->no_antrian_layanan;
    	$id_pengguna = $this->session->userdata('id_pengguna');
		$nama = $this->session->userdata('nama');

        // echo $tanggal; exit();

    	$this->db->set('id_layanan',$id_layanan);
    	$this->db->set('no_antrian_layanan',$no_antrian_layanan + 1);
    	$this->db->set('id_pengguna',$id_pengguna='1');
		$this->db->set('nama',$nama="DPMPTSP");
    	$this->db->set('tgl_antrian_layanan',$tanggal);
		$this->db->set('time',$time);
		$this->db->set('kehadiran',"hadir");
    	$this->db->insert('antrian_layanan');

    	$no_antrian = $this->input->post('no_antrian');
		$this->db->limit(1);
		$this->db->where('tgl_antrian',$tanggal);
		$this->db->order_by('no_antrian',"DESC");
		$sql = $this->db->get('antrian');
		$rowNo = $sql->row();
		$no_antrian = $rowNo->no_antrian;
    	$this->db->set('no_antrian',$no_antrian+1);
    	$this->db->set('tgl_antrian',$tanggal);
    	$this->db->insert('antrian');

    	
		$this->db->limit(1);
		$this->db->order_by('id_antrian','DESC');
		$this->db->where('time',$time);
		$this->db->join('kategori_layanan','kategori_layanan.id_layanan=antrian_layanan.id_layanan');
		$data['row']=$this->db->get('antrian_layanan')->row();
    	$this->load->view('user/cetak',$data);

    }

    public function cetak($id = NULL){
    	$this->db->limit(1);
		$this->db->order_by('id_antrian','DESC');
		$this->db->where('id',$id);
		$this->db->join('kategori_layanan','kategori_layanan.id_layanan=antrian_layanan.id_layanan');
		$data['row']=$this->db->get('antrian_layanan')->row();
    	$this->load->view('user/cetak',$data);
    }

    public function cetak2(){
    	require(APPPATH."/libraries/fpdf.php");
    	// print_r(dirname(__FILE__) . '/./tcpdf/tcpdf.php'); die();
    	try {
    		$pdf = new FPDF('l','mm','A5');
	// Menambah halaman baru
	    		$pdf->AddPage();
	// Setting jenis font
	    		$pdf->SetFont('Arial','B',16);
	// Membuat string
	    		$pdf->Cell(190,7,'Daftar Harga Motor Dealer Maju Motor',0,1,'C');
		// $pdf->SetFont('Arial','B',9);
	    		$pdf->Cell(190,7,'Jl. Abece No. 80 Kodamar, jakarta Utara.',0,1,'C');

	// print_r($pdf); die();
	    		$path = './assets/pdf/'.date('YmdHis').".pdf";
	    		$pdf->Output('F',$path);
	    		http_response_code(200);
	    		header('Content-Length: '.filesize($path));
	    		header("Content-Type: application/pdf");
				header('Content-Disposition: attachment; filename="downloaded.pdf"'); // feel free to change the suggested filename
				readfile($path);

				exit; 
				    		// redirect(base_url($path));
				//     		$filename = 'pdf.pdf';
				//     		header('Content-type:application/pdf');
				// header('Content-disposition: inline; filename="'.$filename.'"');
				// header('content-Transfer-Encoding:binary');
				// header('Accept-Ranges:bytes');
							// $pdf->Output('I',$filename);
				} catch(Exception $e){
					print_r($e->getMessage());
				}

	}


}