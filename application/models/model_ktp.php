<?php

class Model_ktp extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tblktp');
    }
    public function tambah_ktp($data,$table){
        $this->db->insert($table,$data);
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);

    }
    public function edit_ktp($where, $table){
        return $this->db->get_where($table, $where);
    }
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function detail($id){
        $result = $this->db->where('reg',$id)->get('tblktp');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tblktp');
        $this->db->like('nama',$keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->or_like('asal', $keyword);
        $this->db->or_like('domisili', $keyword);
        $this->db->or_like('status', $keyword);
        return $this->db->get()->result();
    }
}

?>