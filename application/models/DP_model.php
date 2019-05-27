<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DP_model extends CI_Model
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

    public function getDP()
    {
        $ch = curl_init();

        $headers = [
            'Content-Type:application/json',
            'X-Nim:' . $this->session->userdata('nim')
        ];

        curl_setopt($ch, CURLOPT_URL, $this->API . 'uangmuka');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt_array($ch, $this->options);

        $result = json_decode(curl_exec($ch), true);
        return $result['data'];
    }
}
