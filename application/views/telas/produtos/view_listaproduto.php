<link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../assets/datatables/dataTables.bootstrap.css">

<div class="content-wrapper">
      <section class="content-header">
            <h1>Lista de Produtos</h1>
            <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li>Produtos</li>
                  <li class="active">Lista </li>
            </ol>
      </section>

      <section class="content">
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-lg-12">
                        <div class="box box-warning">

                              <?php
                              if (isset($msg)) {
                                    echo '<div class="box-header with-border">' . $msg . '</div>';
                              }
                              ?>
                              <div class="box">
<!--                                    <div class="box-header with-border">
                                          <h3 class="box-title">Lista de Produtos</h3>
                                    </div>-->
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                          <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                      <tr>
                                                            <th style="width:24px">&nbsp;</th>
                                                            <th>Produto</th>
                                                            <th>Unidade</th>
                                                            <th>Estoque</th>
                                                            <th>Valor Venda</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php
                                                      if (isset($resultadoProduto)) {
                                                            foreach ($resultadoProduto as $produtos) {
                                                                  ?>
                                                                  <tr>
                                                                        <td><a href="alteraproduto?id=<?php echo $produtos->id; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                                                                        <td><?php echo $produtos->descricaoproduto; ?></td>
                                                                        <td><?php echo $produtos->unidade; ?></td>
                                                                        <td><?php echo $produtos->qtdeestoque; ?></td>
                                                                        <td><?php echo $produtos->valorvenda; ?></td>
                                                                  </tr>
                                                                  <?php
                                                            }
                                                      }
                                                      ?>

                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</div>

<script src="../assets/js/jquery/jquery-2.2.3.min.js"></script>


<script src="../assets/js/bootstrap/bootstrap.min.js"></script>
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
      var base_url = '<?php echo base_url() ?>';
      $(document).ready(function () {

      });
      $(function () {
            $('#example1').DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false
            });
      });
</script>
































