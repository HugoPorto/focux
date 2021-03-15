<div class="page-header-wrapper">
    <div class="container">
        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
            <h4>Skills</h4>
        </div>
    </div>
</div>

<div class="our-skills">
    <div class="container">
        <div class="row">
            <?php foreach($skills as $skill):?>
            <div class="col-sm-6">
                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                    <div class="progress-lebel">
                        <h6><?php echo $skill->title; ?></h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill->percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill->percent; ?>%">
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>     
        </div>
    </div>
</div>