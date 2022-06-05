<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Oss extends CI_Model {
    public $table ="antrian_poli";
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        return $this->db->get($this->table)->result();
    }
    public function insert($data){
        $this->db->insert($this->table, $data);
    }
    public function update($data, $id){
        $this->db->where('id',$id);
        $this->db->update($this->table, $data);
    }
}