<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series $series
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $series->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $series->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Series'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Genreseries'), ['controller' => 'Genreseries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genreseries'), ['controller' => 'Genreseries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seanseries'), ['controller' => 'Seanseries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seanseries'), ['controller' => 'Seanseries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videosseries'), ['controller' => 'Videosseries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Videosseries'), ['controller' => 'Videosseries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="series form large-9 medium-8 columns content">
    <?= $this->Form->create($series) ?>
    <fieldset>
        <legend><?= __('Edit Series') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('linkimage');
            echo $this->Form->control('launch');
            echo $this->Form->control('year');
            echo $this->Form->control('state');
            echo $this->Form->control('award');
            echo $this->Form->control('description');
            echo $this->Form->control('trailer');
            echo $this->Form->control('audio');
            echo $this->Form->control('duration');
            echo $this->Form->control('quality');
            echo $this->Form->control('link');
            echo $this->Form->control('trend');
            echo $this->Form->control('status');
            echo $this->Form->control('genreseries_id', ['options' => $genreseries]);
            echo $this->Form->control('views');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
