<div class="content-wrapper">
      <section class="content-header">
            <h1>Cadastro de Produtos</h1>
            <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li>Produtos</li>
                  <li class="active">Cadastro de Produtos</li>
            </ol>
      </section>

      <section class="content">
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-lg-12">
                        <div class="box box-warning">
<!--                              <div class="box-header with-border">
                                    <h3 class="box-title">Informe os dados do Produtos</h3>
                              </div>-->
                              <?php
                              if (isset($msg)) {
                                    echo '<div class="box-header with-border">' . $msg . '</div>';
                              }
                              ?>
                              <div class="box-body">
                                    <form role="form" action="cadastraproduto" method="post"
                                          class="form-horizontal">
                                          <div class="box-body">
                                                <div class="form-group">
                                                      <label for="descricaoproduto" class="col-sm-2 control-label">Descrição do Produto</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="descricaoproduto" name="descricaoproduto"
                                                                   placeholder="Informe a descrição do produto" value="<?php echo set_value('descricaoproduto'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="unidade" class="col-sm-2 control-label">Unidade de Venda</label>
                                                      <div class="col-sm-10">
                                                            <select class="form-control" id="unidade" name="unidade">
                                                                  <option value="">Selecione...</option>
                                                                  <option value="1">Unidade</option>
                                                                  <option value="2">Caixa</option>
                                                                  <option value="3">Kilo</option>
                                                                  <option value="4">Metro</option>
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="valormercadoria" class="col-sm-2 control-label">Valor Mercadoria (R$)</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="valormercadoria"
                                                                   name="valormercadoria" placeholder="Informe o valor da mercadoria" value="<?php echo set_value('valormercadoria'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="valorvenda" class="col-sm-2 control-label">Valor para Venda (R$)</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="valorvenda"
                                                                   name="valorvenda" placeholder="Informe o valor para venda" value="<?php echo set_value('valorvenda'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="qtdeestoque" class="col-sm-2 control-label">Quantidade em Estoque</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="qtdeestoque"
                                                                   name="qtdeestoque" placeholder="Informe a quantidade em Estoque" value="<?php echo set_value('qtdeestoque'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="descontopermitido" class="col-sm-2 control-label">Desconto Máximo Permitido (%)</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="descontopermitido"
                                                                   name="descontopermitido"
                                                                   placeholder="Informe o valor máximo de desconto permitido" value="<?php echo set_value('descontopermitido'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="alertaestoque" class="col-sm-2 control-label">Estoque minimo para alerta</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="alertaestoque"
                                                                   name="alertaestoque"
                                                                   placeholder="Informe o estoque minimo para alerta do sistema" value="<?php echo set_value('alertaestoque'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="qtdevendaminima" class="col-sm-2 control-label">Quantidade minima para venda</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="qtdevendaminima"
                                                                   name="qtdevendaminima"
                                                                   placeholder="Informe a quantidade minima para venda" value="<?php echo set_value('qtdevendaminima'); ?>">
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="qtdevalorminimo" class="col-sm-2 control-label">Valor minimo para venda</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="qtdevalorminimo"
                                                                   name="qtdevalorminimo"
                                                                   placeholder="Informe o valor minimo para venda" value="<?php echo set_value('qtdevalorminimo'); ?>">
                                                      </div>
                                                </div>
                                              <div class="form-group">
                                                      <label for="codigoean" class="col-sm-2 control-label">Código EAN</label>

                                                      <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="codigoean"
                                                                   name="codigoean"
                                                                   placeholder="Informe o código EAN do produto" value="<?php echo set_value('codigoean'); ?>" onkeyup="geracodigobarra();">
                                                      </div>
                                                </div>
                                              <div class="form-group">
                                                  <span id="codigobarra" name="codigobarra"></span>
                                                </div>
                                                <div class="form-group">
                                                      <div class="col-xs-12 col-sm-9 col-lg-9">&nbsp;</div>
                                                      <div class="col-xs-12 col-sm-3 col-lg-3">
                                                            <button type="submit" class="btn btn-primary"
                                                                    style="width: 100%">Cadastrar Produto</button>
                                                      </div>
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
      function geracodigobarra(){
          var codigoean = $('#codigoean').val();
          var url = base_url + "home/geracodigobarras";
            $.post(url, {
                  codigoean: codigoean
            }, function (data) {
                  $('#codigobarra').html('<img src='+data+'>');
            });
      }
</script>
