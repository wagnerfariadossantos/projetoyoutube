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

































