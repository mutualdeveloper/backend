<?php
header('Access-Control-Allow-Origin: *');
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class Footer extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model','apiModel');
        
    }

    public function index_get(){
        $id = $this->get('id');
        if ($id === NULL){
            $menus = $this->apiModel->get(NULL,'footer');    
            if ($menus){
                $this->response($menus, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'No hay Items'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }else {
            $id = (int) $id;
            if ($id <= 0){
                $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
            }
            $menu = NULL;
            $menu = $this->apiModel->get($id,'footer');   
            if (!empty($menu)){
                $this->set_response($menu, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }else{
                $this->set_response([
                    'status' => FALSE,
                    'message' => 'El item no fue encontrado'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }
    }
    


    

}

?>