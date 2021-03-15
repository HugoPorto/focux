<div class="row">
    <div class="col-md-12" style="padding: 0px">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">            
            <?= $this->Html->link('<span class="label label-success">Recommendeds</span>', ['controller' => 'VideosRecomendados', 'action' => 'index'], ['escape' => false]) ?>
        </div>   
        <?php foreach ($posts as $post): ?>                  
            <div class="col-md-6">
                <div class="box box-danger">
                    <div class="box-header with-border">
                    <p style="font-size: 16px" class="box-title"><b><?= h($post->title); ?></b></p>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12" style="padding: 0px"  @click="popup(<?= h($post->id); ?>)" id="post_<?= h($post->id); ?>">
                            <?php echo $this->Html->image($post->photo, ['class' => 'img-responsive']) ?>
                        </div>
                    </div>
                    <div class="box-footer">
                        <p><?= h($post->description); ?></p>                      
                        <?= $this->Html->link(__('Watch'), ['action' => 'viewx', $post->id], ['class' => 'btn btn-danger', 'target' => '_blank']) ?>                      
                        <?php if($role == 'admin' || $role == 'root'):?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], ['class' => 'btn btn-danger']) ?>
                        <?php endif;?>
                        <?php if($role == 'root'):?>                    
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'btn btn-danger']) ?>                                                    
                        <?php endif;?>           
                    </div>
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