<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(unika/img/map-bg.jpg);">
    <div class="cover"></div>

    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Contatos</h2>
                <div class="devider"></div>
                <!-- <p class="subtitle">All to contact us</p> -->
            </div>
        </div>
    </div>
    
    <div class="contact wow bounceInRight" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">
            
                <div class="col-sm-6">
                    <div class="contact-info">
                        <!-- <h4>Our Address</h4> -->
                        <ul class="contact-address">
                            <!-- <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; 100 Limpbiscayne Blvd. (North) 17st Floor ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New World Tower New York ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New York, USA, 33148</li> -->
                            <!-- <li><i class="fa fa-phone"></i>&nbsp; 1 -234 -456 -7890</li> -->
                            <!-- <li><i class="fa fa-print"></i>&nbsp; 1 -234 -456 -7890</li> -->
                            <li><i class="fa fa-envelope"></i> duvidas@focux.me</li>
                            <li><i class="fa fa-envelope"></i> suporte@focux.me</li>
                            <li><i class="fa fa-envelope"></i> financeiro@focux.me</li>
                            <!-- <li><i class="fa fa-skype"></i> Unika-Design</li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact-form">
                        <h4>Solicitar Orçamento</h4>
                        <form role="form" method="post" action="/orcamentos/add">
                        <!-- <form role="form" method="post" action="/focux/home/orcamentos/add"> -->
                            <input type="hidden" name="status" value="1" />
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control input-lg" placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="sobrenome" class="form-control input-lg" placeholder="Sobrenome" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-lg" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control input-lg" placeholder="Telefone" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="projeto" class="form-control input-lg" placeholder="Projeto" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg" name="detalhes" rows="5" placeholder="Detalhes" required></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Enviar</button>
                        </form>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</section>