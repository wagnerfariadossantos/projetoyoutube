<div class="content-wrapper">
    <section class="content-header">
        <h1>Consulta</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Usu&aacute;rios</li>
            <li class="active">Consulta</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informe os dados</h3>
                    </div>
                    <?php
                    if (isset($msg)) {
                        echo '<div class="box-header with-border">' . $msg . '</div>';
                    }
                    ?>
                    <div class="box-body">
                        <form role="form" action="consultaproduto" method="post"
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
                                                style="width: 100%">Consultar Produto</button>
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
</script>

































