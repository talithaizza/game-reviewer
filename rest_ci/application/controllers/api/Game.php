<?php 
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Game extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Game_model','game');
    }

    public function index_get(){

        $id = $this->get('id');
        if($id === null){
            $game = $this->game->getGame();
        } else {
            $game = $this->game->getGame($id);
        }
        
        
        if($game){
            $this->response([
                'status' => true,
                'data' => $game
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('id');

        if($id === null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->game->deleteGame($id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            'id' => $this->post('id'),
            'judul' => $this->post('judul'),
            'rating' => $this->post('rating'),
            'released' => $this->post('released'),
            'size' => $this->post('size'),
            'kategori' => $this->post('kategori'),
            'deskripsi' => $this->post('deskripsi'),
            'gambar' => $this->post('gambar')
        ];

        if($this->game->createGame($data)> 0){
            $this->response([
                'status' => true,
                'message' => 'new game has been created.'
            ], REST_CONTROLLER::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function index_put(){
        $id = $this->put('id');
        $data = [
            // 'id' => $this->put('id'),
            'judul' => $this->put('judul'),
            'rating' => $this->put('rating'),
            'released' => $this->put('released'),
            'size' => $this->put('size'),
            'kategori' => $this->put('kategori'),
            'deskripsi' => $this->put('deskripsi'),
            'gambar' => $this->put('gambar')
        ];

        if($this->game->updateGame($data, $id)> 0){
            $this->response([
                'status' => true,
                'message' => 'new game has been updated.'
            ], REST_CONTROLLER::HTTP_NO_CONTENT);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
?>