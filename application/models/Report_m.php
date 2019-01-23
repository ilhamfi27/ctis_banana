<?php
class Report_m extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function insert_laporan($data) {
        $this->db->insert('laporan', $data);
        return $this->db->affected_rows();
    }
}
