<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Wagner
 */
class Model_pedido extends CI_Model {

    function cadastrapedido($dados = NULL) {
        if ($dados !== NULL) {
            $this->db->insert('pedido', $dados);
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    
    function cadastraitens($dados = NULL) {
        if ($dados !== NULL) {
            $this->db->insert('pedidoitens', $dados);
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
}