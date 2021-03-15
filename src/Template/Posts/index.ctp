<section class="content">
    <div class="row">
            <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                <iframe src="https://get.cryptobrowser.site/promo/ad/6/6471160/02/animated/" style="width: 728px; height: 90px" frameborder="no"></iframe>
            </div>                  
    </div>
    <?php if($role == 'common'):?>
        <div class="row">
            <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                
            </div>                  
        </div>
    <?php endif;?>
    <?php if($role == 'admin' || $role == 'root'):?>
        <div class="row">
            <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                <?= $this->Html->link(__('Add Post'), ['action' => 'add'], ['class' => 'btn btn-danger']) ?> 
            </div>                         
        </div>
    <?php endif;?>
    <div class="row">       
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <h3 style="padding:0px; margin: 0px">Category Posts</h3>
            <?php foreach ($categoryPosts as $categoryPost): ?>
                <?php if($categoryPost->description !== 'NULA'): ?>
                    <?= $this->Html->link('<span class="label label-success">' . $categoryPost->description . '</span>', ['controller' => 'Posts', 'action' => 'viewByCategory', $categoryPost->id], ['escape' => false]) ?>
                <?php endif; ?>
            <?php endforeach; ?>  
        </div>
    </div>
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class=col-md-8>
                <ul class="timeline">
                    <li class="time-label">
                        <span class="bg-red">
                            <?= h($post->created) ?>
                        </span>
                    </li>
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><strong><?= h($post->title) ?></strong></h3>
                            <div class="timeline-body">
                                <?php echo $this->Html->image($post->photo, ['class' => 'img-responsive']) ?>
                                <br>
                                <p><?= h($post->post); ?></p>   
                            </div>
                            <div class="timeline-footer">                 
                                <?= $this->Html->link(__('Watch'), ['action' => 'viewx', $post->id], ['class' => 'btn btn-danger', 'target' => '_blank']) ?>                            
                                <?php if($role == 'admin' || $role == 'root'):?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], ['class' => 'btn btn-danger']) ?>
                                <?php endif;?>
                                <?php if($role == 'root'):?>                    
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'btn btn-danger']) ?>
                                <?php endif;?>
                            </div>
                        </div>
                    </li>
                </ul>
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
            
            </div>
        </div>
    <?php endif;?>
</section>