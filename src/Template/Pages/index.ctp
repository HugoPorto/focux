<?php
$this->layout = false;
?>
<!doctype html>
<html lang="pt-br">
<?php echo $this->element('unika_head'); ?>
<body data-spy="scroll" data-target="#main-navbar">
    <div class="page-loader"></div>
    <div class="body">
        <?php echo $this->element('unika_header');?>
        <?php echo $this->element('unika_carousel');?>
        <?php //echo $this->element('unika_about');?>
        <?php echo $this->element('unika_download');?>
        <?php //echo $this->element('unika_services');?>
        <?php //echo $this->element('unika_reviews');?>
        <?php echo $this->element('unika_courses');?>
        <?php //echo $this->element('unika_facts');?>
        <?php //echo $this->element('unika_team');?>
        <?php //echo $this->element('unika_partners');?>
        <?php echo $this->element('unika_prices');?>
        <?php //echo $this->element('unika_join');?>
        <?php echo $this->element('unika_contacts');?>
        <?php echo $this->element('unika_footer');?>
        <?php //echo $this->element('unika_modals');?>
        <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a>
    </div>
    <?php echo $this->element('unika_scripts');?>
</body>
</html>