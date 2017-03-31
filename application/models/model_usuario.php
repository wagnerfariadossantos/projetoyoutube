<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Wagner
 */
class Model_usuario extends CI_Model {
	function login($login, $senha) {
		$this->db->select ( '*' );
		$this->db->from ( 'usuarios' );
		$this->db->where ( 'login', $login );
		$this->db->where ( 'senha', $senha );
		// $this->db->where('status','1');
		$this->db->limit ( 1 );
		$query = $this->db->get ();
		return $query->result ();
	}
	function buscaUsuarioPerfil($perfil) {
		$this->db->select ( 'nome' );
		$this->db->from ( 'usuarios' );
		$this->db->where ( 'perfilid', $perfil );
		$this->db->where ( 'status', '1' );
		
		$query = $this->db->get ();
		if ($query->num_rows () >= 1) {
			return $query->result ();
		} else {
			return false;
		}
	}
	function cadastrausuario($dados = NULL) {
		if ($dados !== NULL) {
			extract ( $dados );
			$this->db->insert ( 'usuarios', array (
					'nome' => $dados ['nome'],
					'login' => $dados ['login'],
					'email' => $dados ['email'],
					'senha' => $dados ['senha'],
					'datacadastro' => $dados ['datacadastro'],
					'perfilid' => $dados ['perfilid'],
					'status' => $dados ['status'] 
			) );
			return true;
		} else {
			return false;
		}
	}
	function buscaUsuarios() {
		$this->db->select ( '*' );
		$this->db->from ( 'usuarios' );
		$this->db->where ( 'status', '1' );
	
		$query = $this->db->get ();
		if ($query->num_rows () >= 1) {
			return $query->result ();
		} else {
			return false;
		}
	}
}
