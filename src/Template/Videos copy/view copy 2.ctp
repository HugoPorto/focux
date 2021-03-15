<?php if($role == 'common'):?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
            <script type="text/javascript">
            var ad_idzone = "3398917",
                ad_width = "728",
                ad_height = "90";
            </script>
            <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3398917&output=noscript&type=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        </div>   
    </div>
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
<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
        <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecomendados', 'action' => 'index'], ['escape' => false]);?>
    </div>   
</div>

<div class="row">
    <div class=col-md-8 style="margin-top: 5px">
        <div class="video-container">
            <?= $video->video;?>
        </div>
        <div class="box box-danger" style="border-radius: 0px">
            <div class="box-body">               
                <h3 style="margin-top:10px">                    
                    <a href="<?= $video->link_share;?>" target="_blank"><?= $video->description;?></a>
                </h3>
                <span class="label label-danger"><?= h($video->created) ?></span>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class=col-md-4 style="overflow: auto; height: 570px;">
        <?php if($role == 'common'):?>
            <script type="text/javascript">
            var ad_idzone = "3398911",
                ad_width = "250",
                ad_height = "250";
            </script>
            <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3398911&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        <?php endif;?>

        <?php foreach ($videosRecomendados as $vr): ?>                  
            <div class="col-md-12" style="margin-top: 5px; padding: 0px">  
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

        <?php if($role == 'common'):?>
            <script type="text/javascript">
            var ad_idzone = "3406021",
                ad_width = "250",
                ad_height = "250";
            </script>
            <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3406021&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        <?php endif;?>

        <?php foreach ($videosNode as $vn): ?>                         
            <div class="col-md-12" style="margin-top: 5px; padding: 0px">  
                <?php if($role == 'admin' || $role == 'root'):?>
                    <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vn->id], ['class' => 'btn btn-danger']) ?>                
                        <?php if($role == 'root'):?>                    
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vn->id), 'class' => 'btn btn-danger']) ?>
                        <?php endif;?>
                    </div>
                <?php endif;?>
                <div class="box-body" style="padding:0px">                
                    <div class="col-md-12" style="padding: 0px">
                        <?php
                            echo $this->Html->link(
                                $this->Html->image($vn->photo, ['class' => 'img-responsive']),
                                ['action' => 'view', $vn->id],
                                ['escape' => false]
                            );
                        ?>                    
                    </div>                        
                </div>
                <div class="box-header" style="margin-top: 0px; padding:0px">
                    <p style="font-size: 12px" class="box-title"><b><?= h($vn->title); ?></b></p>
                    <?php if($vn->link_share):?>
                        <p style="margin-bottom: 0px">
                            <a href="<?= $vn->link_share;?>" target="_blank"><?= $vn->description;?></a>
                        </p>
                    <?php endif;?>
                    <span class="label label-danger"><?= h($vn->created) ?></span>
                    <br>
                    <br>
                </div>
            </div>                   
        <?php endforeach; ?>


        <?php if($role == 'common'):?>
            <script type="text/javascript">
                var ad_idzone = "3427587",
                    ad_width = "250",
                    ad_height = "250";
            </script>
            <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3427587&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        <?php endif;?>

        <?php foreach ($videosSwift as $vs): ?>                         
            <div class="col-md-12" style="margin-top: 5px; padding: 0px">  
                <?php if($role == 'admin' || $role == 'root'):?>
                    <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vs->id], ['class' => 'btn btn-danger']) ?>                
                        <?php if($role == 'root'):?>                    
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vs->id), 'class' => 'btn btn-danger']) ?>
                        <?php endif;?>
                    </div>
                <?php endif;?>
                <div class="box-body" style="padding:0px">                
                    <div class="col-md-12" style="padding: 0px">
                        <?php
                            echo $this->Html->link(
                                $this->Html->image($vs->photo, ['class' => 'img-responsive']),
                                ['action' => 'view', $vs->id],
                                ['escape' => false]
                            );
                        ?>                    
                    </div>                        
                </div>
                <div class="box-header" style="margin-top: 0px; padding:0px">
                    <p style="font-size: 12px" class="box-title"><b><?= h($vs->title); ?></b></p>
                    <?php if($vs->link_share):?>
                        <p style="margin-bottom: 0px">
                            <a href="<?= $vs->link_share;?>" target="_blank"><?= $vs->description;?></a>
                        </p>
                    <?php endif;?>
                    <span class="label label-danger"><?= h($vs->created) ?></span>
                    <br>
                    <br>
                </div>
            </div>                   
        <?php endforeach; ?>

        <?php if($role == 'common'):?>
            <script type="text/javascript">
            var ad_idzone = "3427589",
                ad_width = "250",
                ad_height = "250";
            </script>
            <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3427589&output=noscript&type=250x250" width="250" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        <?php endif;?>

        <?php foreach ($videosJS as $vjs): ?>                         
            <div class="col-md-12" style="margin-top: 5px; padding: 0px">  
                <?php if($role == 'admin' || $role == 'root'):?>
                    <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vjs->id], ['class' => 'btn btn-danger']) ?>                
                        <?php if($role == 'root'):?>                    
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vjs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vjs->id), 'class' => 'btn btn-danger']) ?>
                        <?php endif;?>
                    </div>
                <?php endif;?>
                <div class="box-body" style="padding:0px">                
                    <div class="col-md-12" style="padding: 0px">
                        <?php
                            echo $this->Html->link(
                                $this->Html->image($vjs->photo, ['class' => 'img-responsive']),
                                ['action' => 'view', $vjs->id],
                                ['escape' => false]
                            );
                        ?>                    
                    </div>                        
                </div>
                <div class="box-header" style="margin-top: 0px; padding:0px">
                    <p style="font-size: 12px" class="box-title"><b><?= h($vjs->title); ?></b></p>
                    <?php if($vjs->link_share):?>
                        <p style="margin-bottom: 0px">
                            <a href="<?= $vjs->link_share;?>" target="_blank"><?= $vjs->description;?></a>
                        </p>
                    <?php endif;?>
                    <span class="label label-danger"><?= h($vjs->created) ?></span>
                    <br>
                    <br>
                </div>
            </div>                   
        <?php endforeach; ?>

        <?php if($role == 'common'):?>
        <!--
            <script type="text/javascript">
            var ad_idzone = "3428935",
                ad_width = "468",
                ad_height = "60";
            </script>
            <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3428935&output=noscript&type=468x60" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        -->
        <?php endif;?>
        
    </div>
