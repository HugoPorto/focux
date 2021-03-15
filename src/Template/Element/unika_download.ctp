<section id="prices-section" class="page">
    <div class="cta">
        <div class="container">
            <div class="row">            
                <?php foreach($downloads as $download):?>
                <div class="col-md-9">
                    <h1><?php echo $download->title;?></h1>
                    <p><?php echo $download->text;?></p>
                </div>                
                <div class="col-md-3">
                    <a class="btn btn-default btn-lg" href="<?php echo $download->link;?>" target="_blank" role="button">Download</a>
                    <div class="cta-btn wow bounceInRight" data-wow-delay="0.4s">
                        <?php 
                        // $this->Html->link(__('Download'), 
                        //    ['controller' => 'Googlepublicitys', 'action' => 'showpublicity', $download->id],
                        //    ['class' => 'btn btn-default btn-lg', 'target' => '_blank', 'role' => 'buttom']) 
                        ?>                        
                    </div>
                </div>
				<?php endforeach;?>
            </div>
        </div>
    </div>
</section>