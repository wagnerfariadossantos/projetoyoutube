<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Wagner
 */
class Model_cliente extends CI_Model {

    function cadastracliente($dados = NULL) {
        if ($dados !== NULL) {
            extract($dados);
            $this->db->insert('cliente', array(
                'nomefantasia' => $dados ['nomefantasia'],
                'razaosocial' => $dados ['razaosocial'],
                'cnpj' => $dados ['cnpj'],
                'cpf' => $dados ['cpf'],
                'telefone' => $dados ['telefone'],
                'celular' => $dados ['celular'],
                'email' => $dados ['email'],
                'endereco' => $dados ['endereco'],
                'complemento' => $dados ['complemento'],
                'bairro' => $dados ['bairro'],
                'cidade' => $dados ['cidade'],
                'estado' => $dados ['estado'],
                'cep' => $dados ['cep']
            ));
            return true;
        } else {
            return false;
        }
    }

    function carregaclientespedido() {
        $this->db->select('id, nomefantasia');
        $this->db->from('cliente');
        $this->db->where('status', '1');
        //$this->db->limit(1);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    function buscaclienteslista() {
        $this->db->select('*');
        $this->db->from('cliente');
        //$this->db->where('status','1');
        //$this->db->limit(1);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    function buscaclienteespecifico($clienteid) {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('id', $clienteid);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    function atualizacliente($dados = NULL) {
        if ($dados !== NULL) {
            extract($dados);
            $this->db->where('id', $dados['id']);
            $this->db->update('cliente', $dados);
            return true;
        } else {
            return false;
        }
    }

    function buscaclientefiltro($dados) {
        if ($dados !== NULL) {
            extract($dados);
            $this->db->select('*');
            $this->db->from('cliente');
            if(!empty($dados['nomefantasia'])){
                $this->db->where('nomefantasia', $nomefantasia);
            }
            if(!empty($dados['razaosocial'])){
                $this->db->where('razaosocial', $razaosocial);
            }
            if(!empty($dados['cnpj'])){
                $this->db->where('cnpj', $cnpj);
            }
            if(!empty($dados['cpf'])){
                $this->db->where('cpf', $cpf);
            }
            if(!empty($dados['email'])){
                $this->db->where('email', $email);
            }
            $this->db->limit(100);
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

}
