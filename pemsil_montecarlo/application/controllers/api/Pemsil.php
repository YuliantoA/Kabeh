<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

class Pemsil extends REST_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Pemsil_model','pemsil');
    }

    public function index_get()
    {
        $id = $this->get('id');

        if ($id === null){
            $pemsil = $this->pemsil->getPemsil();
        }else {
            $pemsil = $this->pemsil->getPemsil($id);
        }

        if($pemsil[0]){
            $this->response([
                'status' => TRUE,
                'data' => $pemsil[0],
                'count' => $pemsil[1]
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => ' id Tidak Ada'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

        public function index_delete()
    {
        $id= $this->delete('id');

        if ($id === null){
            $this->response([
                'status' => FALSE,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if ($this->pemsil->deletepemsil($id) > 0){
                $this->response([
                    'status' => TRUE,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);    
            }
        }
    }

    public function index_post()
    {
        $data = [
            'minggu' => $this->post('minggu'),
            'frekuensi' => $this->post('frekuensi')
        ];

        if ($this->pemsil->createpemsil($data) > 0 ) {
            $this->response([
                'status' => TRUE,
                'message' => 'Sukses! data berhasil ditambah'
            ], REST_Controller::HTTP_CREATED);
        }else {
            $this->response([
                'status' => FALSE,
                'message' => 'Gagal! Data tidak berhasil ditambah'
            ], REST_Controller::HTTP_BAD_REQUEST);    
        }
        
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'minggu' => $this->put('minggu'),
            'frekuensi' => $this->put('frekuensi')
        ];
        
        if ($this->pemsil->updatepemsil($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'Sukses! data berhasil diubah'
            ], REST_Controller::HTTP_NO_CONTENT);
        }else {
            $this->response([
                'status' => FALSE,
                'message' => 'Gagal! Data tidak berhasil diubah'
            ], REST_Controller::HTTP_BAD_REQUEST);    
        }
    }

    
}