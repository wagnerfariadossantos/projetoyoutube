<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Wagner
 */
class Model_produto extends CI_Model {

    function cadastraproduto($dados = NULL) {
        if ($dados !== NULL) {
            $this->db->insert('produto', $dados);
            return true;
        } else {
            return false;
        }
    }

    function carregaprodutos() {
        $this->db->select('*');
        $this->db->from('produto');

        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    function carregaprodutosporid($produtoid){
        $this->db->select('*');
        $this->db->from('produto');
        $this->db->where('id',$produtoid);

        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    function carregaprodutosfiltro($dados) {
        if ($dados !== NULL) {
            $this->db->select('*');
            $this->db->from('produto');
            if (!empty($dados['descricaoproduto'])) {
                $this->db->where('descricaoproduto', $dados['descricaoproduto']);
            } else {
                if (!empty($dados['codigoean'])) {
                    $this->db->where('codigoean', $dados['codigoean']);
                } else {
                    $this->db->where('produtoid', 0);
                }
            }
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query) {
                return $query->result();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function atualizaproduto($dados = NULL) {
        if ($dados !== NULL) {
            $this->db->where('id', $dados['id']);
            $this->db->update('produto', $dados);
            return true;
        } else {
            return false;
        }
    }
}
