<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
        <link rel="stylesheet" href="CSS/W3School.css">
        <script src="./JS/FunctionBaner.js"></script>
    </head>
	
    <body>
        <header>
            
            <a href="login.php "><div class="acesso"><img src="./IMG/acesso.png"/><p>Área do Cliente</p></div></a>
                    <nav>
                        <ul>
                            <li><a onclick="menuLink('Produtos')">PRODUTOS</a></li>
                            <li><a onclick="menuLink('PrincipaisEscolhas')">PRINCIPAIS ESCOLHAS</a></li>
                            <li><a onclick="menuLink('cliente')">CLIENTES</a></li>
                            <li><a onclick="menuLink('Localizacao')">LOCALIZAÇÃO</a></li>                              
                        </ul>                         
                    </nav>               
                <div class="content">
                    <img class="mySlides" src="./IMG/banner.jpeg" style=" width:100%; height: 77.2vh; background-repeat: round;">
                    <img class="mySlides" src="./IMG/banner2.jpg" style=" width:100%; height: 77.2vh; background-repeat: round;">
                    <img class="mySlides" src="./IMG/banner3.jpg" style=" width:100%; height: 77.2vh; background-repeat: round;">
                    <img class="mySlides" src="./IMG/banner4.jpg" style=" width:100%; height: 77.2vh; background-repeat: round;">
                    
                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>                            
        </header>
        <section>
            <section class="Produtos">
                <h1> PRODUTOS </h1>
                <hr style="margin: 0% 0% 0% 43%; background-color: #00008B; width: 14%; height: 3px;">
                <div class="content_div">
					<div class="Rtpr1">
						<img src="./IMG/relogio1.jpg"/>
						<figcaption id="Rtpr1">
							<h3>Controlador</h3>
							<a href="#"><img src="./IMG/comprar-agora.png"/></a>
						</figcaption>
					</div>
					<div class="Rtpr2">
						<img src="./IMG/tranca 2.JPG"/>
						<figcaption id="Rtpr2">
							<h3>Tranca Eletrônica</h3>
							<a href="#"><img src="./IMG/comprar-agora.png"/></a>
						</figcaption>
					</div>
					<div class="Rtpr3">
						<img src="./IMG/Catraca_clieite.jpg" style="width: 170px; height: 170px; margin-left: 12%;"/>
						<figcaption id="Rtpr3">
							<h3>Catracas</h3>
							<a href="#"><img src="./IMG/comprar-agora.png"/></a>
						</figcaption>
					</div>
					<div class="Rtpr4">
						<img src="./IMG/gsproxct_1.png"/>
						<figcaption id="Rtpr4">
							<h3>Pinel de Touch</h3>
							<a href="#"><img src="./IMG/comprar-agora.png"/></a>
						</figcaption>
					</div>
				</div>
				
            </section>
            <div class="PrincipaisEscolhas">
                <h1>PRINCIPAIS ESCOLHAS</h1>
               <hr style="margin: 0% 0% 0% 43%; background-color: #00008B; width: 14%; height: 3px;">
                <div class="content_div">
					<div class="Rtpe1">
						<img src="./IMG/catraca 3.JPG"/>
						<figcaption id="Rtpe1">
							<h2>Catraca <strong>V7-CODE</strong> e <br><p>biometria com Software Completo</p></h2>
							<a href="#"><img src="./IMG/comprar-agora.png"/></a>
						</figcaption>
					</div>
					<div class="Rtpe2">
						<img src="./IMG/controle de acesso 2.JPG"/>
						<figcaption id="Rtpe2">
							<h2>Controle de Acesso <strong>Biofinger</strong> Biometria/Senha/Cartão</h2>
							<a href="#"><img src="./IMG/comprar-agora.png"/></a>
						</figcaption>
					</div>
				</div>
            </div>
            <div class="cliente">
                <h1>CLIENTES <strong>TECHSCONTROL</strong></h1>
                <hr style="margin: 0% 0% 0% 43%; background-color: #00008B; width: 14%; height: 3px;">
                <div class="content_div">
					<div class="Rtcl1">                    
						<img src="./IMG/ecovias.jpg" style=" width: 100%; height: 75%; margin-top: 13%;"/>                    
					</div>
					<div class="Rtcl2">                    
						<img src="./IMG/copagaz.png" style=" width: 100%; height: 90%;"/>                    
					</div>
					<div class="Rtcl3">                     
						<img src="./IMG/bv_financeira.png" style=" width: 95%; height: 70%; margin-top: 15%; margin-left: 2%;"/>                   
					</div>
					<div class="Rtcl4">                     
						<img src="./IMG/cemig.png" style=" width: 100%; height: 85%; margin-top: 5%;"/>                    
					</div>
					<div class="Rtcl5">                     
						<img src="./IMG/cielo.jpg" style=" width: 100%; height: 85%; margin-top: 5%;"/>                    
					</div>
					<div class="Rtcl6">
						<img src="./IMG/oticas diiniz.png" style=" width: 100%; height: 100%;"/>                    
					</div>
				</div>
				
            </div>
            <div class="Localizacao">
                    <h1>LOCALIZAÇÃO</h1>
                    <hr style="margin: 0% 0% 0% 43%; background-color: #00008B; width: 14%; height: 3px;">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.8026253560706!2d-46.720515584978706!3d-23.539600366674172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5628057cf61b%3A0xac5e3de9200c69ef!2sAv.%20Di%C3%B3genes%20Ribeiro%20de%20Lima%2C%202346%20-%20Alto%20de%20Pinheiros%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005458-001!5e0!3m2!1spt-BR!2sbr!4v1600837604888!5m2!1spt-BR!2sbr" 
                            width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
        <footer>
            <div class="rdppt1">
                <div id="log">
                    <img src="./IMG/projeto-logo.png" style="width: 310px; height: 230px; float: left; margin: 0px 0px 0px 20px;">
                </div>
                <div class="rdpbr1">
                    <div class="list1">
                    <label><strong>INSTITUCIONAL</strong></label>
                        <ol class="ol1">
                            <li><a id="lk" href="#">Home</a></li>
                            <li><a id="lk" href="#">Solicite um Orçamento</a></li>
                            <li><a id="lk" href="#">Suporte Técnico</a></li>
                            <li><a id="lk" href="#">Downloads</a></li>
                        </ol>
                        <hr style="margin: -13% 0% 0% 30%; background-color: #00008B; width: 2px; height: 150px; float: left;">
                    </div>
                </div>
                <div class="rdpbr2">
                    <div class="list2">
                        <label><strong>PRODUTOS</strong></label>
                            <ol class="ol2">
                                <li><a id="lk" href="#">Controle de Ponto</a></li>
                                <li><a id="lk" href="#">Controle de Acesso</a></li>
                                <li><a id="lk" href="#">Catracas Eletrônicas</a></li>
                                <li><a id="lk" href="#">Trancas Eletronicas</a></li>
                            </ol>
                        <hr style="margin: -17% 0% 0% 95%; background-color: #00008B; width: 2px; height: 150px;">
                    </div>
                </div>
                <div class="rdpbr3">
                    <div class="list3">
                        <label><strong>NEWSLETTER</strong></label>
                        <p class="text">Receba novidades por E-Mail</p>
                        <div class="Newsletter">
                            <input type="text" id="txtNewsletter" placeholder="Buscar..."/>
                                <button id="btnNewsletter">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rdppt2">
                <div class="autor">
                    <span>Desenvolvido por: <strong>TechScontroL</strong> &#0169;</span>
                    </div>
                <div class="rdpend">
                    <div class="dados1">
                        <label><strong><div id="palavra1">CENTRAL DE VENDAS<br></div>0800 008 0088</strong></label><br>
                    </div>
                    <div class="dados2">
                        <label><strong>Mais Informações através do<br> <div id="palavra2">Whatsapp</div></strong></label>
                        <img src="./IMG/whatsapp.png" style="width: 100px; height: 100px; margin: -5% 1% 1% 2%;">
                    </div>
                    <div class="dados3">
                        <label><strong>Nos siga também nas <div id="palavra3">Redes Sociais</div></strong></label>
                        <img src="./IMG/instagram.png" style="width: 50px; height: 50px; margin: 1% 1% 1% 27%; float: left;">
                        <img src="./IMG/facebook.png" style="width: 52px; height: 52px; margin: 0.7% 1% 1% 2%; float: left;">
                        <img src="./IMG/twitter.png" style="width: 55px; height: 58px; margin: 0% 1% 1% 1%; float: left;">
                    </div>
                </div>
            </div>
        </footer>
		
        <a class="voltarTopo" onclick="voltarTopo()"><img src="./IMG/voltar_topo.png" style="width: 50px; height: 50px;"></a>
        <?php
        
        ?>
    </body>
</html>