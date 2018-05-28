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

      function logout() {
            $this->session->unset_userdata('logged_in');
            session_destroy();
            redirect('home', 'refresh');
      }

      function index() {
            $this->load->library('form_validation');

            $this->form_validation->set_message('required', 'campo %s obrigatório');
            $this->form_validation->set_rules('login', 'Usuário', 'trim|required');
            $this->form_validation->set_rules('senha', 'Senha', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                  //FALHA DE VALIDAÇÃO.  Redirecionando para pagina de login
                  redirect('login', 'refresh');
                  //$this->load->view('view_login');
            } else {
                  $login = $this->input->post('login');
                  $senha = $this->input->post('senha');

                  $this->load->model('model_usuario');
                  $result = $this->model_usuario->login($login, $senha);

                  if ((isset($result)) && (!empty($result))) {
                        $resultadoUsuario = $this->model_usuario->login($login, $senha);

                        foreach ($resultadoUsuario as $usuario) {
                              $config_array = array(
                                  'UsuarioId' => $usuario->id,
                                  'nomeUsuario' => $usuario->nome,
                                  'loginUsuario' => $usuario->login,
                                  'emailUsario' => $usuario->email,
                                  'datacadastro' => $usuario->datacadastro
                              );
                        }

                        $this->session->set_userdata('logged_in', $config_array);
                        redirect('home/dashboard', 'refresh');
                  } else {
                        redirect('login', 'refresh');
                  }
            }
      }

}

?>