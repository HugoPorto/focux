<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $this->element('corlate_head'); ?>
<body class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +55 91 98917-7706 | +55 91 98048-6717 | +55 91
                                98474-4021</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCx9lGClnh0rO1g_R8Rz_GYg?view_as=subscriber" target="__blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logosite.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/home">Home</a></li>
                        <li><a href="/about">Sobre Nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Sobre Nós</h2>
				<p class="lead">
                    A Botmida é uma empresa que atua nos setores de comunicação visual, software e metalurgia, ela funciona como um conjunto de engrenagens de um motor que trabalha para construir o futor de seus associados e clientes, através de premissas que incentivam a sustentabilidade dos seus processos produtivos.
                </p>
			</div>
			<div class="skill-wrap clearfix">
				<div class="center wow fadeInDown">
					<h2>Nossas Skill</h2>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="css-skill">                               
								<p><em>80%</em></p>
								<p>Audiovisual</p>
							</div>
						</div>
					</div>
					 <div class="col-sm-4">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="css-skill">                                 
								<p><em>80%</em></p>
								<p>Software</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                  
								<p><em>80%</em></p>
								<p>Metalurgia</p>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
    </section>
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2020 <a target="_blank" href="http://shapebootstrap.net/"
                        title="Free Twitter Bootstrap WordPress Themes and HTML templates">Botmidia</a>. Todos os direitos reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sobre Nós</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php echo $this->element('corlate_scripts'); ?>
</body>

</html>