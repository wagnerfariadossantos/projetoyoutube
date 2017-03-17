<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Wagner
 */
class Model_perfil extends CI_Model {
	function buscaPerfil() {
		$this->db->select ( 'perfilid, descricao' );
		$this->db->from ( 'perfil' );
		
		$this->db->where ( 'status', '1' );
		$query = $this->db->get ();
		return $query->result ();
	}
}
