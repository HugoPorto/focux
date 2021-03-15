<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $video->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Category Videos'), ['controller' => 'CategoryVideos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Video'), ['controller' => 'CategoryVideos', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="videos form large-9 medium-8 columns content">
    <?php if($video->photo):?>
        <?php echo $this->Html->image($video->photo)?>
        <h3>Name Image: <?php echo $video->photo;?></h3>
        <p>Pay attention, to edit the image too, click edit image below.</p>
        <?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $video->id, true]) ?>
    <?php else:?>
        <h3>This video don't have associated image!</h3>
    <?php endif;?>  
    <?= $this->Form->create($video, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Video') ?></legend>
        <?php
            echo $this->Form->control('video');
            if($editImage !== null){
                echo $this->Form->control('photo', ['type' => 'file', 'label' => 'Foto']);
            }            
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('link_share');
            echo $this->Form->control('category_videos_id', ['options' => $categoryVideos]);
            echo $this->Form->control('publicitys_id', ['options' => $publicitys]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
