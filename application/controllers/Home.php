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
	function logout() {
		$this->session->unset_userdata ( 'logged_in' );
		session_destroy ();
		redirect ( 'home', 'refresh' );
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
	 * USUARIOS
	 */
	function cadastrausuario() {
		if ($this->session->userdata ( 'logged_in' )) { // VALIDA USUÁRIO LOGADO
			$this->load->model ( 'model_perfil' );
			$resultadoPerfil = $this->model_perfil->buscaPerfil ();
			$dados ['resultadoPerfil'] = $resultadoPerfil;
			
			if ($this->input->post ()) {
				if ((! empty ( trim ( $this->input->post ( 'nome' ) ) )) || (! empty ( trim ( $this->input->post ( 'login' ) ) )) || (! empty ( trim ( $this->input->post ( 'email' ) ) )) || (! empty ( trim ( $this->input->post ( 'senha' ) ) )) || (! empty ( trim ( $this->input->post ( 'perfilid' ) ) ))) {
					
					$dadosusuario ['nome'] = $this->input->post ( 'nome' );
					$dadosusuario ['login'] = $this->input->post ( 'login' );
					$dadosusuario ['email'] = $this->input->post ( 'email' );
					$dadosusuario ['senha'] = $this->input->post ( 'senha' );
					$dadosusuario ['datacadastro'] = date ( 'Y-m-d' );
					$dadosusuario ['perfilid'] = $this->input->post ( 'perfilid' );
					$dadosusuario ['status'] = 1;
					
					$this->load->model ( 'model_usuario' );
					$resultadocadastrousuario = $this->model_usuario->cadastrausuario ( $dadosusuario );
					
					if ($resultadocadastrousuario) {
						$dados ['tela'] = 'view_dashboard';
					} else {
						$dados ['msg'] = 'Ocorreu um erro ao cadastrar o usuario! Atualize a página e tente novamente';
						$dados ['tela'] = 'usuarios/view_cadastrousuario';
					}
					$this->load->view ( 'view_home', $dados );
				} else {
					$dados ['msg'] = 'Dados Imcompletos! Preencha os dados e tente novamente';
					$dados ['tela'] = 'usuarios/view_cadastrousuario';
					$this->load->view ( 'view_home', $dados );
				}
			} else {
				$dados ['tela'] = 'usuarios/view_cadastrousuario';
				$this->load->view ( 'view_home', $dados );
			}
		}
	}
	
	/*
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
