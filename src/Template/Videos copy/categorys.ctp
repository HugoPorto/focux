<section class="content">
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">         
            <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecomendados', 'action' => 'index'], ['escape' => false]) ?>
            <?php foreach ($categoryVideos as $categoryVideo): ?>
                <?= $this->Html->link('<span class="label label-success">'.$categoryVideo->category.'</span>', ['controller' => 'Videos', 'action' => 'viewByCategory', $categoryVideo->id], ['escape' => false]) ?>
            <?php endforeach; ?>  
        </div>  
    </div>  
</section>  