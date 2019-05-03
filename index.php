<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.6.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script>
	<script type="text/javascript" src="js/Ubuntu_400.font.js"></script>
	<script type="text/javascript" src="js/Ubuntu_700.font.js"></script>
	<script type="text/javascript" src="js/bgSlider.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/pages.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/bg.js"></script>
	<script type="text/javascript" src="js/tabs.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

</head>

<body id="page1">
	<div class="spinner"></div>
	<div id="bgSlider"></div>
	<div class="extra">
		<div class="main">
			<div class="box">
				<!-- header -->
				<header>
					<img src="images/logo_MDC.png" alt="">
					<nav>
						<ul id="menu">
							<li><a href="#!/page_Home"><span></span><strong>Agentes Logados</strong></a></li>
                            <li><a href="#!/page_About"><span></span><strong>Comandos #</strong></a></li>
                            <li><a href="#!/page_config"><span></span><strong>Configurações</strong></a></li>
						</ul>
					</nav>
				</header>
				<!-- Começo da pagina de Home -------------------------------------------------------------------------------------------->
				<article id="content">
					<div class="ic"></div>
					<ul>
						<li id="page_Home">
							<div class="box1">
								<div class="inner">
									<a href="#" class="close" data-type="close"><span></span></a>
									<div class="wrapper pad_bot1">
										<?php
												echo '<pre>';												
												$last_line = system('rasterisk -x "queue show 10000"', $retval);
												?>
										<div class="col1">

										</div>
									</div>
						</li>


						<!-- Começo da pagina de A Empresa -------------------------------------------------------------------------------------------->
						<li id="page_About">
							<div class="box1">
								<div class="inner">
									<a href="#" class="close" data-type="close"><span></span></a>
									<h2>Comandos realizados no X-lite</h2>
									<div class="wrapper">										
										<p class="color1 pad_bot2">
											- Logar na fila: *45 <br>
											- Sair da fila: *45 <br>
											- Pausar: *46 <br>
											- Despausar: *46 <br>
											- Transferência: *2XXXX (onde XXXX é o ramal de destino).<br>											
										</p>
									</div>
									<br>
									<br>
									<!--<a href="#!/page_More" class="button1"><span></span><strong>Read More</strong></a>-->
								</div>
							</div>
                        </li>
                        
                        <!-- Começo da pagina de Configurações -------------------------------------------------------------------------------------------->
                        <li id="page_config">
							<div class="box1">
								<div class="inner">
									<a href="#" class="close" data-type="close"><span></span></a>
									<h2>Acesso a pagina de configurações</h2>
									<div class="wrapper">										
										<p class="color1 pad_bot3">
                                            Clique aqui para abrir a pagina de configurações: 
                                            <a href = "http://ipbx.mdc.com.br/ucp/">LINK</a>											
										</p>
									</div>
									<br>
									<br>
									<!--<a href="#!/page_More" class="button1"><span></span><strong>Read More</strong></a>-->
								</div>
							</div>
                        </li>
				
						<!-- Fim da pagina de A Empresa -------------------------------------------------------------------------------------------->

						<!-- Começo da pagina de Serviços -------------------------------------------------------------------------------------------->
						<li id="page_Portfolio">
							<div class="box1">
								<div class="inner">
									<a href="#" class="close" data-type="close"><span></span></a>
									<div class="wrapper tabs">
										<div class="col1">
											<h2>SERVIÇOS</h2>
											<ul class="nav">
												<li class="selected"><a
														href="#Fashion"><span></span><strong>Lavagem</strong></a></li>
												<li><a href="#Objects"><span></span><strong>Enceramento</strong></a>
												</li>
												<li><a href="#Wedding"><span></span><strong>Cristalização</strong></a>
												</li>
												<li><a
														href="#Reportage"><span></span><strong>Impermeabilização</strong></a>
												</li>
												<li><a href="#Advertising"><span></span><strong>Vidros </strong></a>
												</li>
												<li><a href="#Portrait"><span></span><strong>Hidratação</strong></a>
												</li>
											</ul>
										</div>
										<!-- Começo Lavagem -------------------------------------------------------------------------------------------->
										<div class="col2 pad_left1">
											<div class="tab-content" id="Fashion">
												<h2>Lavagem Sem Uso de Água </h2>
												<br>
												<br>
												Por meio de uma técnica especial que dispensa o uso de água e utiliza
												produtos desenvolvidos nos melhores laboratórios do mundo, o veículo
												fica limpo,encerado e protegido contra males do tempo com uma só
												aplicação.<br>
												<br>
												Este método é não-abrasivo, não prejudica a pintura, além de ser
												totalmente biodegradável.<br>
												<br>
												Após o tratamento, a pintura do veículo obterá um brilho e ainda ganhará
												uma película antiaderente e hidrorepelente.<br>
												<br>

											</div>
											<!-- Começo Enceramento -------------------------------------------------------------------------------------------->
											<div class="tab-content" id="Objects">
												<h2>Enceramento</h2>
												<br>
												<br>
												Este processo é altamente recomendado para auxiliar e aumentar a
												preservação da pintura, pois a cera forma uma película de proteção sobre
												o verniz da pintura, vedando os microporos e deixando o veículo mais
												protegido e com muito mais brilho.
												<br>
												<br>
											</div>
											<!-- Começo Cristalização -------------------------------------------------------------------------------------------->
											<div class="tab-content" id="Wedding">
												<h2>Espelhamento com Cristalização </h2>
												<br>
												<br>
												Ideal para eliminar a aspereza resultante da oxidação, e a recuperação
												de pequenos riscos e manchas superficiais a pintura, criando uma
												película protetora de alto brilho e longa duração.
												<br>
												<br>
											</div>
											<div class="tab-content" id="Portrait">
												<h2>Portrait</h2>
												<div class="wrapper">
													<figure class="left marg_right1"><a href="images/big_img1.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img1.jpg" alt=""></a></figure>
													<figure class="left"><a href="images/big_img2.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img2.jpg" alt=""></a></figure>
												</div>
												<div class="wrapper">
													<figure class="left marg_right1"><a href="images/big_img3.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img3.jpg" alt=""></a></figure>
													<figure class="left"><a href="images/big_img4.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img4.jpg" alt=""></a></figure>
												</div>
												<div class="wrapper">
													<figure class="left marg_right1"><a href="images/big_img5.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img5.jpg" alt=""></a></figure>
													<figure class="left"><a href="images/big_img6.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img6.jpg" alt=""></a></figure>
												</div>
												<div class="wrapper">
													<figure class="left marg_right1"><a href="images/big_img7.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img7.jpg" alt=""></a></figure>
													<figure class="left"><a href="images/big_img8.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img8.jpg" alt=""></a></figure>
												</div>
												<div class="wrapper">
													<figure class="left marg_right1"><a href="images/big_img9.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img9.jpg" alt=""></a></figure>
													<figure class="left"><a href="images/big_img10.jpg"
															class="lightbox-image"
															data-type="prettyPhoto[group6]"><span></span><img
																src="images/page3_img10.jpg" alt=""></a></figure>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>



						<li id="page_Services">
							<div class="box1">
								<div class="inner">
									<a href="#" class="close" data-type="close"><span></span></a>
									<div class="wrapper pad_bot3">
										<h2>Services</h2>
										<div class="col1">
											<ul class="list2">
												<li><a href="#">Temporibus autem quibusdam etaut</a></li>
												<li><a href="#">Necessitatibus saepe eveniet</a></li>
												<li><a href="#">Uteautem volupttes repudiandae molestiae</a></li>
												<li><a href="#">Gon recusandae taque earum rerum</a></li>
												<li><a href="#">Auteiciendis voluptatibus maiores</a></li>
											</ul>
										</div>
										<div class="col1 pad_left1">
											<ul class="list2">
												<li><a href="#">Eveniet et voluptates repudiandae</a></li>
												<li><a href="#">Sed ut perspiciatis unde omnis iste natus </a></li>
												<li><a href="#">Accusantium doloremque laudantium </a></li>
												<li><a href="#">Eaque ipsa quae ab illo inventore veritatis </a></li>
												<li><a href="#">Beatae vitae dictsunt explicabo</a></li>
											</ul>
										</div>
									</div>
									<h2>About My Works</h2>
									<div class="wrapper pad_bot3">
										<figure class="left marg_right1"><img src="images/page4_img1.jpg" alt="">
										</figure>
										<p class="color1 pad_bot2"><strong>Abour Recent Exhibition</strong></p>
										<p>Cupiditate noprovident similique sunt in culpa qui officia deserunt mollitia
											animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
											expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
											cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
											voluptas.</p>
									</div>
									<div class="wrapper pad_bot3">
										<figure class="left marg_right1"><img src="images/page4_img2.jpg" alt="">
										</figure>
										<p class="color1 pad_bot2"><strong>New Tecnologies</strong></p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
											praesentium voluptatum deleniti atque corrupti quos dolores et quas
											molestias excepturi sint occaecati cupiditate non provident, similique sunt
											in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
											fuga.</p>
									</div>
									<div class="wrapper">
										<figure class="left marg_right1"><img src="images/page4_img3.jpg" alt="">
										</figure>
										<p class="color1 pad_bot2"><strong>Creative Ideas</strong></p>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
											saepe eveniet ut et aut officiis debitis aut rerum necessitatibus saepe
											eveniet ut et voluptates repudiandae sint et ident, similique sunt in culpa
											qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et
											voluptates repudiandae sint et molestiae.</p>
									</div>
								</div>
							</div>
						</li>
						<li id="page_Contact">
							<!-- Começo da Pagina de Contatos ---------------------------------------------------------------------------------------------->
							<div class="box1">
								<div class="inner">
									<a href="#" class="close" data-type="close"><span></span></a>
									<div class="wrapper">
										<div class="col1">
											<h2>Contatos</h2>
											<p>Endereço:</p>
											Rua da Imaginação, 171 - Sonho<br>
											<p class="cols">Telefones:<br>
												Fax:<br>
												Email:</p>
											<p>(021) 9999-8899<br>
												(021) 3433-3433<br>
												<a href="mailto:" class="link1">mail@thomsander.com</a></p>
											9863 Mill Road, Cambridge, MG09 99HT<br>
											<p class="cols">Telephone:<br>
												Fax:<br>
												Email:</p>
											<p>+1 959 603 6035<br>
												+1 504 889 9898<br>
												<a href="mailto:" class="link1">mail@thomsander.com</a></p>
										</div>
										<div class="col1 pad_left1">
											<h2>Our Location</h2>
											<figure><iframe width="280" height="210" frameborder="0" scrolling="no"
													marginheight="0" marginwidth="0"
													src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
											</figure>
										</div>
									</div>
									<h2>Contact Form</h2>
									<form id="ContactForm">
										<div>
											<div class="wrapper">
												<span>Full Name:</span>
												<input type="text" class="input">
											</div>
											<div class="wrapper">
												<span>E-mail:</span>
												<input type="text" class="input">
											</div>
											<div class="textarea_box">
												<span>Message:</span>
												<textarea name="textarea" cols="1" rows="1"></textarea>
											</div>
											<div class="wrapper">
												<span>&nbsp;</span>
												<a href="#" class="button1"
													onClick="document.getElementById('ContactForm').reset()"><span></span><strong>Clear</strong></a>
												<a href="#" class="button1"
													onClick="document.getElementById('ContactForm').submit()"><span></span><strong>Send</strong></a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</li>
						<li id="page_More">
							<div class="box1">
								<div class="inner">
									<a href="#" class="close" data-type="close"><span></span></a>

									<h2>Read more</h2>
									<div class="wrapper pad_bot3">
										<figure class="left marg_right1"><img src="images/page4_img1.jpg" alt="">
										</figure>
										<p class="color1 pad_bot2"><strong>Et harum quidem rerum</strong></p>
										<p>Cupiditate noprovident similique sunt in culpa qui officia deserunt mollitia
											animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
											expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
											cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
											voluptas.</p>
									</div>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
										praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
										excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
										officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									<p>Occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
										mollitia animi, id est laborum et dolorum fuga.</p>
									<div class="wrapper pad_bot3">
										<figure class="left marg_right1"><img src="images/page4_img2.jpg" alt="">
										</figure>
										<p class="color1 pad_bot2"><strong>Blanditiis praesentium voluptatum</strong>
										</p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
											praesentium voluptatum deleniti iusto odio dignissimos ducimus qui atque
											corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
											non provident, similique sunt in culpa qui officia deserunt mollitia animi,
											id est laborum et dolorum fuga.</p>
									</div>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
										praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
										excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
										officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									<p>Qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et
										quas molestias excepturi sint occaecati cupiditate non provident, similique sunt
										in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
									</p>
									<p>Occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
										mollitia animi, id est laborum et dolorum fuga.</p>
								</div>
							</div>
						</li>
					</ul>
				</article>
				<!-- / content -->
			</div>
		</div>
		<div class="block"></div>
	</div>
	<div class="bg1">
		<div class="main">

		</div>
	</div>
	<script type="text/javascript">
		Cufon.now();
	</script>
	<script>
		$(window).load(function () {
			$('.spinner').fadeOut();
			$('body').css({
				overflow: 'inherit'
			})
		})
	</script>
</body>

</html>