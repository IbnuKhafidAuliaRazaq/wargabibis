<?php

class kategori extends CI_Controller{
    public function belum_diketahui(){
        $data['belum_diketahui'] = $this->model_kategori->belum_diketahui()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('belum_diketahui',$data);
        $this->load->view('templates/footer');
    }
    public function mampu(){
        $data['mampu'] = $this->model_kategori->mampu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mampu',$data);
        $this->load->view('templates/footer');
    }
    public function menengah(){
        $data['menengah'] = $this->model_kategori->menengah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('menengah',$data);
        $this->load->view('templates/footer');
    }
    public function kurang_mampu(){
        $data['kurang_mampu'] = $this->model_kategori->kurang_mampu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kurang_mampu',$data);
        $this->load->view('templates/footer');
    }
    public function belum_diketahui_domisili(){
        $data['belum_diketahui_domisili'] = $this->model_kategori->belum_diketahui_domisili()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('belum_diketahui_domisili',$data);
        $this->load->view('templates/footer');
    }
    public function asli(){
        $data['asli'] = $this->model_kategori->asli()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('asli',$data);
        $this->load->view('templates/footer');
    }
    public function pendatang(){
        $data['pendatang'] = $this->model_kategori->pendatang()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pendatang',$data);
        $this->load->view('templates/footer');
    }
    public function pindah(){
        $data['pindah'] = $this->model_kategori->pindah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pindah',$data);
        $this->load->view('templates/footer');
    }
    
}

?>