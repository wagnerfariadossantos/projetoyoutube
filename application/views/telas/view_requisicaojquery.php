<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Requisi&ccedil;&atilde;o AJAX
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Requisi&ccedil;&atilde;o AJAX</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="box box-warning">
					<div class="box-header with-border">
						<h3 class="box-title">Perfil</h3>
					</div>
					<div class="box-body">
						<form role="form">
							<div class="form-group">
								<select class="form-control" onchange="buscaInfo(this.value)">
									<option>Selecione...</option>
									<?php
									if (isset ( $resultadoPerfil )) {
										foreach ( $resultadoPerfil as $perfil ) {
											echo '<option value="' . $perfil->perfilid . '">' . $perfil->descricao . '</option>';
										}
									}
									?>
								</select>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="box box-warning">
					<div class="box-header with-border">
						<h3 class="box-title">Resultado AJAX</h3>
					</div>
					<div class="box-body">
						<form role="form">
							<div class="form-group">
								<textarea class="form-control" rows="3" id="resultado"
									name="resultado"
									placeholder="Selecione o Perfil para mais informações..."></textarea>
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
	function buscaInfo(perfil){
		var perfil = perfil;
		var url = base_url + "home/buscausuarioperfil";
        $.post(url, {
        	perfil: perfil
        }, function (data) {
            $('#resultado').html(data);
        });
	}
</script>
































