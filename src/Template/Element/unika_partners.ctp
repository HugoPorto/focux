<section id="partners-section" style="background-color: white">
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Parceiros</h2>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="owl-partners" class="owl-carousel">
            <?php foreach($partners as $partner):?>
            <a href="<?php echo $partner->link;?>" target="_blank">
                <?php echo $this->Html->image($partner->photo) ?>
            </a>
            <?php endforeach;?>
        </div>
    </div>
</section>