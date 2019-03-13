<?php
			if(isset($_POST['acao']) && $_POST['acao'] == 'enviar'){
				require('email/enviar.php');
			}
	

?>
<!DOCTYPE html>
<html lang="pt"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Hospital Jardim Cuiabá</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!-- CSS do plugin -->
	<link rel="stylesheet" href="reveal.css">	
	<!-- Biblioteca jQuery -->
	<script type="text/javascript" src="jquery-1.4.4.min.js"></script>
	<!-- JS do plugin -->
	<script type="text/javascript" src="jquery.reveal.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<?php
			if(isset($msg))
				echo "<p id=\"msg\">$msg</p>";
	?>
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 header-logo">
					<br>
					<a href="index.html"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-8">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Inicio</a></li>
					        <li><a class="menu" href="#about">Institucional</a></li>
					        <li><a class="menu" href="#service">Especialidades Médicas </a></li>
							<li><a class="menu" href="#convenio">Convênios</a></li>
					        <li><a class="menu" href="#team">Parceiros</a></li>
							<li><a class="menu" href="#contact">Contato</a></li>
							
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>Pronto Atendimento</h2>
		               			<p><h3>O Pronto Atendimento (PA) disponibiliza atendimento imediato e ininterrupto realizados por uma equipe assistencial e multifuncional. Possui leitos de observação para atendimento adulto e infantil, conta com uma Equipe de Médicos e Serviço de Enfermagem para atendimento em  Ortopedia, Emergências Pediátricas, Clínica Médica e Cirúrgica, Ginecologia e Obstetrícia.

Possui sua estrutura localizada no próprio complexo hospitalar caso haja necessidade de internação ou realização de procedimentos.</h3></p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>Centro Cirúrgico</h2>
		               			<p><h3>O Centro Cirúrgico possui salas destinadas a cirurgias de pequena, média e alta complexidade, com equipamentos modernos e avançados.

É composto por várias áreas interligadas entre si, com o intuito de proporcionar excelentes condições para a realização do ato cirúrgico. A equipe multidisciplinar atua no Centro Cirúrgico com a finalidade de promover o cuidado para com o paciente, bem como, proporcionar a sua recuperação de forma eficaz.</h3></p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>UTI</h2>
		               			<p><h3>A Unidade de Terapia Intensiva possui uma estrutura moderna e equipamentos de última geração, com o objetivo de oferecer um atendimento qualificado e humanizado.
Conta com coordenadores titulados pela Associação de Medicina Intensiva Brasileira (AMIB). Os profissionais possuem larga experiência em atendimento de pacientes criticamente enfermos e cuidam da vida com ciência e amor, valorizando os princípios bioéticos e prestam uma assistência humanizada aos pacientes e seus familiares.<h3></p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h2>Hotelaria Hospitalar</h2>
		               			<p><h3>A Gestão de Hotelaria Hospitalar torna o ambiente acolhedor e proporciona melhor qualidade de vida aos clientes. Disponibilizamos de um ambiente agradável tanto ao cliente interno, quanto ao externo, conciliamos o ato de hospedar, atendendo as necessidades do cliente e oferecendo conforto, bem-estar e segurança.</h3></p>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>Institucional</h2>
				<h4>Hospital Jardim Cuiabá O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.</h4>
				<h4><p>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível. Muitas ferramentas de publicação electrónica e editores de páginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissão, e uma pesquisa por "lorem ipsum" irá encontrar muitos websites ainda na sua infância. Várias versões têm evoluído ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).<p><H4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Missão</h3>
							<p>Proporcionar assistência médica hospitalar de qualidade, promovendo a saúde dos nossos clientes de forma ética e humanizada..
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>V</h1>
							</div>

							<h3>Valores</h3>
							<p><strong>Ética e Honestidade -</strong> Valorizamos princípios e condutas, pois acreditamos na integridade pessoal profissional<br>
