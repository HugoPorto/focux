<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film $film
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $film->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $film->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Films'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="films form large-9 medium-8 columns content">
    <?= $this->Form->create($film) ?>
    <fieldset>
        <legend><?= __('Edit Film') ?></legend>
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
            echo $this->Form->control('embed');
            echo $this->Form->control('embeddubbed');
            echo $this->Form->control('embeddubbed2');
            echo $this->Form->control('embeddubbed3');
            echo $this->Form->control('embeddubbed4');
            echo $this->Form->control('embed2');
            echo $this->Form->control('embed3');
            echo $this->Form->control('embed4');
            echo $this->Form->control('trend');
            echo $this->Form->control('status');
            echo $this->Form->control('genres_id', ['options' => $genres]);
            echo $this->Form->control('views');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
