<?php

class Model_kategori extends CI_Model{
    public function belum_diketahui(){
        return $this->db->get_where('tblktp', array('status' => 'Belum Diketahui'));
    }
    public function mampu(){
        return $this->db->get_where('tblktp', array('status' => 'Mampu'));
    }
    public function menengah(){
        return $this->db->get_where('tblktp', array('status' => 'Menengah'));
    }
    public function kurang_mampu(){
        return $this->db->get_where('tblktp', array('status' => 'Kurang Mampu'));
    }
    public function belum_diketahui_domisili(){
        return $this->db->get_where('tblktp', array('status_domisili' => 'Belum Diketahui'));
    }
    public function asli(){
        return $this->db->get_where('tblktp', array('status_domisili' => 'Asli'));
    }
    public function pendatang(){
        return $this->db->get_where('tblktp', array('status_domisili' => 'Pendatang'));
    }
    public function pindah(){
        return $this->db->get_where('tblktp', array('status_domisili' => 'Pindah'));
    }
}

?>