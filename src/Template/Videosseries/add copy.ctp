<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Videosseries $videosseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Videosseries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seanseries'), ['controller' => 'Seanseries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seanseries'), ['controller' => 'Seanseries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosseries form large-9 medium-8 columns content">
    <?= $this->Form->create($videosseries) ?>
    <fieldset>
        <legend><?= __('Add Videosseries') ?></legend>
        <?php
            echo $this->Form->control('episode');
            echo $this->Form->control('description');
            echo $this->Form->control('thumb');
            echo $this->Form->control('numepisode');
            echo $this->Form->control('embed');
            echo $this->Form->control('embeddubbed');
            echo $this->Form->control('link');
            echo $this->Form->control('trend');
            echo $this->Form->control('status');
            echo $this->Form->control('series_id', ['options' => $series]);
            echo $this->Form->control('seanseries_id', ['options' => $seanseries]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