</div>
<?php if($role == 'common'):?>
    <div class="row">
        <div class="col-md-12">
            <script type="text/javascript">
            var ad_idzone = "3406023",
                ad_width = "468",
                ad_height = "60";
            </script>
            <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3406023&output=noscript&type=468x60" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        </div>
    </div>
<?php endif;?>
<div class="row">
    <div class="col-md-12">
        <h1>Related Videos</h1>
    </div>
    <?php foreach ($videosByCategory as $video): ?>                  
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
                <span class="label label-danger"><?= h($video->created) ?></span>
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
            var ad_idzone = "3428935",
                ad_width = "468",
                ad_height = "60";
            </script>
            <script type="text/javascript" src="https://a.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3428935&output=noscript&type=468x60" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        </div>
    </div>
<?php endif;?>

<div class="row">
    <div class="col-md-12">
        <h1>Recommendeds Videos PHP</h1>
    </div>
    <?php foreach ($videosPHP as $vPHP): ?>                  
        <div class="col-md-4" style="margin-top: 5px">
            <?php if($role == 'admin' || $role == 'root'):?>
                <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vPHP->id], ['class' => 'btn btn-danger']) ?>                
                    <?php if($role == 'root'):?>                    
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vPHP->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vPHP->id), 'class' => 'btn btn-danger']) ?>
                    <?php endif;?>
                </div>
            <?php endif;?>
            <div class="box-body" style="padding:0px">                    
                <div class="col-md-12" style="padding: 0px">
                    <?php
                        echo $this->Html->link(
                            $this->Html->image($vPHP->photo, ['class' => 'img-responsive']),
                            ['action' => 'view', $vPHP->id],
                            ['escape' => false]
                        );
                    ?>                            
                </div>
            </div>
            <div class="box-header" style="margin-top: 0px; padding:0px">
                <p style="font-size: 12px" class="box-title"><b><?= h($vPHP->title);?></b></p>
                <?php if($vPHP->link_share):?>
                    <p style="margin-bottom: 0px">
                        <a href="<?= $vPHP->link_share;?>" target="_blank"><?= $vPHP->description;?></a>
                    </p>
                <?php endif;?>
                <span class="label label-danger"><?= h($vPHP->created) ?></span>
                <br>
                <br>
            </div>           
        </div>                     
    <?php endforeach; ?>
</div>

<div class="row">
    <div class="col-md-12">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'));?>
            <?= $this->Paginator->prev('< ' . __('previous'));?>
            <?= $this->Paginator->numbers();?>
            <?= $this->Paginator->next(__('next') . ' >');?>
            <?= $this->Paginator->last(__('last') . ' >>');?>
        </ul>
    </div>
</div>
<?php if($role == 'common'):?>
    <div class="row">
        <div class="col-md-12">
            <script type="text/javascript">
                var ad_idzone = "3398919",
                    ad_width = "728",
                    ad_height = "90";
            </script>
            <script type="text/javascript" src="https://ads.exdynsrv.com/ads.js"></script>
            <noscript><iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3398919&output=noscript&type=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></noscript>
        </div>
    </div>
<?php endif;?>