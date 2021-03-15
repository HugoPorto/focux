<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anvideo $anvideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="anvideos form large-9 medium-8 columns content">
    <?= $this->Form->create($anvideo) ?>
    <fieldset>
        <legend><?= __('Add Anvideo') ?></legend>
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
            echo $this->Form->control('animes_id', ['options' => $animes]);
            echo $this->Form->control('seans_id', ['options' => $seans]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
