	<!DOCTYPE html>
	<html lang="en">
	<head>
	  
		<title>Bruno Hilário</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Bruno Hilário">
		<meta name="description" content="Possuo graduação em Sistemas para Internet pelo Instituto Vianna Júnior - Juiz de Fora. Tenho experiência na área de desenvolvimento para WEB em: C# , SQL, PHP, HTML, CSS, Bootstrap, JavaScript, MySQL. Conhecimento nos desenvolvimentos em: Android e Java. Arquitetura MVC."/>
		<meta name="keywords" content="desenvolvedor, programador, web, desenvolvedor web, programador web, bruno, bruno hilario, bruno programador, bruno desenvolvedor, sistema, sistema web, HTML, CSS, XML, JavaScript">
		<meta charset="utf-8">
	  
		<link rel="icon" href="img/me.png" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/mail.js"></script>
		<link rel="stylesheet" href="css/myStyle.css"></link>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<!-- Navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#quemsou">QUEM SOU</a></li>
					<li><a href="#projetos">PROJETOS</a></li>
					<li><a href="#contato">CONTATO</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- First Container -->
	
		<section class="container-fluid bg-1 " id="quemsou">
			<header>
				<h3 class="margin">Quem sou?</h3>
			</header>
			
			<article class="text-center">
				<h3 class="margin">Quem sou?</h3>
				<img src="img/me.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
				<h3>Sou graduado em Sistemas para Internet pelo Instituto Vianna Júnior - Juiz de Fora. Tenho experiências com desenvolvimento em: C#, Adobe Flex, PHP, HTML, CSS, Bootstrap, JavaScript, SQL, MySQL. Conhecimento nos desenvolvimentos: Android e Java. Arquitetura MVC.</h3>

				<h3>Abaixo estão minhas experiências:</h3>
			</article>
			
			<article style="margin-left: 10%; margin-bottom: 5%;">
				<li> Desenvolvimento de sistema em C#, utilizando Framework Telerik, padrão de arquitetura MVC;</li>
				<li> Desenvolvimento e manutenções em sistemas com Flex 4.6;</li>
				<li> Comunicação do Flex com o C# pelo WebService;</li>
				<li> Modelagem de Banco de Dados com ErWin;</li>
				<li> Desenvolvimento e manutenção de sistema em PHP;</li>
				<li> Modelagem de banco de dados com DBDesigner;</li>
				<li> SQLServer 2012 - criação de scripts para consulta e alteração de dados, scripts para criação de tabelas;</li>
				<li> MySQL - criação de scripts para consulta e alteração de dados, scripts para criação de tabelas;</li>
				<li> Desenvolvimento em Android, aplicativos: comunicação via Bluetooth e leitor de QrCode integrado com BarCode Scanner. </li>
			</article>
			
	</section>

	<!-- Second Container -->
	<section class="container-fluid bg-2 text-center" id="projetos">
		<header>
			<h3 class="margin">Projetos</h3>
		</header>
		
		<article class="row-fluid" >
			<div class="col-md-1" ></div>
			<div class="col-md-10" >
				<p>Possuo alguns projetos feitos que não publiquei. O único que foi publicado é particular e estou trabalhando para melhorar e disponibilizar para outros usuários controlar links favoritos em sua categoria desejada. </p>
			</div>
			
			<div class="col-md-1" ></div>
		</article>
		
		<article class="col-md-4" >						
		</article>
		
		<article class="col-md-4" >
					
			<a href="controleLinks/index.php" class="projetos">
				<img src="img/links.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="150" height="150">
			<h4 >Controle de Links Favoritos</h4></a>
		</article>
		
		<article class="col-md-4" ></article>
		
		
	</section>

	<!-- Third Container (Grid) -->
	<section class="container-fluid bg-3 text-center" id="contato">    
		<h3 class="margin">Contato</h3>
		<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-md-6 contact-form centered " id="formCont" >
						
							<h3>Olá, deixe uma mensagem.</h3>
								<div id="successSend" class="alert alert-success invisible">
                                    <p>Obrigado pelo contato, logo entratrei em contato</p>
								</div>
							<form id="contact-form" action="php/mail.php">
								<div class="control-group">
									<div class="controls">
										<input class="span12" type="text" id="name" name="name" placeholder="* Nome" />
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<input class="span12" type="email" name="email" id="email" placeholder="* E-mail" />
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<textarea class="span12" name="comment" id="comment" placeholder="* Comentário"></textarea>
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button id="send-mail" class="btn">Enviar mensagem</button>
									</div>
								</div>
							</form>
						
					</div>
					
					<div class="col-md-6 centered">
						<h3> Deixe sua mensagem como elogio, crítica, ideias ou orçamentos de serviços. </h3>
						<h2> Obrigado, volte sempre! </h2>
					</div>
				</div>
	  
		</div>
	</section>

	<!-- Footer -->
	<footer class="container-fluid bg-4 text-center">
	  
	  <div class="row-fluid teste">
			<div class="col-md-2"></div>
			
			<div class="col-md-4" align="right">
				<h4> Contatos </h4>
				<label> Bruno Hilário </label>
				<label> Tel.: (32) 9 8423-2553 </label>
				<label>  E-mail: bruharibeiro12@gmail.com </label>
			</div>
			
			<div class="col-md-4 " align="left">
				<h4> Redes Sociais </h4>
				<a class="form-inline" href="https://br.linkedin.com/in/bruno-hilário-242429ba">
					<img src="img/linkedin.png" > <label class="control-label"> Bruno Hilário </label>
				</a>
			</div>
			
			<div class="col-md-2"></div>
	  </div>
	  
	</footer>

	</body>
	</html>
