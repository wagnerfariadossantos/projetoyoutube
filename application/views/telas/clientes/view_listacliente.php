<link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../assets/datatables/dataTables.bootstrap.css">

<div class="content-wrapper">
      <section class="content-header">
            <h1>Lista Clientes</h1>
            <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li>Clientes</li>
                  <li class="active">Lista Clientes</li>
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
                                          <h3 class="box-title">Lista de Clientes</h3>
                                    </div>-->
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                          <form role="form" name="formulariocliente" id="formulariocliente" action="alteracliente" method="post" class="form-horizontal">
                                                <input name="idcliente" id="idcliente" type="hidden" value="" readonly="readonly">
                                          </fom>
                                          <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                      <tr>
                                                            <th style="width:24px">&nbsp;</th>
                                                            <th>Nome do Cliente</th>
                                                            <th>E-mail</th>
                                                            <th>Estado</th>
                                                            <th style="width:1px;">&nbsp;</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php
                                                      if ((isset($clientelista)) && (!empty($clientelista))) {
                                                            foreach ($clientelista as $clientes) {
                                                                  ?>
                                                                  <tr>
                                                                        <td><a href="#" onclick="consultacliente('<?php echo $clientes->id; ?>')"><i class="fa fa-pencil-square-o"></i></a></td>
                                                                        <td><?php echo $clientes->nomefantasia; ?></td>
                                                                        <td><?php echo $clientes->email; ?></td>
                                                                        <td><?php echo $clientes->estado; ?></td>
                                                                        <td>
                                                                              <?php
                                                                              if ((int)$clientes->status === 1) {
                                                                                    echo '<i class="fa fa-circle 2x" style="color: green;">';
                                                                              } else {
                                                                                     if ((int)$clientes->status === 0) {
                                                                                          echo '<i class="fa fa-circle 2x" style="color: red;">';
                                                                                    } else {
                                                                                          echo '<i class="fa fa-circle 2x" style="color: yellow;">';
                                                                                    }
                                                                              }
                                                                              ?>
                                                                        </td>
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
      function consultacliente(id){
            $('#idcliente').val(id);
            $('#formulariocliente').submit();
      }
</script>
































