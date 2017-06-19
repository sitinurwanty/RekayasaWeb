<?php
class User_controller extends CI_Controller{
 
    function __Construct()
    {
        parent ::__construct();
    }
 
    function user()
    {
        $this->load->view('layout/head'); 
        $this->load->view('layout/header');
        $this->load->model('user_model');
        $data['judul'] = 'Daftar User';
        $data['daftar_user'] = $this->user_model->get_user_all();
        $this->load->view('daftar_user', $data);  

    }

    function simpan_user()
    {   
        $this->load->view('layout/head'); 
        $this->load->view('layout/header');
        $this->load->model('user_model');
        $this->user_model->simpan_user();
        $data['notifikasi'] = 'Data berhasil disimpan';
        $data['judul']='Insert Data Berhasil';
        $this->load->view('notifikasi', $data);
    }

    function delete_user($id_user)
    {
        $this->load->view('layout/head'); 
        $this->load->view('layout/header');
        $this->load->model('user_model');
        $username = $this->user_model->delete_user($id_user);
        redirect('user_controller/user');
    }
 
    function edit_user($id_user)
    {
        $this->load->view('layout/head'); 
        $this->load->view('layout/header');
        $data['judul']='Update Data User';
        $this->load->model('user_model');
        $data['edit']=$this->user_model->edit_user($id_user);
        $this->load->view('edit_user', $data);
    }
 
    function simpan_edit_user()
    {
        $this->load->view('layout/head'); 
        $this->load->view('layout/header');
        $id_user = $this->input->post('id_user');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
 
        $data['judul'] = 'Update Data Codeigniter';
        $this->load->model('user_model');
        $data['edit'] = $this->user_model->simpan_edit_user($id_user, $nama_lengkap, $username, $password, $email, $alamat);
        $data['notifikasi'] = 'Data telah berhasil disimpan';
        $this->load->view('notifikasi', $data);
    }
	
	
}