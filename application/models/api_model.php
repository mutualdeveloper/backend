    <?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Api_model extends CI_Model {

    //CONSULTAS GENERALES
    public function get($id = null,$table){
        if($id == null){
            return $this->db->get($table)->result();
        }else{
            $query = $this->db->get_where($table,array('id' => $id));
            if ($query->num_rows() > 0){
                return $query->result()[0];
            }else{
                return null;
            }
        }
    }

    // CONSULTAS PARA POSTS
    public function get_post($id = null){
        if($id == null){
            return $this->get_all_post();
        }else{
            return $this->get_post_data($id);
        }
    }

    private function get_all_post(){
        $posts = $this->db->get('post')->result();
        $datapost;
        foreach ($posts as $key => $post) {            
            switch ($post->tipo) {
                case 'flyer':
                    break;
                case 'slider':
                    $posts[$key]->images = $this->getImagesCollection($post->id);
                    break;
                case 'complete':
                    $posts[$key]->images = $this->getImagesCollection($post->id);
                    $posts[$key]->informacion = $this->getParrafoCollection($post->id);
                    break;
            }
        }
        return($posts);
    }

    private function get_post_data($id){
        $post = $this->db->get_where('post',array('id' => $id))->result()[0];
        $tipo = $post->tipo;
        switch ($post->tipo) {
                case 'flyer':
                    break;
                case 'slider':
                    $post->images = $this->getImagesCollection($post->id);
                    break;
                case 'complete':
                    $post->images = $this->getImagesCollection($post->id);
                    $post->informacion = $this->getParrafoCollection($post->id);
                    break;
        }
        return $post;
    }

     private function getImagesCollection($post_id){
        $sql = "select url, alt from post_image_collection as ic inner join post_imagenes as pi on ic.id = pi.id_imagen where id_post = " . $post_id;
        return($this->db->query($sql)->result());
    }

    private function getParrafoCollection($post_id){
        $sql = 'select titulo, parrafo from post_text as pt inner join post_text_collection as pc on pt.id_text_collection = pc.id where id_post = ' . $post_id;
        return ($this->db->query($sql)->result());
    }

}

   

    ?>