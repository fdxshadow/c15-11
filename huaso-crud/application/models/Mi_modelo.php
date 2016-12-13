<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mi_modelo extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    
    public function obtener(){
        $query=$this->db->get("peliculas");
        return $query->result();

    }

    public function eliminar($id){
        $data = array(
      'id' => $id
    );

    $this->db->delete('peliculas', $data);



    }
}