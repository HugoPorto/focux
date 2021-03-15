<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seanseries $seanseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seanseries->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seanseries->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Seanseries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seanseries form large-9 medium-8 columns content">
    <?= $this->Form->create($seanseries) ?>
    <fieldset>
        <legend><?= __('Edit Seanseries') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('series_id', ['options' => $series]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
