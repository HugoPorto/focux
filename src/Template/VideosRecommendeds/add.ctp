<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosRecommended $videosRecommended
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Videos Recommendeds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosRecommendeds form large-9 medium-8 columns content">
    <?= $this->Form->create($videosRecommended) ?>
    <fieldset>
        <legend><?= __('Add Videos Recommended') ?></legend>
        <?php
            echo $this->Form->control('videos_id', ['options' => $videos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
