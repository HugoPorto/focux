<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html lang="pt-br">
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
                                <li><a href="https://www.facebook.com/Botmidia-Solutions-108882184106415/?modal=admin_todo_tour" target="__blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/botmidia" target="__blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/botmidia-solutions-3436aa1a6/" target="__blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://dribbble.com/Botmidia" target="__blank"><i class="fab fa-dribbble-square"></i></a></li>
                                <li><a href="https://www.instagram.com/botmidiasolutions/" target="__blank"><i class="fab fa-instagram"></i></a></li>
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
                    <a class="navbar-brand" href="/home"><img src="img/logosite.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/home">Home</a></li>
                        <li><a href="/about">Sobre N??s</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Botmidia: um mar de possibilidades!</h1>
                                    <h2 class="animation animated-item-2">Comunica????o ?? tecnologia ?? a forma como atuamos, experimente alguns de nossos servi??os e produtos. Estamos comprometidos em ajudar voc?? a crescer.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Vamos deixar o Botmidia ligado pra voc??!</h1>
                                    <h2 class="animation animated-item-2">
                                        Comprometidos com os enfrentamentos que existem 
                                        no que diz respeito as dificuldades do 
                                        empreendedor em todos os momentos.
                                        Nos colocamos a dispo????o do seu 
                                        neg??cio da forma mais comprometida poss??vel.
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Nenhuma caminho ?? longo demais quando a Botmidia nos acompanha!</h1>
                                    <h2 class="animation animated-item-2">
                                        N??o tenha d??vidas de que n??s iremos fazer o 
                                        melhor pra ajudar voc?? com seus objetivos de curto, m??dio e longo prazo.
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Servi??os</h2>
                <p class="lead"> Veja abaixo alguns de<br> nossos servi??os</p>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fas fa-print"></i>
                            <h2>Impress??o Digital</h2>
                            <h3>
                                Podendo ser feitas impress??es com tintas 
                                Eco-Solventes ou Sublim??ticas em vinis, 
                                adesivos, lonas, pap??is, PVC dentre outros materiais.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fas fa-print"></i>
                            <h2>Impress??es para escrit??rios</h2>
                            <h3>Imprima mapas, desenhos
                                t??cnicos e renderiza????es com qualidade
                                de linha precisa e texto n??tido,
                                em cores e em preto e branco.
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fas fa-print"></i>
                            <h2>Impress??es gr??ficas de alto impacto</h2>
                            <h3>
                                Crie aplica????es de alta qualidade e
                                visualmente atraentes ??? incluindo sinaliza????o,
                                cartazes e banners de POP ??? com
                                custo acess??vel e sem esfor??o.
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fas fa-print"></i>
                            <h2>Impress??es de produ????o</h2>
                            <h3>
                                Gerencie suas mais altas demandas de
                                impress??o, de desenhos CAD simples em
                                preto e branco a complexas imagens
                                coloridas, com velocidade e qualidade.
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-print"></i>
                            <h2>Impress??es fotogr??ficas profissionais</h2>
                            <h3>
                                Ofere??a impress??es profissionais
                                impressionantes, com qualidade
                                fotogr??fica e de galeria,
                                com a mais ampla gama
                                de cores e uniformidade
                                de brilho superior.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fas fa-laptop"></i>
                            <h2>Software</h2>
                            <h3>
                            Desenvolvimento de aplicativos m??veis, 
                            sistemas web e sistemas desktop, 
                            usamos as tecnologias mais recentes 
                            para atender da melhor maneira poss??vel 
                            a sua necessidade, e o melhor de tudo ?? que temos 
                            pre??os acess??veis para voc?? e seu neg??cio.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fas fa-laptop"></i>
                            <h2>Metalurgia</h2>
                            <h3>Fabricamos estruturas met??licas, 
                                tais como telhados retr??teis, 
                                estruturas pra outdors, 
                                caldeiras, estruturas para ind??strias, entre outros.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Trabalhos Recentes</h2>
                <p class="lead">Veja alguns <br> de nossos trabalhos</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="corlate/images/portfolio/recent/item1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Aplicativo de NCM'S</a> </h3>
                                <p>Aplicativo de consulta para profissionais da ??rea cont??bil.</p>
                                <a class="preview" href="corlate/images/portfolio/full/item1.png" rel="prettyPhoto"><i
                                        class="fa fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="corlate/images/portfolio/recent/item2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Aplicativo de Salmos</a></h3>
                                <p>Aplicativo para leitura de salmos nas horas vagas.</p>
                                <a class="preview" href="corlate/images/portfolio/full/item2.png" rel="prettyPhoto"><i
                                        class="fa fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="corlate/images/portfolio/recent/item3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Aplicativo de Calculadora de IMC </a></h3>
                                <p>Aplicativo de calculadora de ??ndice de massa corporal.</p>
                                <a class="preview" href="corlate/images/portfolio/full/item3.png" rel="prettyPhoto"><i
                                        class="fa fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="corlate/images/portfolio/recent/item4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Artes para fachadas</a></h3>
                                <p>Artes gr??ficas para fachadas de empresas.</p>
                                <a class="preview" href="corlate/images/portfolio/full/item4.png" rel="prettyPhoto"><i
                                        class="fa fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="corlate/images/portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Metalurgia</a></h3>
                                <p>Contru????o de telhado retr??til de uma folha.</p>
                                <a class="preview" href="corlate/images/portfolio/full/item5.png" rel="prettyPhoto"><i
                                        class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="corlate/images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Metalurgia</a></h3>
                                <p>Constru????o de telhado retr??til de duas folhas.</p>
                                <a class="preview" href="corlate/images/portfolio/full/item6.png" rel="prettyPhoto"><i
                                        class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="corlate/images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Comunica????o Visual</a></h3>
                                <p>Constru????o de telhado retr??til de duas folhas.</p>
                                <a class="preview" href="corlate/images/portfolio/full/item6.png" rel="prettyPhoto"><i
                                        class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Caracter??sticas</h2>
                <p class="lead">Veja abaixo <br> algumas de nossas Caracter??sticas</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="corlate/images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Inova????o</h3>
                            <p>
                                Estamos sempre em busca de novas formas de atender voc??, 
                                para isso investimos em aprendizado cont??nuo 
                                e em novas tecnologias que possibilitem a n??s oferecer 
                                sempre o melhor servi??o com a melhor qualidade.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="corlate/images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Processos</h3>
                            <p> 
                                Nossos processo s??o baseados na constru????o de 
                                cronogramas eficientes para que possamos entregar o 
                                servi??os no melhor tempo poss??vel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="corlate/images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Ajustes</h3>
                            <p>
                                Nos comprometemos com o bm ajuste dos nossos servi??os, 
                                para que voc?? tenha os melhores resultados na utiliza??????o dos nossos produtos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInDown">
                    <div class="skill">
                        <h2>Skills</h2>
                        <p>Conhe??a algumas de nossas skills.</p>
                        <div class="progress-wrap">
                            <h3>Audiovisual</h3>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="bar-width">80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3>Software</h3>
                            <div class="progress">
                                <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 80%">
                                    <span class="bar-width">80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3>Metalurgia</h3>
                            <div class="progress">
                                <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 80%">
                                    <span class="bar-width">80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Parceiros</h2>
                <p class="lead">Veja abaixo alguns de  <br> nossos parceiros.</p>
            </div>
            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="300ms" src="corlate/images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms" src="corlate/images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="900ms" src="corlate/images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="1200ms" src="corlate/images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="1500ms" src="corlate/images/partners/partner5.png"></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Tem uma pergunta ou precisa de um or??amento personalizado?</h2>
                            <p>Ligue para +55 91 98917-7706 | +55 91 98048-6717 | +55 91 98474-4021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-container-754583" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="myModalLabel">
                        Aten????o!
                    </h2> 
                </div>
                <div class="modal-body">
                    Site em constru????o!
                </div>
                <div class="modal-footer">		
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>

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
                        <li><a href="#">Sobre N??s</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php echo $this->element('corlate_scripts'); ?>
    <script>
    $(document).ready(function () {
        $('#modal-container-754583').modal();
    });
    </script>
</body>
</html>