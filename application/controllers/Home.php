<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Motor_model');
        $this->load->model('Cicil_model');
        $this->load->model('DP_model');
        $this->load->model('Penjualan_model');
    }

    public function motor()
    {
        $data['motor'] = $this->Motor_model->getMotor();
        $data['judul'] = "Halaman Home";
        $this->load->view('header', $data);
        $this->load->view('Home', $data);
        $this->load->view('footer');
    }

    public function cicil()
    {
        $data['cicil'] = $this->Cicil_model->getCicil();
        $data['judul'] = "Halaman Home";
        $this->load->view('header', $data);
        $this->load->view('Cicil', $data);
        $this->load->view('footer');
    }

    public function dp()
    {
        $data['dp'] = $this->DP_model->getDP();
        $data['judul'] = "Halaman Home";
        $this->load->view('header', $data);
        $this->load->view('DP', $data);
        $this->load->view('footer');
    }

    public function penjualan()
    {
        $data['penjualan'] = $this->Penjualan_model->getPenjualan();
        $data['judul'] = "Halaman Home";
        $this->load->view('header', $data);
        $this->load->view('Penjualan', $data);
        $this->load->view('footer');
    }

    public function addPenjualan()
    {
        $data['judul'] = "Halaman Home";
        $this->load->view('header', $data);
        $this->load->view('Tambah_Penjualan');
        $this->load->view('footer');
    }

    public function pushPenjualan()
    {
        $this->Penjualan_model->addPenjualan();
        redirect('home/penjualan');
    }
}
