<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animevideo $animevideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Animevideos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seans'), ['controller' => 'Seans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sean'), ['controller' => 'Seans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animevideos form large-9 medium-8 columns content">
    <?= $this->Form->create($animevideo) ?>
    <fieldset>
        <legend><?= __('Add Animevideo') ?></legend>
        <?php
            echo $this->Form->control('episode');
            echo $this->Form->control('thumb');
            echo $this->Form->control('numepisode');
            echo $this->Form->control('embed');
            echo $this->Form->control('link');
            echo $this->Form->control('animes_id', ['options' => $animes]);
            echo $this->Form->control('seans_id', ['options' => $seans]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
