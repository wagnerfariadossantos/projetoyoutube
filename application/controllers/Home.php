<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->library ( 'form_validation' );
		$this->load->helper ( 'form' );
		date_default_timezone_set ( 'America/Sao_Paulo' );
	}
	function index() {
		redirect ( 'login' );
	}
	function dashboard() {
		$this->load->view ( 'view_home' );
	}
	function requicaoajax() {
		if ($this->session->userdata ( 'logged_in' )) { // VALIDA USUÁRIO LOGADO
			$this->load->model ( 'model_perfil' );
			$resultadoPerfil = $this->model_perfil->buscaPerfil ();
			
			$dados ['resultadoPerfil'] = $resultadoPerfil;
			$dados ['tela'] = 'view_requisicaojquery';
			$this->load->view ( 'view_home', $dados );
		} else {
			redirect ( 'login', 'refresh' );
		}
	}
	
	/*
	 *
	 * AUXILIARES (AJAX)
	 */
	function buscausuarioperfil() {
		if ($this->session->userdata ( 'logged_in' )) { // VALIDA USUÁRIO LOGADO
			$option = "";
			
			if ($this->input->post ()) {
				$perfil = $this->input->post ( 'perfil' );
				$this->load->model ( 'model_usuario' );
				$resultadoUsuarioPerfil = $this->model_usuario->buscaUsuarioPerfil ( $perfil );
				if ($resultadoUsuarioPerfil) {
					foreach ( $resultadoUsuarioPerfil as $Usuario ) {
						$option .= $Usuario->nome;
					}
				} else {
					$option .= 'Nenhum Valor Encontrado';
				}
			} else {
				$option .= 'Nenhum Valor Encontrado';
			}
			echo $option;
		}
	}
}
