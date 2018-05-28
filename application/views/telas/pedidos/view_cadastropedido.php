<!--<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="assets/datatables/dataTables.bootstrap.css">-->

<style>
    .dataTables_filter {
        position: absolute;
        right: 0px !important;
        margin-right: 15px;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Cadastro de Pedidos</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Pedidos</li>
            <li class="active">Cadastro de Pedidos</li>
        </ol>
    </section>

    <section class="content">
        <form role="form" action="novopedido" method="post" class="form-horizontal">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div class="box box-warning">
                        <?php
                        if (isset($msg)) {
                            echo '<div class="box-header with-border">' . $msg . '</div>';
                        }
                        ?>
                        <div class="box-body">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="clienteid" class="col-sm-2 control-label">ID do Cliente</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="clienteid" name="clienteid" placeholder="Informe o id do cliente" value="<?php echo set_value('clienteid'); ?>" readonly="readonly" tabindex="-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cliente" class="col-sm-2 control-label">Cliente</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="unidade" name="cliente" onchange="carregaid(this.value)">
                                            <option value="">Selecione o Cliente...</option>
                                            <?php
                                            if ((isset($resultadoClientes)) && (!empty($resultadoClientes))) {
                                                foreach ($resultadoClientes as $cli) {
                                                    echo '<option value="' . $cli->id . '">' . $cli->nomefantasia . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="codigopedido" class="col-sm-2 control-label">Código do Pedido</label>

                                    <div class="col-sm-10">
                                        <?php
                                        $codigopedido = date('YmdHis');
                                        ?>
                                        <input type="text" class="form-control" id="codigopedido" name="codigopedido" value="<?php echo set_value('codigopedido', $codigopedido); ?>" readonly="readonly" tabindex="-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="valorbruto" class="col-sm-2 control-label">Valor Mercadoria (R$)</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="valormercadoria" name="valormercadoria" placeholder="R$ 0.00" value="<?php echo set_value('valormercadoria'); ?>" readonly="readonly" tabindex="-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="valorliquido" class="col-sm-2 control-label">Valor Bruto (R$)</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="valorbruto" name="valorbruto" placeholder="R$ 0.00" value="<?php echo set_value('valorbruto'); ?>" readonly="readonly" tabindex="-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Cadastrar Pedido"> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div class="box box-success">
                        <?php
                        if (isset($msg)) {
                            echo '<div class="box-header with-border">' . $msg . '</div>';
                        }
                        ?>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Cód. Produto</th>
                                        <th>Descrição</th>
                                        <th style="width:10px">Qtde</th>
                                        <th style="width:10px">Desconto</th>
                                        <th>Vl. Mercadoria</th>
                                        <th>Vl. Venda</th>
                                        <th>Qtde Estoque</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($resultadoProdutos)) {
                                        $totalitens = 0;
                                        foreach ($resultadoProdutos as $produtos) {
                                            $totalitens = (int) $totalitens + 1;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $produtos->id; ?>
                                                    <input type="hidden" name="CODE<?php echo $totalitens; ?>" id="CODE<?php echo $totalitens; ?>" value="<?php echo $produtos->id; ?>">
                                                </td>
                                                <td><?php echo $produtos->descricaoproduto; ?></td>
                                                <td><input type="text" style="width: 60px;" name="QTDE<?php echo $totalitens; ?>" id="QTDE<?php echo $totalitens; ?>" value="0" onfocus="limpacampo(this.id)" onblur="verificanulo(this.id)" onkeyup="calcula()"></td>
                                                <?php
                                                if ((int) $produtos->descontopermitido > 0):
                                                    echo '<td><input type="text" style="width: 60px;" name="DESC' . $totalitens . '" id="DESC' . $totalitens . '" value="0"></td>';
                                                else:
                                                    echo '<td><input type="text" style="width: 60px; border:0;" name="DESC' . $totalitens . '" id="DESC' . $totalitens . '" value="0" readonly="readonly"></td>';
                                                endif;
                                                ?>    
                                                <td><input type="text" style="border:0;" name="MERC<?php echo $totalitens; ?>" id="MERC<?php echo $totalitens; ?>" value="<?php echo $produtos->valormercadoria; ?>" readonly="readonly"  tabindex="-1"></td>
                                                <td><input type="text" style="border:0;" name="VEND<?php echo $totalitens; ?>" id="VEND<?php echo $totalitens; ?>" value="<?php echo $produtos->valorvenda; ?>" readonly="readonly" tabindex="-1"></td>
                                                <td><?php echo $produtos->qtdeestoque; ?></td>

                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <input type="hidden" name="totalitens" id="totalitens" value="<?php echo $totalitens; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>

<script src="../assets/js/jquery/jquery-2.2.3.min.js"></script>


<!--<script src="../assets/js/bootstrap/bootstrap.min.js"></script>-->
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables/dataTables.bootstrap.min.js"></script>
<script>


                                                    $('#example1').DataTable({
                                                        "bLengthChange": true,
                                                        "info": true,
                                                        "bFilter": true,
                                                        responsive: true,
                                                        "language": {
                                                            "lengthMenu": "Exibindo _MENU_ produtos por pagina",
                                                            "zeroRecords": "Nenhum produto encontrado",
                                                            "info": "Exibindo página _PAGE_ de _PAGES_. Total de produtos: _TOTAL_",
                                                            "infoEmpty": "Nenhum produto localizado",
                                                            "infoFiltered": "(Filtrando um total de _MAX_ produtos)",
                                                            "decimal": "",
                                                            "emptyTable": "Nenhum produto localizado",
                                                            "infoPostFix": "",
                                                            "thousands": ",",
                                                            "bLengthChange": true,
                                                            "displayLength": 10,
//                                                            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
                                                            "loadingRecords": "Carregando...",
                                                            "processing": "Processando...",
                                                            "search": "Filtro:",
                                                            "sPaginationType": "full_numbers",
                                                            "paginate": {
                                                                "first": "Primeira",
                                                                "last": "Última",
                                                                "next": "Próxima",
                                                                "previous": "Anterior"
                                                            },
                                                            "aria": {
                                                                "sortAscending": ": activate to sort column ascending",
                                                                "sortDescending": ": activate to sort column descending"
                                                            }
                                                        },
                                                    });

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

                                                    function carregaid(idcliente) {
                                                        $('#clienteid').val(idcliente);
                                                    }

                                                    function limpacampo(id) {
                                                        var vlcampo = $('#' + id).val();
                                                        if (vlcampo > 0) {
                                                            //nada a fazer
                                                        } else {
                                                            $('#' + id).val('');
                                                        }
                                                    }

                                                    function verificanulo(id) {
                                                        var vlcampo = $('#' + id).val();
                                                        //alert(vlcampo);
                                                        if (vlcampo === '') {
                                                            $('#' + id).val(0);
                                                        }
                                                    }

                                                    function calcula() {
                                                        debugger;
                                                        var totalitens = '<?php echo $totalitens; ?>';

                                                        var vlmercardoria = 0;
                                                        var vlbruto = 0;
                                                        var i;
                                                        for (i = 1; i <= totalitens; i++) {
                                                            var campoqtde = 'QTDE' + i;
                                                            var vlqtde = $('#' + campoqtde).val();
                                                            var campodesc = 'DESC' + i;
                                                            var vldesc = $('#' + campodesc).val();
                                                            var campovend = 'VEND' + i;
                                                            var vlvend = $('#' + campovend).val();
                                                            if ((vldesc > 0) && (vlqtde > 0)) {
                                                                vlmercardoria = vlmercardoria + (vlqtde * ((vldesc * vlvend) / 100));
                                                            } else {
                                                                vlmercardoria = vlmercardoria + (vlqtde * vlvend);
                                                            }
                                                            vlbruto = vlbruto + (vlqtde * vlvend);
                                                        }

                                                        $('#valormercadoria').val(vlmercardoria);
                                                        $('#valorbruto').val(vlbruto);
                                                    }
</script>
