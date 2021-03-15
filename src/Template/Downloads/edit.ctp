<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Download $download
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $download->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Downloads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shorteners'), ['controller' => 'Shorteners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shortener'), ['controller' => 'Shorteners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="downloads form large-9 medium-8 columns content">
    <?= $this->Form->create($download) ?>
    <fieldset>
        <legend><?= __('Edit Download') ?></legend>
        <?php
            echo $this->Form->control('link');
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('videos_id', ['options' => $videos]);
            echo $this->Form->control('shorteners_id', ['options' => $shorteners]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