<strong>Humanização -</strong> O Hospital Jardim Cuiabá procura manter o atendimento humanizado, valorizando a individualidade dos pacientes e colaboradores.<br>
<strong>Religiosidade -</strong> O Hospital Jardim Cuiabá respeita e valoriza a religiosidade de cada indivíduo.<br>
<strong>Trabalho em equipe -</strong> Acreditamos que nenhum resultado é alcançado individualmente.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img" src="img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>V</h1>
							</div>
							<h3>Visão</h3>
							<p>Ser referência no atendimento médico hospitalar no estado de Mato Grosso até 2018<p>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>Especialidades Médicas</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="img/service1.png" alt="">
							</div>
						</div>
						<h3>Cardiologia</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="img/service2.png" alt="">
							</div>
						</div>
						<h3>Neurologia</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="img/service3.png" alt="">
							</div>
						</div>
						<h3>Ortopedia e Reumatologia</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="img/service4.png" alt="">
							</div>
						</div>
						<h3>Pediatria</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<!-- end of team section -->
	<section class="team" id="convenio">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>Convênios</h2>
					<h4>Contamos com vários convênios para melhor atende-los</h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/unimed.png" alt="member-1">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/mtsaude.png" alt="member-1">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/caixa.png" alt="member-2">
					</div> 
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/amil.png" alt="member-3">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/cassi.png" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/sulamerica.png" alt="member-5">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/bradesco.png" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>Parceiros</h2>
					<h4>Texto</h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Imagens - Medicina Diagnostica</h3>
						<p>Oferecer diagnóstico médicos com qualidade, confiabilidade e atendimento humanizado, através de uma equipe especializada e comprometida.</p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>CPC</h3>
						<p>O CPC. Pioneiros em Patologia e Citologia em Mato Grosso</p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Hemaclin</h3>
						<p>Oferecer serviços de análises clínicas, de modo a atender de forma rápida e confiável as expectativas de médicos, clientes e colaboradores, por meio de um relacionamento sustentável e de qualidade.</p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Lacic</h3>
						<p>Laboratório de Hemodinâmica e Cardiologia Intervencionista</p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/logo_canguru.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Mamae Canguru</h3>
						<p>UTI Infantil</p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Endogastro</h3>
						<p>Exames e Cirurgias do Aparelho Digestivo</p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/gastro.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->
	<div id="janelaModal" class="reveal-modal">
						<div id="main" class="container-fluid">
	<form action="" method="post" enctype="multipart/form-data" data-toggle="validator">
			<fieldset>
				<legend>Preencha com seus dados</legend>
				
				<div class="row">
 					<div class="form-group col-md-3">
   						<label>Nome*:</label>
  					 	<input type="text" class="form-control" name="nome"  placeholder="Nome Completo" id="nome" required>
 					</div>
 
 					<div class="form-group col-md-3">
  						 <label>E-mail*:</label>
   						 <input type="email" class="form-control" name="email" placeholder="nome@dominio.com" id="email" data-error="Por favor, informe um e-mail correto." required>
 						 <div class="help-block with-errors"></div>
 					</div>
 
 					<div class="form-group col-md-3">
   						 <label>Titulo*:</label>
   						 <input type="text" class="form-control" name="titulo" placeholder="Titulo" id="titulo" required>
 					</div>
				</div>
				
				<div class="row">
 					<div class="form-group col-md-3">
   						 <label>Mensagem:</label>
  						 <textarea type="text" class="form-control" name="mensagem" placeholder="Escreva sua mensagem" id="mensagem" rows="5"></textarea>
					</div>
 
 					<div class="form-group col-md-4">
   						 <label>Arquivo: (permitidos DOCX / PDF, <span>Tamanho máximo permitido 1MB.)</span></label>
   						 <input type="file" class="form-control" name="arquivo" id="arquivo">
 					</div>
				</div>
				</div>
				<p>Obs: Os campos marcados com * são obrigatórios.</p>
				<input type="hidden" name="acao" value="enviar" />
				<input type="submit" value="Enviar Formulário" class="btn btn-success"/>
			</fieldset>
	</form>
						<a class="close-reveal-modal">×</a>
					</div>

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Informações para Contato</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>Informações para Contato</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-map-marker"></i><span>Endereço:</span> Avenida das Flores , Jardim Cuiabá , Cuiabá - MT, 78043-172</li></ul><br>
							<ul><li><i class="fa fa-phone"></i><span>Telefone:</span> (065) 3051-3000</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> contato@hospitaljardimcuiaba.com.br</li></ul>
							<ul><li><i class="fa fa-briefcase"></i><span><a class="btn btn-primary" href="email/index.php" data-reveal-id="janelaModal">Trabalhe conosco</a></span></li></ul>
						</div>
					</div>
						
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>Localização</h3><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.9375333015837!2d-56.12044588550989!3d-15.594986022235593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939db2261c76bb35%3A0xc9c1a3ba8769da5d!2sHospital+Jardim+Cuiab%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1462394797354" width="530" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Mostafizur All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href="https://www.facebook.com/hospjdcba" target="_blank"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="lib/js/jquery.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/validator.min.js"></script>	
</body>
</html>