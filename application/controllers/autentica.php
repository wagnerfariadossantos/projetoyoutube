<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autentica extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_usuario', '', TRUE);
        $this->load->helper('url');
        $this->load->helper('security');
    }

    function index() {
        $this->load->library('form_validation');

        $this->form_validation->set_message('required', 'campo %s obrigatório');
        $this->form_validation->set_rules('login', 'Usuário', 'trim|required');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|callback_database');

        if ($this->form_validation->run() == FALSE) {
            //FALHA DE VALIDAÇÃO.  Redirecionando para pagina de login
           redirect('login', 'refresh');
            //$this->load->view('view_login');
        } else {
            //VALIDAÇÃO OK. Acesso a área privada
            redirect('home/dashboard', 'refresh');
        }
    }

    function database($senha) {
        $login = $this->input->post('login');
        $result = $this->model_usuario->login($login, $senha);
        $usuarioid = '';
        $usuarionome = '';
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}

?>