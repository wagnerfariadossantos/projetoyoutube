<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pedidos extends CI_Controller {
    

function novopedido() {
    if ($this->session->userdata('logged_in')) { // VALIDA USU�RIO LOGADO
        $this->load->model('model_perfil');
        $resultadoPerfil = $this->model_perfil->buscaPerfil();
        $dados ['resultadoPerfil'] = $resultadoPerfil;

        if ($this->input->post()) {
            if (
                    (!empty(trim($this->input->post('descricaoproduto')))) &&
                    (!empty(trim($this->input->post('unidade')))) &&
                    (!empty(trim($this->input->post('valormercadoria')))) &&
                    (!empty(trim($this->input->post('valorvenda')))) &&
                    (!empty(trim($this->input->post('qtdeestoque')))) &&
                    (!empty(trim($this->input->post('descontopermitido')))) &&
                    (!empty(trim($this->input->post('alertaestoque')))) &&
                    (!empty(trim($this->input->post('qtdevendaminima')))) &&
                    (!empty(trim($this->input->post('qtdevalorminimo'))))
            ) {
                $dadoscliente ['descricaoproduto'] = $this->input->post('descricaoproduto');
                $dadoscliente ['unidade'] = $this->input->post('unidade');
                $dadoscliente ['valormercadoria'] = $this->input->post('valormercadoria');
                $dadoscliente ['valorvenda'] = $this->input->post('valorvenda');
                $dadoscliente ['qtdeestoque'] = $this->input->post('qtdeestoque');
                $dadoscliente ['descontopermitido'] = $this->input->post('descontopermitido');
                $dadoscliente ['alertaestoque'] = $this->input->post('alertaestoque');
                $dadoscliente ['qtdevendaminima'] = $this->input->post('qtdevendaminima');
                $dadoscliente ['qtdevalorminimo'] = $this->input->post('qtdevalorminimo');

                $this->load->model('model_produto');
                $resultadocadastroproduto = $this->model_produto->cadastraproduto($dadoscliente);

                if ($resultadocadastroproduto) {
                    $dados ['telaativa'] = 'produtos';
                    $dados ['msg'] = 'Produto cadastrado com sucesso!!!';
                    $dados ['tela'] = 'pedidos/view_listapedidos';
                } else {
                    $dados ['telaativa'] = 'produtos';
                    $dados ['msg'] = 'Ocorreu um erro ao cadastrar o Produto! Atualize a p�gina e tente novamente';
                    $dados ['tela'] = 'pedidos/view_cadastropedido';
                }
                $this->load->view('view_home', $dados);
            } else {
                $dados ['telaativa'] = 'produtos';
                $dados ['msg'] = 'Dados Imcompletos! Preencha os dados e tente novamente';
                $dados ['tela'] = 'pedidos/view_cadastropedido';
                $this->load->view('view_home', $dados);
            }
        } else {
            $this->load->model('model_cliente');
            $resultadoClientes = $this->model_cliente->carregaclientespedido();
            $dados ['resultadoClientes'] = $resultadoClientes;

            $this->load->model('model_produto');
            $resultadoProdutos = $this->model_produto->carregaprodutos();
            $dados ['resultadoProdutos'] = $resultadoProdutos;
            $dados ['telaativa'] = 'pedido';
            $dados ['tela'] = 'pedidos/view_cadastropedido';
            $this->load->view('view_home', $dados);
        }
    }
}

function alterarpedido() {
    if ($this->session->userdata('logged_in')) { // VALIDA USU�RIO LOGADO
        $this->load->model('model_perfil');
        $resultadoPerfil = $this->model_perfil->buscaPerfil();
        $dados ['resultadoPerfil'] = $resultadoPerfil;

        if ($this->input->post()) {
            
        } else {
            $dados ['telaativa'] = 'pedido';
            $dados ['tela'] = 'produtos/view_formconsultaproduto';
            $this->load->view('view_home', $dados);
        }
    }
}

function consultarpedido() {
    if ($this->session->userdata('logged_in')) { // VALIDA USU�RIO LOGADO
        $this->load->model('model_perfil');
        $resultadoPerfil = $this->model_perfil->buscaPerfil();
        $dados ['resultadoPerfil'] = $resultadoPerfil;

        if ($this->input->post()) {
            
        } else {
            $dados ['telaativa'] = 'pedido';
            $dados ['tela'] = 'produtos/view_listaproduto';
            $this->load->view('view_home', $dados);
        }
    }
}

function emissaopedido() {
    if ($this->session->userdata('logged_in')) { // VALIDA USU�RIO LOGADO
        $this->load->model('model_perfil');
        $resultadoPerfil = $this->model_perfil->buscaPerfil();
        $dados ['resultadoPerfil'] = $resultadoPerfil;

        if ($this->input->post()) {
            
        } else {
            $dados ['telaativa'] = 'pedido';
            $dados ['tela'] = 'produtos/view_listaproduto';
            $this->load->view('view_home', $dados);
        }
    }
}
}
?>