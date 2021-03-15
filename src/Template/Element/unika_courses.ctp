<section id="portfolio-section" class="page bg-style1" style="background-color: #f8f8f8;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio">
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Cursos</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Confira nossos cursos</p>
                            </div>
                        </div>
                    </div>
                    <div class="portfoloi_content_area" >
                        <div class="portfolio_menu" id="filters">
                            <ul>
                                <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">all</a></li>
                                <?php
                                    // <li><a href="#porfolio_menu" data-filter=".websites">websites</a></li>
                                    // <li><a href="#porfolio_menu" data-filter=".webDesign" >web design</a></li>
                                    // <li><a href="#porfolio_menu" data-filter=".appsDevelopment">apps development</a></li>
                                    // <li><a href="#porfolio_menu" data-filter=".GraphicDesign">graphic design</a></li>
                                    // <li><a href="#porfolio_menu" data-filter=".responsive">responsive</a></li>
                                ?>
                            </ul>
                        </div>
                        <div class="portfolio_content">
                            <div class="row"  id="portfolio">
                                <?php foreach($courses as $course):?>    
                                    <?php if($course->active):?>                            
                                        <div class="col-xs-12 col-sm-4 responsive">
                                            <div class="portfolio_single_content">                                            
                                                <?php echo $this->Html->image($course->photo) ?>
                                                <div>
                                                    <?= $this->Html->link(__($course->course), ['controller' => 'Courses', 'action' => 'view2', $course->id], ['target' => '_blank']) ?>
                                                    <span><?php echo $course->subtitle;?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</section>