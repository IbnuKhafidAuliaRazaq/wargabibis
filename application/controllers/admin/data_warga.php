<?php

class Data_warga extends CI_Controller{
    public function index(){
        $data['ktp'] = $this->model_ktp->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_warga', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi(){
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $asal = $this->input->post('asal');
        $domisili = $this->input->post('domisili');
        $filektp = $_FILES['filektp'];
        if($filektp =''){

        }else{
            $config['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('filektp')){
                echo "file ktp gagal diupload";
            }else{
                $filektp=$this->upload->data('file_name');
            }
        }
        $filekk = $_FILES['filekk'];
        if($filekk =''){

        }else{
            $config['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('filekk')){
                echo "file kk gagal diupload";
            }else{
                $filekk=$this->upload->data('file_name');
            }
        }
        $status = $this->input->post('status');
        $status_domisili = $this->input->post('status_domisili');

        $data = array(
            'nama' => $nama,
            'nik' => $nik,
            'asal' => $asal,
            'domisili' => $domisili,
            'filektp' => $filektp,
            'filekk' => $filekk,
            'status' => $status,
            'status_domisili' => $status_domisili
            
        );

        $this->model_ktp->tambah_ktp($data, 'tblktp');
        redirect('admin/data_warga/index');
        

    }
    public function edit($id){
        $where = array('reg' => $id);
        $data['ktp'] = $this->model_ktp->edit_ktp($where, 'tblktp')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_warga', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $asal = $this->input->post('asal');
        $domisili = $this->input->post('domisili');
        $filektp = $this->input->post('filektp');
        $filekk = $this->input->post('filekk');
        $status = $this->input->post('status');
        $status_domisili = $this->input->post('status_domisili');

        $data = array(
            'nama' => $nama,
            'nik' => $nik,
            'asal' => $asal,
            'domisili' => $domisili,
            'filektp' => $filektp,
            'filekk' => $filekk,
            'status' => $status,
            'status_domisili' => $status_domisili
        );

        $where = array(
            'reg' => $id
        );
        $this->model_ktp->update_data($where, $data, 'tblktp');
        redirect('admin/data_warga/index');
    }
    public function hapus($id){
    
        $where = array('reg' => $id);
        $this->model_ktp->hapus_data($where, 'tblktp');
        redirect('admin/data_warga/index');
    }
}

?>