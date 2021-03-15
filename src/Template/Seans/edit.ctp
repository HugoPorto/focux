<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sean $sean
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>        
        <li><?= $this->Html->link(__('List Seasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seans form large-9 medium-8 columns content">
    <?= $this->Form->create($sean) ?>
    <fieldset>
        <legend><?= __('Edit Sean') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
