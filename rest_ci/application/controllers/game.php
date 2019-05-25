<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Game extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data game
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $game = $this->db->get('data')->result();
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('data')->result();
        }
        $this->response($game, 200);
    }

    //Masukan function selanjutnya disini
}
?>