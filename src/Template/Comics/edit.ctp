<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comic $comic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Magazines'), ['controller' => 'Magazines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Magazine'), ['controller' => 'Magazines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comics form large-9 medium-8 columns content">
    <?= $this->Form->create($comic) ?>
    <fieldset>
        <legend><?= __('Edit Comic') ?></legend>
        <?php
            echo $this->Form->control('comic');
            echo $this->Form->control('autor');
            echo $this->Form->control('status');
            echo $this->Form->control('categories');
            echo $this->Form->control('description');
            echo $this->Form->control('chapters');
            echo $this->Form->control('thumb');
            echo $this->Form->control('embed');
            echo $this->Form->control('embeddubbed');
            echo $this->Form->control('magazines_id', ['options' => $magazines]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
