<?php
class Non_Oss extends CI_Controller {
 
    function __construct(){
		parent::__construct();
		// $this->load->library('fpdf');
	}

    public function non_oss()
 {
    $this->load->view('user/non_oss');
 }

}
?>