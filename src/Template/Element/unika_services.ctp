<section id="services-section" class="page text-center">
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Serviços</h2>
                <div class="devider"></div>
                <p class="subtitle">Veja alguns de nossos serviços</p>
            </div>
        </div>
    </div>
    <div class="rotate-box-2-wrapper">
        <div class="container">
            <div class="row">
                <?php foreach($services as $service):?>				
                <div class="col-md-3 col-sm-6">
                    <a style="cursor: unset" href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                        <span class="rotate-box-icon"><i class="<?php echo $service->icon;?>"></i></span>
                        <div class="rotate-box-info">
                            <h4><?php echo $service->title;?></h4>
                            <p><?php echo $service->text;?></p>
                        </div>
                    </a>
                </div>
				<?php endforeach;?>                                          
            </div>
        </div>  
        <!--                  
            <div class="container">                    
                <div class="extra-space-l"></div>
                <div class="text-center">
                    <a class="btn btn-default btn-lg-xl" href="http://www.imransdesign.com/" target="_blank" role="button">Large Button</a>
                </div>
            </div>                     
        -->
    </div>
</section>