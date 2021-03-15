<section class="content">
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">         
            <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecommendeds', 'action' => 'index'], ['escape' => false]) ?>
        </div>  
    </div>  
    <div class="row">  
        <?php foreach ($categoryVideos as $categoryVideo): ?>      
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                <div class="inner">
                    <h4><?= h($categoryVideo->category) ?></h4>
                </div>
                <?=$this->Html->link('<i class="fa  fa-cubes"></i><span> View</span>', ['controller' => 'Videos', 'action' => 'viewByCategory', $categoryVideo->id], ['escape' => false, 'class' => 'small-box-footer']) ?>
                </div>
            </div>
        <?php endforeach;?>
    </div>  
</section>  