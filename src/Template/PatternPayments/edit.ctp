<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PatternPayment $patternPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $patternPayment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $patternPayment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pattern Payments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Playlist Users'), ['controller' => 'PlaylistUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Playlist User'), ['controller' => 'PlaylistUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="patternPayments form large-9 medium-8 columns content">
    <?= $this->Form->create($patternPayment) ?>
    <fieldset>
        <legend><?= __('Edit Pattern Payment') ?></legend>
        <?php
            echo $this->Form->control('playlist_users_id', ['options' => $playlistUsers]);
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('ownersid');
            echo $this->Form->control('photo');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
