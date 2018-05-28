<div class="content-wrapper">
      <section class="content-header">
            <h1>Cadastro de Clientes</h1>
            <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li>Clientes</li>
                  <li class="active">Cadastro de Cliente</li>
            </ol>
      </section>

      <section class="content">
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-lg-12">
                        <div class="box box-warning">
                              <div class="box-header with-border">
                                    <h3 class="box-title">Informe os dados do cliente</h3>
                              </div>
                              <?php
                              if (isset($msg)) {
                                    echo '<div class="box-header with-border">' . $msg . '</div>';
                              }
                              ?>
                              <div class="box-body">
                                    <form role="form" action="cadastracliente" method="post"
                                          class="form-horizontal">
                                          <div class="box-body">
                                                <div class="form-group">
                                                      <label for="nomefantasia" class="col-sm-2 control-label">Nome Fantasia</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="nomefantasia" name="nomefantasia"
                                                                   placeholder="Informe o nome fantasia do cliente" value="<?php echo set_value('nomefantasia'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="razaosocial" class="col-sm-2 control-label">Razão Social</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="razaosocial"
                                                                   name="razaosocial" placeholder="Informe a Razão Social" value="<?php echo set_value('razaosocial'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="tipocliente" class="col-sm-2 control-label">Tipo Cliente</label>
                                                      <div class="col-sm-5">
                                                            <input type="radio" class="flat-red" id="cnpj" name="cnpj"><label for="tipocliente" class="control-label">&nbsp;&nbsp;Pessoa Juridica</label>
                                                      </div>
                                                      <div class="col-sm-5">
                                                            <input type="radio" class="flat-red" id="cnpj" name="cnpj"><label for="tipocliente" class="control-label">&nbsp;&nbsp;Pessoa Fisica</label>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="cnpj" class="col-sm-2 control-label">CNPJ</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="cnpj"
                                                                   name="cnpj" placeholder="Informe o CNPJ" value="<?php echo set_value('cnpj'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="cpf" class="col-sm-2 control-label">CPF</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="cpf"
                                                                   name="cpf" placeholder="Informe o CPF" value="<?php echo set_value('cpf'); ?>" readonly="readonly">
                                                      </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                      <label for="telefone" class="col-sm-2 control-label">Telefone Comercial</label>

                                                      <div class="col-sm-10">
                                                            <input type="tel" class="form-control" id="telefone"
                                                                   name="telefone"
                                                                   placeholder="Informe o telefone comercial" value="<?php echo set_value('telefone'); ?>">
                                                      </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                      <label for="celular" class="col-sm-2 control-label">Telefone Celular</label>

                                                      <div class="col-sm-10">
                                                            <input type="tel" class="form-control" id="celular"
                                                                   name="celular"
                                                                   placeholder="Informe o telefone celular" value="<?php echo set_value('celular'); ?>">
                                                      </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                      <label for="email" class="col-sm-2 control-label">E-mail</label>

                                                      <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="email"
                                                                   name="email"
                                                                   placeholder="Informe o E-mail" value="<?php echo set_value('email'); ?>">
                                                      </div>
                                                </div>

                                                <div class="form-group">
                                                      <label for="endereco" class="col-sm-2 control-label">Endereço  Completo</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="endereco"
                                                                   name="endereco"
                                                                   placeholder="Informe o Endereço" value="<?php echo set_value('endereco'); ?>">
                                                      </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                      <label for="complemento" class="col-sm-2 control-label">Complemento</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="complemento"
                                                                   name="complemento"
                                                                   placeholder="Informações complementares" value="<?php echo set_value('complemento'); ?>">
                                                      </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                      <label for="bairro" class="col-sm-2 control-label">Bairro</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="bairro"
                                                                   name="bairro"
                                                                   placeholder="Informe o Bairro" value="<?php echo set_value('bairro'); ?>">
                                                      </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                      <label for="cidade" class="col-sm-2 control-label">Cidade</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="cidade"
                                                                   name="cidade"
                                                                   placeholder="Informe a Cidade" value="<?php echo set_value('cidade'); ?>">
                                                      </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                      <label for="estado" class="col-sm-2 control-label">Estado</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="estado"
                                                                   name="estado"
                                                                   placeholder="Informe o Estado" value="<?php echo set_value('estado'); ?>">
                                                      </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                      <label for="cep" class="col-sm-2 control-label">CEP</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="cep"
                                                                   name="cep"
                                                                   placeholder="Informe o CEP" value="<?php echo set_value('cep'); ?>">
                                                      </div>
                                                </div>
                                                
                                          </div>
                                          <div class="form-group">
                                                <div class="col-xs-12 col-sm-9 col-lg-9">&nbsp;</div>
                                                <div class="col-xs-12 col-sm-3 col-lg-3">
                                                      <button type="submit" class="btn btn-primary"
                                                              style="width: 100%">Cadastrar Cliente</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</div>

<script src="../assets/js/jquery/jquery-2.2.3.min.js"></script>
<script>
      var base_url = '<?php echo base_url() ?>';
      $(document).ready(function () {

      });
      function buscaInfo(perfil) {
            var perfil = perfil;
            var url = base_url + "home/buscausuarioperfil";
            $.post(url, {
                  perfil: perfil
            }, function (data) {
                  $('#resultado').html(data);
            });
      }
</script>
