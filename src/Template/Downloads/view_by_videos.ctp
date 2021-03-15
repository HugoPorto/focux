<?php if($download):?>
<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
        <script type="text/javascript">
            var ad_idzone = "3373779",
            ad_width = "728",
            ad_height = "90";
        </script>
        <script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
        <noscript>
            <iframe src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=3373779&output=noscript&type=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
        </noscript>
    </div>   
</div>
<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
        <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecomendados', 'action' => 'index'], ['escape' => false]) ?>
    </div>   
</div>
<div class="row">
    <div class=col-md-8>
        <div class="box box-danger" style="border-radius: 0px">
            <div class="box-body">
                <h1>Instructions</h1>
                <h3>Click at below button make download</h3>
                <?= $this->Html->link(__('Download'), $download->link, ['class' =>'btn btn-danger' ,'target' => '_blank']) ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="https://traffdaq.com/users/register/54012"><img src="//traffdaq.com/img/crtv/TRAFFDAQ-468x60-1.gif" /></a>
    </div>
</div>
<?php else:?>
<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
        <script type="text/javascript">
            var ad_idzone = "3373779",
            ad_width = "728",
            ad_height = "90";
        </script>
        <script type="text/javascript" src="https://ads.exosrv.com/ads.js"></script>
        <noscript>
            <iframe src="https://syndication.exosrv.com/ads-iframe-display.php?idzone=3373779&output=noscript&type=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
        </noscript>
    </div>   
</div>
<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
        <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecomendados', 'action' => 'index'], ['escape' => false]) ?>
    </div>   
</div>
<div class="row">
    <div class=col-md-8>
        <div class="box box-danger" style="border-radius: 0px">
            <div class="box-body">
                <h1>Info</h1>
                <h3>The donwload for this video is temporaly desactived</h3>
            </div>
        </div>
    </div>
</div>
<!-- <div class="row">
    <div class="col-md-12">
        <a href="https://traffdaq.com/users/register/54012"><img src="//traffdaq.com/img/crtv/TRAFFDAQ-468x60-1.gif" /></a>
    </div>
</div> -->
<?php endif;?>