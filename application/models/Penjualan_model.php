<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan_model extends CI_Model
{

    var $API = "";
    var $option;

    function __construct()
    {
        parent::__construct();
        $this->API = "https://api.akhmad.id/uaspromnet/";
        $this->options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_ENCODING => "",
            CURLOPT_USERAGENT => "test",
            CURLOPT_AUTOREFERER => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT => 120
        );
    }

    public function getPenjualan()
    {
        $ch = curl_init();

        $headers = [
            'Content-Type:application/json',
            'X-Nim:' . $this->session->userdata('nim')
        ];

        curl_setopt($ch, CURLOPT_URL, $this->API . 'penjualan');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt_array($ch, $this->options);

        $result = json_decode(curl_exec($ch), true);
        return $result['data']['terjual'];
    }

    public function addPenjualan()
    {
        $ch = curl_init();

        $headers = [
            'Content-Type:application/json',
            'X-Nim:' . $this->session->userdata('nim')
        ];

        $data = [
            'id_motor' => $this->input->post('id_motor'),
            'id_cicil' => $this->input->post('id_cicil'),
            'id_uang_muka' => $this->input->post('id_uang_muka'),
            'cicilan_pokok' => $this->input->post('cicilan_pokok'),
            'cicilan_bunga' => $this->input->post('cicilan_bunga'),
            'cicilan_total' => $this->input->post('cicilan_total')
        ];

        curl_setopt($ch, CURLOPT_URL, $this->API . 'penjualan');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt_array($ch, $this->options);
    }
}
