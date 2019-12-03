<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        //digunakan untuk menjalankan fungsi construct pada class parent::__controller
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
         $this->load->model('login_model');
         $this->load->model('siswa_model');
         //$this->load->model('mahasiswa_model');

        if ($this->session->userdata('level') != 'user') {
            redirect('login', 'refresh');
            }
        // 
    }


    public function index()
    {
        $data=array(
            'title'=>'data siswa',
            'siswa'=>$this->siswa_model->datatabels()
        );
        //$data['title'] = 'Halaman User';
        $this->load->view('template/header_datatabels_user',$data);
        $this->load->view('siswa/user');
        $this->load->view('template/footer_datatabels_user',$data);
    }
    public function Laporan_pdf(){
        $this->load->library('pdf');

        $this->load->model('cetak_model');
        //$data['mahasiswa']=$this->cetak_model->view();
        $data['siswa']=$this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('siswa/laporan', $data);
        //$this->pdf->load_view('siswa/laporan', $data);
    }

    
}
?>
