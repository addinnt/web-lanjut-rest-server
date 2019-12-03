<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model{
    public function view(){
        //$this->db->select('nama,email,jurusan');
        //$query=$this->db->get('mahasiswa');
        $this->db->select('nama,alamat,nim');
        $query=$this->db->get('siswa');
        return $query->result();
    }
}
?>