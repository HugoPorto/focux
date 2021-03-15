<?php
$this->layout = false;
?>
<!doctype html>
<html lang="pt-br">
<?php echo $this->element('unika_head'); ?>
<body data-spy="scroll" data-target="#main-navbar">
    <div class="page-loader"></div>
    <div class="body">
        <?php echo $this->element('unika_header_course_view');?>
        <section id="prices-section" class="page">
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2 style="padding-top:50px">Detalhes do Curso</h2>
                    </div>
                </div>
            </div>

            <div class="extra-space-l"></div>
            <div class="prices">
                <div class="container">
                    <div class="row">
                        <div class="price-box col-sm-6 col-md-12 wow flipInY" data-wow-delay="0.3s">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h3><?= h($course->course) ?></h3>
                                </div>
                                <div class="panel-body text-center">
                                    <p class="lead"><strong>R$<?= h($course->value) ?></strong></p>
                                </div>
                                <ul class="list-group text-center">
                                    <li class="list-group-item">1 Usuário Admin</li>
                                    <li class="list-group-item">Aplicação customizada não incluído</li>
                                    <li class="list-group-item">Suporte 12/7</li>
                                </ul>
                                <div class="panel-footer text-center">
                                    <a class="btn btn-default" href="#">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="extra-space-l"></div>
        </section>
        <?php echo $this->element('unika_contacts');?>
        <?php echo $this->element('unika_footer');?>
        <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a>
    </div>
    <?php echo $this->element('unika_scripts');?>
</body>
</html>