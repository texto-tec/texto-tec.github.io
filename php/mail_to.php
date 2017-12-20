<?php
   $name= $_POST['name'];
   $email= $_POST['email'];
   $formmessage= $_POST['message'];
	$message=" ";


   
   $message.="Nome: ".$name . "\
   ";
   $message.="Email: ".$email ."\
   ";
   $message.="Mensagem: ".$formmessage ."\
   ";
 
   
   $subject = "Texto-tec contato via site";
      $myEmail= "lucaslacava@gmail.com,arnaldo.ferreira@fatec.sp.gov.br,giustixavier@outlook.com,elizeteluz@gmail.com";


   mail($myEmail,$subject,$message); 

?> 




<!DOCTYPE HTML>

<!--

	Projection by TEMPLATED

	templated.co @templatedco

	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)

-->

<html>

	<head>

		<title>Letramento FATEC</title>

		<?xml version="1.0" encoding="UTF-8"?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">



		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="../assets/css/main.css" />

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
		

	</head>

	<body>



		<!-- Header -->
		<!--
			<header id="header">

				<div class="inner">

					<a href="index.html" class="logo"><strong>Pesquisa de Iniciação Científica</strong></a>

					<nav id="nav">

						<a href="#quiz">Quiz FATEC Portas abertas</a>						

						<a href="#resumo">Resumo do projeto</a>

						<a href="#resumo" class="scroll">Quem somos</a>

						<a href="#uteis" class="scroll">Links úteis</a> 

						<a href="#referencias">Principais referências</a>

						



					</nav>

					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>

				</div>

			</header>
			
			<nav class="navbar navbar-inverse navbar-fixed-top ">
  				<div class="container-fluid">
    				

    				 <div class="navbar-header">
      					<p type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>                        
      					</p>>
      					<a class="navbar-brand" href="#">Pesquisa de Iniciação Científica</a>
    				</div>
    
    
   	 				<div class="collapse navbar-collapse" id="myNavbar">
      					<ul class="nav navbar-nav">
        					<li><a href="#quiz">Quiz </a></li>
        					<li><a href="#resumo">Resumo</a></li>
        					<li><a href="#resumo" class="scroll">Quem somos</a></li>
        					<li><a href="#uteis" class="scroll">Links úteis</a> </li>
        					<li><a href="#referencias">Referências</a></li>
      					</ul>
    				</div>

    				
  				</div>
			</nav>



		<!-- Banner -->

			<section id="banner" >

				<div class="inner" >

					<header>
						<h1>Obrigado pelo contato!</h1>
					</header>
					Em breve um dos integrantes de nossa equipe entrará em contato.

					<li><a href="../index.html" class="button special">Voltar</a></li>

					

				</div>

			</section>



<section id="main" class="wrapper">

	<div class="inner" >

		



				

				<div class="row" id="resumo">

					<div class="6u 12u$(small)" style="padding-top: 65px;"> 

								<h3>Resumo do projeto</h3>

								<p>O objetivo da pesquisa é investigar sobre o uso e a influência das mídias digitais nas práticas de leitura e escrita que ocorrem na esfera acadêmica e refletir de que maneira esses mecanismos podem contribuir ou não com o desenvolvimento da competência leitora e escritural dos tecnólogos em formação, na Faculdade de Tecnologia de Americana. A revisão bibliográfica deverá focar aspectos relacionados ao letramento acadêmico, na perspectiva do letramento como prática social (LEA e STREET, 2014), bem como as questões advindas da relação das mídias digitais com as ditas práticas de letramento. A partir do aporte teórico levantado, serão elaborados questionários com o objetivo de coletar dados que permitam analisar a relação das mídias digitais com a produção oral e escrita dos alunos, nas diversas disciplinas dos cursos superiores de tecnologia. A análise dos dados será apresentada nos Relatórios da Pesquisa e também poderá ser socializada em eventos acadêmicos ou publicada em forma de artigos. Palavras-chave: Leitura e escrita acadêmica. Mídias digitais. Competências leitoras e escriturais. Tecnólogo em formação.</p>

					</div>			

					<div class="6u$ 12u$(small)" style="padding-top: 65px;">

							<h3>Quem Somos </h3>

							<p>

							Arnaldo Assis Ferreira <a href="http://lattes.cnpq.br/3803955606369849">(Lattes);</a><br />

							Lucas Lacava <a href="http://lattes.cnpq.br/8348835306443724">(Lattes);</a><br />

							Rita de Cássia Xavier <a href="http://lattes.cnpq.br/4190674315835123">(Lattes);</a><br />

							Orientadora: Prof.ª Me. Maria Elizete Luz Sáes <a href="http://lattes.cnpq.br/6530563339916414 ">(Lattes)</a>.					

							</p>

					</div>

					

					

				</div>

								




			





			

			

			

	



	<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website_texto-tec&utm_content=footer_img"><img src="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png"  alt="www.000webhost.com"></a></div></body>

</html>