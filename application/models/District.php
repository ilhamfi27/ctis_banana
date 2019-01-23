<?php
class District extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function all_district(){
        return $this->db->get('kecamatan');
    }

    public function some_district($limit){
        return $this->db->get('kecamatan',$limit);
    }
}
