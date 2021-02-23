<?php

class Dashboard extends CI_Controller{

    public function index(){
        $data['ktp'] = $this->model_ktp->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id){
        $data['ktp'] = $this->model_ktp->detail($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }
    public function print($id){
        $data['ktp'] = $this->model_ktp->detail($id);
        $this->load->view('templates/header');
        $this->load->view('printdetail',$data);
        $this->load->view('templates/footer');
    }
    public function search(){
        $keyword = $this->input->post('keyword');
        $data['ktp'] = $this->model_ktp->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}

?>