<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Category Videos'), ['controller' => 'CategoryVideos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Video'), ['controller' => 'CategoryVideos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videos form large-9 medium-8 columns content">
    <?= $this->Form->create($video, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Video') ?></legend>
        <?php
            echo $this->Form->control('video');
            echo $this->Form->control('photo', ['type' => 'file', 'label' => 'Photo']);
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
