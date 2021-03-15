<?php if($role == 'common'):?>
    <!-- <div class="row">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <script type="text/javascript">
                var ad_idzone = "3393665",
                ad_width = "728",
                ad_height = "90";
            </script>
            <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3393665&output=noscript&type=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        </div>                  
    </div> -->
<?php endif;?>

<div class="row">
    <div class="col-md-12">
        <form class="navbar-form navbar-left" role="search" action="/viewx/videos/view-by-category" method="get" style="margin:0px; padding: 0px">
            <div class="form-group">
                <select class="form-control js-example-basic-single" name="idCategory" style="width:300px; padding:0px">
                    <option value='0'>Categorys</option>
                </select>    
                <button type="submit" id="search-btn" class="btn btn-flat btn-default" 
                    style="border-radius: 4px; padding: 7px 12px; border: 1px solid #aaa"><i class="fa fa-search"></i>
                </button>     
            </div>
        </form>
    </div>
</div>

<br>

<?php if($role == 'admin' || $role == 'root'):?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <?= $this->Html->link(__('Add Video'), ['action' => 'add'], ['class' => 'btn btn-danger']) ?> 
        </div>                         
    </div>
<?php endif;?>

<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
        <h3 style="padding:0px; margin: 0px">Category Videos</h3>
        <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecomendados', 'action' => 'index'], ['escape' => false]) ?>
        <?php foreach ($categoryVideos as $categoryVideo): ?>
            <?= $this->Html->link('<span class="label label-success">'.$categoryVideo->category.'</span>', ['controller' => 'Videos', 'action' => 'viewByCategory', $categoryVideo->id], ['escape' => false]) ?>
        <?php endforeach; ?>  
    </div> 
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
        <h3 style="padding:0px; margin: 0px">Shared by root</h3>
    </div> 
    <?php foreach ($videos as $video): ?>                  
        <div class="col-md-4" style="margin-top: 5px">
            <?php if($role == 'admin' || $role == 'root'):?>
                <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id], ['class' => 'btn btn-danger']) ?>                
                    <?php if($role == 'root'):?>                    
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id), 'class' => 'btn btn-danger']) ?>
                    <?php endif;?>
                </div>
            <?php endif;?>
            <div class="box-body" style="padding:0px">                    
                <div class="col-md-12" style="padding: 0px">
                    <?php
                        echo $this->Html->link(
                            $this->Html->image($video->photo, ['class' => 'img-responsive']),
                            ['action' => 'view', $video->id],
                            ['escape' => false]
                        );
                    ?>                            
                </div>
            </div>
            <div class="box-header" style="margin-top: 0px; padding:0px">
                <p style="font-size: 12px" class="box-title"><b><?= h($video->title);?></b></p>
                <?php if($video->link_share):?>
                    <p style="margin-bottom: 0px">
                        <a href="<?= $video->link_share;?>" target="_blank"><?= $video->description;?></a>
                    </p>
                <?php endif;?>
                <span class="label label-danger" style="margin-bottom: 10px"><?= h($video->created) ?></span>
                <br>
                <br>
            </div>           
        </div>                     
    <?php endforeach; ?>
</div>
<?php if($role == 'common'):?>
    <div class="row">
        <div class="col-md-12">
        <script type="text/javascript">
        var ad_idzone = "3406013",
            ad_width = "468",
            ad_height = "60";
        </script>
        <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
        <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3406013&output=noscript&type=468x60" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        </div>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <h1>Recommendeds</h1>
    </div>
    <?php foreach ($videosRecomendados as $vr): ?>                  
        <div class="col-md-4" style="margin-top: 5px">
            <?php if($role == 'admin' || $role == 'root'):?>
                <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vr->video->id], ['class' => 'btn btn-danger']) ?>                
                    <?php if($role == 'root'):?>                    
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vr->video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vr->video->id), 'class' => 'btn btn-danger']) ?>
                    <?php endif;?>
                </div>
            <?php endif;?>
            <div class="box-body" style="padding:0px">                
                <div class="col-md-12" style="padding: 0px">
                    <?php
                        echo $this->Html->link(
                            $this->Html->image($vr->video->photo, ['class' => 'img-responsive']),
                            ['action' => 'view', $vr->video->id],
                            ['escape' => false]
                        );
                    ?>                    
                </div>                        
            </div>
            <div class="box-header" style="margin-top: 0px; padding:0px">
                <p style="font-size: 12px" class="box-title"><b><?= h($vr->video->title); ?></b></p>
                <?php if($vr->video->link_share):?>
                    <p style="margin-bottom: 0px">
                        <a href="<?= $vr->video->link_share;?>" target="_blank"><?= $vr->video->description;?></a>
                    </p>
                <?php endif;?>
                <span class="label label-danger"><?= h($vr->video->created) ?></span>
                <br>
                <br>
            </div>
        </div>                     
    <?php endforeach; ?>
</div>

<div class="row">
    <div class="col-md-12">
        <h1>Sponsoreds</h1>
    </div>
    <?php foreach ($videosSponsoreds as $vs): ?>                  
        <div class="col-md-4" style="margin-top: 5px">
            <?php if($role == 'admin' || $role == 'root'):?>
                <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vs->video->id], ['class' => 'btn btn-danger']) ?>                
                    <?php if($role == 'root'):?>                    
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vs->video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vs->video->id), 'class' => 'btn btn-danger']) ?>
                    <?php endif;?>
                </div>
            <?php endif;?>
            <div class="box-body" style="padding:0px">                
                <div class="col-md-12" style="padding: 0px">
                    <?php
                        echo $this->Html->link(
                            $this->Html->image($vs->video->photo, ['class' => 'img-responsive']),
                            ['action' => 'view', $vs->video->id],
                            ['escape' => false]
                        );
                    ?>                    
                </div>                        
            </div>
            <div class="box-header" style="margin-top: 0px; padding:0px">
                <p style="font-size: 12px" class="box-title"><b><?= h($vs->video->title); ?></b></p>
                <?php if($vs->video->link_share):?>
                    <p style="margin-bottom: 0px">
                        <a href="<?= $vs->video->link_share;?>" target="_blank"><?= $vs->video->description;?></a>
                    </p>
                <?php endif;?>
                <span class="label label-danger"><?= h($vs->video->created) ?></span>
                <br>
                <br>
            </div>
        </div>                     
    <?php endforeach; ?>
</div>

<div class="row">
    <div class="col-md-12">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
    </div>
</div>
<?php if($role == 'common'):?>
    <div class="row">
        <div class="col-md-12">
            <iframe data-aa="1174818" src="//ad.a-ads.com/1174818?size=728x90" scrolling="no" style="width:728px; height:90px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
        </div>
    </div>
<?php endif;?>
<?php if($role == 'common'):?>
    <div class="row">
        <div class="col-md-12">
        <script type="text/javascript">
        var ad_idzone = "3399001",
            ad_width = "468",
            ad_height = "60";
        </script>
        <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
        <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3399001&output=noscript&type=468x60" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        </div>
    </div>
<?php endif;?>