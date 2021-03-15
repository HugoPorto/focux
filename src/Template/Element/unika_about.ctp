<section id="about-section" class="page bg-style1">
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>Sobre</h2>
                <div class="devider"></div>
                <p class="subtitle">Um pouco sobre nós</p>
            </div>
        </div>
    </div>

    <div class="rotate-box-1-wrapper">
        <div class="container">
            <div class="row">               

                <?php foreach($mainAbouts as $about):?>
                <div class="col-md-3 col-sm-6">
                    <a style="cursor: unset" href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                        <span class="rotate-box-icon"><i class="<?php echo $about->icon;?>"></i></span>
                        <div class="rotate-box-info">
                            <h4><?php echo $about->title;?></h4>
                            <p><?php echo $about->text;?></p>
                        </div>
                    </a>
                </div>
				<?php endforeach;?>
            </div>
        </div>
    </div>
    
    <div class="extra-space-l"></div>
    <?php //echo $this->element('unika_skills');?>
</section>