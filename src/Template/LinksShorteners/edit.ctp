<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinksShortener $linksShortener
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $linksShortener->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $linksShortener->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Links Shorteners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shorteners'), ['controller' => 'Shorteners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shortener'), ['controller' => 'Shorteners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="linksShorteners form large-9 medium-8 columns content">
    <?= $this->Form->create($linksShortener) ?>
    <fieldset>
        <legend><?= __('Edit Links Shortener') ?></legend>
        <?php
            echo $this->Form->control('link');
            echo $this->Form->control('shorteners_id', ['options' => $shorteners]);
            echo $this->Form->control('videos_id', ['options' => $videos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
