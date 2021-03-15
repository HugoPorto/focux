<section class="content">
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
    <div class="col-md-12" style="padding:0px"> 
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
            <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecommendeds', 'action' => 'index'], ['escape' => false]) ?>
        </div>        
        <?php foreach ($videosRecommendeds as $vr): ?>                  
            <div class="col-md-4" style="margin-top: 5px">
                <?php if($role == 'admin' || $role == 'root'):?>
                    <div class="col-md-12" style="padding: 0px 0px 10px 0px">
                        <?= $this->Html->link(__('Edit'), ['controller' => 'videos', 'action' => 'edit', $vr->video->id], ['class' => 'btn btn-danger']) ?>                
                        <?php if($role == 'root'):?>                    
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'videos', 'action' => 'delete', $vr->video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vr->video->id), 'class' => 'btn btn-danger']) ?>
                        <?php endif;?>
                    </div>
                <?php endif;?>
                <div class="box-body" style="padding:0px">                
                    <div class="col-md-12" style="padding: 0px; border-top: 10px solid #DD4B39; border-bottom: 10px solid #DD4B39">
                        <?php
                            echo $this->Html->link(
                                $this->Html->image($vr->video->photo, ['class' => 'img-responsive']),
                                ['controller' => 'videos', 'action' => 'view', $vr->video->id],
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
</section>