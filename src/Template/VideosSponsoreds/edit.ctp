<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosSponsored $videosSponsored
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $videosSponsored->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $videosSponsored->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Videos Sponsoreds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosSponsoreds form large-9 medium-8 columns content">
    <?= $this->Form->create($videosSponsored) ?>
    <fieldset>
        <legend><?= __('Edit Videos Sponsored') ?></legend>
        <?php
            echo $this->Form->control('videos_id', ['options' => $videos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
