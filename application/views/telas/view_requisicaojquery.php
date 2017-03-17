<style>
#notifications {
	position: absolute;
	bottom: 20px;
	left: 20px;
	width: 300px;
}

.notification {
	border-radius: 4px;
	cursor: pointer;
	margin-top: 5px;
	border: 1px solid #999;
	display: inline-block;
	background-color: #f5f5f5;
	*background-color: #e6e6e6;
	background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff),
		to(#e6e6e6));
	background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
	background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
	background-image: linear-gradient(top, #ffffff, #e6e6e6);
	background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
	-webkit-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.notification:hover {
	border-color: #666;
}

.notification .close {
	float: right;
	line-height: 10px;
}

.notification span.icon {
	width: 45px;
	height: 42px;
	float: left;
	display: inline-block;
	text-align: center;
	margin-right: 0px;
	border-right: 1px solid #ccc;
}

.notification span.icon i {
	margin-top: 14px;
}

.notification div.inner {
	padding: 5px;
	float: left;
}

.notification div.inner div {
	width: 200px;
	overflow: hidden;
	text-overflow: ellipsis;
}

.notification h1 {
	font-size: 12px;
	margin: 0px;
	padding: 0px;
	line-height: normal;
}

.notification p {
	margin: 0px;
	padding: 0px;
	line-height: 10px;
	white-space: nowrap;
	display: inline-block;
}

.hide {
	display: none;
}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard <small>Version 2.0</small>
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




			<a id="show" href="#">Show Notification</a>
			





		</div>
	</section>
</div>

<div id="notifications">
				<div class="animated notification flipInX hide">
					<span class="icon"><i class="icon-envelope"></i></span>
					<div class="inner">
						<div>
							<h1>
								New Message: <a id="hide" class="close" href="#">&times;</a>
							</h1>
							<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
								Nulla vitae elit libero, a pharetra augue.</p>
						</div>
					</div>
				</div>

			</div>
			
			
<link rel="stylesheet" href="../assets/css/animate.css">
<script src="../assets/js/jquery/jquery-2.2.3.min.js"></script>
<script src="../assets/js/notify.js"></script>
<script>
	var base_url = '<?php echo base_url() ?>';
	$(document).ready(function () {
		$.notify("Access granted", "success");
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

	$('#show').click(function(){
        
        $(".notification div p").each(function(){
            $('.notification').css('display','inline-block');
            rotateText($(this));
        });
    });
    $('#hide').click(function(){
        $('.notification').addClass('fadeOutDown');
    });

	function rotateText(el){
	    var len = (el.length*8000);
	    el.stop().delay(2000).animate({
	        textIndent: "-" + (el.width() - el.parent().width()) + "px"  
	    },len,function(){
	        
	        el.stop().animate({
	        textIndent: "0"           
	        },len,function(){rotateText(el);});  
	    });  
	 }
</script>
































