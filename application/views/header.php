<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daki pra Lá</title>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<!-- Bootstrap -->
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico">
	<link rel="stylesheet" href="<?=base_url()?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<style type="text/css">

		@media (max-width: 767px) {
			body {
				font-size: 14px;
			}

			.navbar-brand {
				padding: 0 15px 15px;
			}
			.navbar-toggle {
				border:1px solid #fff;
			}

			.navbar-toggle .icon-bar {
				background-color: #fff;
			}

		}



		.main-nav{
			background-color:#01c9eb;
		}

		.navbar-left li a {
			color: #fff;
			text-transform: uppercase;
			font-size: 14px;
			font-weight: 500;
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.navbar-left li.active a {
			background-color: #02b8d7;
		}

		.navbar-nav li a:hover, 
		.navbar-nav li a:focus {
			outline:none;
			outline-offset: 0;
			text-decoration:none;  
			background: transparent;
		}

		a {
			cursor: pointer;  
			text-decoration: none;
			-webkit-transition: 300ms;
			-moz-transition: 300ms;
			-o-transition: 300ms;
			transition: 300ms;
		}

		a:focus, 
		a:hover {
			text-decoration: none;
			outline: none
		}
		.busca{
			margin-top: 20px;
			margin-bottom: 20px;

		}
		.busca label{
			font-size: 28px;
			color: #7f7f7f;
		}
		.input-busca{
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: normal;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;

			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-color: #fff;
			color: #000;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		.btn {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: normal;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			background-color: #fff;
			color: #faab00;
			font-weight:bold;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		.btn-verde {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: normal;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			background-color: #3cd301;
			color: #fff;
			font-weight:bold;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		.topo{
			height: 100px;
		}
		.login{
			padding-top: 70px;
			margin-right: 30px;
		}
		.login a{
			color: #3cd301;
		}
		.logo{
			margin-top: 5px;
		}
		.slider{
			background-color: #f2f2f2;
			padding-top: 35px;
			padding-bottom: 35px;
			border-bottom: 1px solid #e3dede;

		}
		#carousel-div{
			background-color: #fff !important;
			color: #fff;
			padding: 8px;
			border: 1px #ccc solid;
			margin: 0 auto;
		}
		.locais{
			background-color: #fff;
			margin-top: 20px;
		}
		.locais h2{
			color: #02b8d7;
			font-size: 16px;
			line-height: 0px;
		}
		.locais p{
			padding-right: 15px;
			padding-left: 15px;
		}
		.local{
			cursor: pointer;
			margin-top: 10px;
			margin-bottom: 20px;
		}
		.local:hover{
			background-color: #f1f1f1;
		}
		.foto{
			border: 1px solid #ccc;
			padding: 5px;
			width: 210px;
			margin-left: 25px;
			position: relative;
			margin: 0 auto;
		}
		.links h2{
			font-size: 24px;
			color: #faab00;
			margin-top: 0px;
		}
		.links a{
			color: #7f7f7f; 
		}
		.links{
			background-color: #f2f2f2;
			padding-top: 35px;
			padding-bottom: 35px;
			border-top: 1px solid #e3dede;
			border-bottom: 1px solid #e3dede;
		}


		footer { background-color:#3b3b3b; min-height:350px; font-family: 'Open Sans', sans-serif; }
		.footerleft { margin-top:50px; padding:0 36px; }
		.logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

		.footerleft p { color:#fff; font-size:12px !important; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
		.footerleft p i { width:20px; color:#999;}


		.paddingtop-bottom {  margin-top:50px;}
		.footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
		.footer-ul li { line-height:29px; font-size:12px;}
		.footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
		.footer-ul i { margin-right:10px;}
		.footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }





		.icon-ul { list-style-type:none !important; margin:0px; padding:0px;}
		.icon-ul li { line-height:75px; width:100%; float:left;}
		.icon { float:left; margin-right:5px;}


		.copyright { min-height:40px; background-color:#1f1f1f;}
		.copyright p {  color:#FFF; padding:10px 0; margin-bottom:0px;}
		.copyright a{color: #02b8d7;}

		.heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
		.post p { font-size:12px; color:#FFF; line-height:20px;}
		.bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}
		.bottom_ul li { float:left; line-height:40px;}
		.bottom_ul li:after { content:"/"; color:#FFF; margin-right:8px; margin-left:8px;}
		.bottom_ul li a { color:#FFF;  font-size:12px;}
		.btn-primary:hover {
			background-color: #01c9eb !important;
		}
		.btn-primary-branco:hover{
			color: #000;
		}
		.btn-primary-branco{
			color: #fff;
			background-color: #01C9EB;
		}
		.btn-social{
			color: #fff;
			margin: 5px;
		}
		.sociais{
			margin: 0 auto;
			background-color: #01c9eb;
			width: 80px;
			margin-top: -70px;
			-webkit-border-bottom-right-radius: 10px;
			-webkit-border-bottom-left-radius: 10px;
			-moz-border-radius-bottomright: 10px;
			-moz-border-radius-bottomleft: 10px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
			

		}
		.login-btn{
			margin-top: 25px;
		}

		/* RESPONSIVO*/

		@media screen and (max-width: 479px){

			.sociais {
				margin-right: -50px;


				/* Safari */
				-webkit-transform: rotate(90deg);

				/* Firefox */
				-moz-transform: rotate(90deg);

				/* IE */
				-ms-transform: rotate(90deg);

				/* Opera */
				-o-transform: rotate(90deg);

				/* Internet Explorer */
				filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

			}
			.logo{

				margin-left: 110px;

			}
			.busca{
				clear: both;

			}

		}

		/* FIM RESPONSIVO */

		.ads-728-90{
			max-width: 728px;
			position: relative;
			margin: 0 auto;
			padding-top: 20px;
		}
		.busca-centro{
			height: auto;
			border-top: 1px solid #e3dede;
			border-bottom: 1px solid #e3dede;
			background-color: #f2f2f2;
			margin-bottom: 35px;
		}
		.ola-convite{
			margin-bottom: 10px;
			background-color: #e3dede;
			border-top: 7px solid #00cae8;
			padding-bottom: 10px;
			padding-top: 10px;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
		}
		.ola-convite p{
			font-size: 18px;
			color: #7f7f7f;
			line-height: 20px;
		}
		.ola-nome{
			font-size: 22px;
			color: #00cae8;
			margin-bottom: 10px;

			
		}

		.links-proximos{
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.map{
			height: 400px;
			margin-top: 30px;
			margin-bottom: 30px;
			padding-left: 15px;
		}
		.ad-quadrado{
			margin-top: 30px;
			height: 280px;
			padding-left: 30px;
		}
		.local-descricao{
			color: #747474;
		}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<div class="row topo">
				<div class="logo pull-left"><img src="<?=base_url()?>assets/img/logo.png"></div>
				<div class="login pull-right">
					<div class="sociais text-center">
						<a href="#"><i class="fa fa-facebook-square fa-2x btn-social" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram fa-2x btn-social" aria-hidden="true"></i></div></a>
						<div class="login-btn"><a href="#"  data-toggle="modal" data-target="#modal_login_anunciante">Login do Anunciante</a> | <a href="#" data-toggle="modal" data-target="#modal_login_aventureiro">Login do Aventureiro</a></div></div>
					</div>
				</div>
			</header>
			<div class="main-nav">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">                 
							<li class="scroll active"><a href="#">Home</a></li>
							<li class="scroll"><a href="#">LOCAIS POPULARES</a></li> 
							<li class="scroll"><a href="#">DICAS E OPINIÕES</a></li>                     
							<li class="scroll"><a href="#">COMIDA</a></li>
							<li class="scroll"><a href="#">HOTÉIS E POUSADAS</a></li>       
						</ul>
						<div class="pull-right busca">

							<input type="text" name="busca" class="input-busca" placeholder="Ex: Ubatuba">
							<button class="btn">Pesquisar</button>
						</div>
					</div>
				</div>
			</div>


			<!-- Modal Login Aventureiro-->
			<div class="modal fade" id="modal_login_aventureiro" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">Por favor, Faça o Login</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center">
									<form method="post" action="" id="form_login_aventureiro">
										<div id="form-email" class="form-group">
											<input type="email" class="form-control" id="email-login-aventureiro" name="email-login-aventureiro" placeholder="E-Mail" required="">
										</div>

										<div id="form-senha" class="form-group ">
											<input type="password" class="form-control" id="senha-login-aventureiro" name="senha-login-aventureiro" placeholder="Senha" required="">
										</div>

										<button type="submit" name="entrar" class="btn btn-primary-branco btn-block">Entrar</button>

									</form> 

								</div>
							</div>
						</div>
						<div class="modal-footer">

						</div>
					</div>
				</div>
			</div>
			<!-- Modal Login Anunciante-->
			<div class="modal fade" id="modal_login_anunciante" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">Por favor, Faça o Login</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center">
									<form method="post" action="" id="form_login_anunciante">
										<div id="form-email" class="form-group">
											<input type="email" class="form-control" id="email-login-anunciante" name="email-login-anunciante" placeholder="E-Mail" required="">
										</div>

										<div id="form-senha" class="form-group ">
											<input type="password" class="form-control" id="senha-login-anunciante" name="senha-login-anunciante" placeholder="Senha" required="">
										</div>

										<button type="submit" name="entrar" class="btn btn-primary-branco btn-block">Entrar</button>

									</form> 

								</div>
							</div>
						</div>
						<div class="modal-footer">

						</div>
					</div>
				</div>
			</div>