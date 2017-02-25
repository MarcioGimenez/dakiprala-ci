<?php

ini_set("upload_max_filesize", "20M");
defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/usuario_model');
        $this->load->model('admin/local_model');
        if ($this->usuario_model->logado() != true) {
            redirect('admin/login', 'refresh');
        }
    }

    public function index() {
        // pega todos os locais do bd e passa para a view

        $data['locais'] = $this->local_model->get_locais();

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/lista_locais', $data);
        $this->load->view('admin/includes/footer');
    }

    public function cadastro() {
        if ($_POST) {

            $data['titulo'] = $this->input->post('titulo');
            $data['tipo'] = $this->input->post('tipo');
            $data['status'] = $this->input->post('status');
            $data['latitude'] = $this->input->post('latitude');
            $data['longitude'] = $this->input->post('longitude');
            $data['titulo_foto'] = $this->input->post('titulo_foto');
            $data['descricao'] = $this->input->post('descricao');
            $data['titulo_google'] = $this->input->post('titulo_google');
            $data['titulo_facebook'] = $this->input->post('titulo_facebook');
            $data['descricao_google'] = $this->input->post('descricao_google');
            $data['descricao_facebook'] = $this->input->post('descricao_facebook');


            //realiza validação dos dados recebidos
            $this->load->library('form_validation');
            $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('titulo_foto', 'Titulo da foto', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required|min_length[100]');
            $this->form_validation->set_rules('titulo_google', 'Titulo do Google', 'trim|required|min_length[20]');
            $this->form_validation->set_rules('titulo_facebook', 'Titulo do Facebook', 'trim|required|min_length[20]');
            $this->form_validation->set_rules('descricao_google', 'Descrição do Google', 'trim|required|min_length[40]');
            $this->form_validation->set_rules('descricao_facebook', 'Descrição do Facebook', 'trim|required|min_length[40]');


            // verifica a validação
            if ($this->form_validation->run() == FALSE) {
                if (validation_errors()) {
                    set_msg(validation_errors(), 'warning');
                } else {
                    set_msg('validação ok', 'success');
                }
            } else {
                foreach ($_FILES as $key => $arquivo) {
                    $data[$key] = base_url() . 'assets/upload/' . $arquivo['name'];
                    @move_uploaded_file($arquivo['tmp_name'], BASE_DIR . 'assets/upload/' . $arquivo['name']);
                }

                unset($data['files']);
                $data['data_cadastro'] = date('Y-m-d');
                $data['idusuario'] = $this->session->userdata('id');
                if ($this->local_model->cadastra_local($data)) {

                    set_msg('Local cadastrado com sucesso', 'success');
                    redirect('admin/local', 'refresh');
                }
            }
        }
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/menu');
        if (isset($data)) {
            $this->load->view('admin/cadastro_local', $data);
        } else {
            $this->load->view('admin/cadastro_local');
        }
        $this->load->view('admin/includes/footer');
    }

    public function alterar($id = null) {

        if ($_POST) {
            // recupera dados POST
            $data['titulo'] = $this->input->post('titulo');
            $data['tipo'] = $this->input->post('tipo');
            $data['status'] = $this->input->post('status');
            $data['latitude'] = $this->input->post('latitude');
            $data['longitude'] = $this->input->post('longitude');
            $data['titulo_foto'] = $this->input->post('titulo_foto');
            $data['descricao'] = $this->input->post('descricao');
            $data['titulo_google'] = $this->input->post('titulo_google');
            $data['titulo_facebook'] = $this->input->post('titulo_facebook');
            $data['descricao_google'] = $this->input->post('descricao_google');
            $data['descricao_facebook'] = $this->input->post('descricao_facebook');


            //realiza validação dos dados recebidos
            $this->load->library('form_validation');
            $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('titulo_foto', 'Titulo da foto', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required|min_length[100]');
            $this->form_validation->set_rules('titulo_google', 'Titulo do Google', 'trim|required|min_length[20]');
            $this->form_validation->set_rules('titulo_facebook', 'Titulo do Facebook', 'trim|required|min_length[20]');
            $this->form_validation->set_rules('descricao_google', 'Descrição do Google', 'trim|required|min_length[40]');
            $this->form_validation->set_rules('descricao_facebook', 'Descrição do Facebook', 'trim|required|min_length[40]');


            // verifica a validação
            if ($this->form_validation->run() == FALSE) {
                if (validation_errors()) {
                    set_msg(validation_errors(), 'warning');
                } else {
                    set_msg('validação ok', 'success');
                }
            } else {

                if($_FILES['foto_quadrada']['name']!=''){
                    $data['foto_quadrada'] = base_url() . 'assets/upload/'.$_FILES['foto_quadrada']['name'];
                    @move_uploaded_file($arquivo['tmp_name'], BASE_DIR . 'assets/upload/' .$_FILES['foto_quadrada']['name']);
                }else{
                    $data['foto_quadrada'] =$this->input->post('foto_quadrada_old');
                }

                    if($_FILES['foto_retangular']['name']!=''){
                    $data['foto_retangular'] = base_url() . 'assets/upload/'.$_FILES['foto_retangular']['name'];
                    @move_uploaded_file($arquivo['tmp_name'], BASE_DIR . 'assets/upload/' .$_FILES['foto_retangular']['name']);
                }else{
                    $data['foto_retangular'] =$this->input->post('foto_retangular_old');
                }

                    if($_FILES['foto_facebook']['name']!=''){
                    $data['foto_facebook'] = base_url() . 'assets/upload/'.$_FILES['foto_facebook']['name'];
                    @move_uploaded_file($arquivo['tmp_name'], BASE_DIR . 'assets/upload/' .$_FILES['foto_facebook']['name']);
                }else{
                    $data['foto_facebook'] =$this->input->post('foto_facebook_old');
                }



                unset($data['files']);
                $data['data_cadastro'] = date('Y-m-d');
                $data['idusuario'] = $this->session->userdata('id');
                if ($this->local_model->alterar_local($data, $id)) {

                    set_msg('Local alterado com sucesso', 'success');
                    redirect('admin/local', 'refresh');
                }
            }
        }

        $data['local'] = $this->local_model->get_locais($id);
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/menu');
        if (isset($data)) {
            $this->load->view('admin/alterar_local', $data);
        } else {
            $this->load->view('admin/alterar_local');
        }
        $this->load->view('admin/includes/footer');
    }

    public function excluir($id = null) {

        if ($this->local_model->remove_local($id)) {
            set_msg('Local excluído com sucesso', 'success');
        } else {
            set_msg('Erro ao excluir local', 'danger');
        }
        $data['locais'] = $this->local_model->get_locais();
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/menu');
        $this->load->view('admin/lista_locais', $data);
        $this->load->view('admin/includes/footer');
    }

}
