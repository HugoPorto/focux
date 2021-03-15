<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PatternPayment $patternPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pattern Payment'), ['action' => 'edit', $patternPayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pattern Payment'), ['action' => 'delete', $patternPayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patternPayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pattern Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pattern Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlist Users'), ['controller' => 'PlaylistUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist User'), ['controller' => 'PlaylistUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="patternPayments view large-9 medium-8 columns content">
    <h3><?= h($patternPayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Playlist User') ?></th>
            <td><?= $patternPayment->has('playlist_user') ? $this->Html->link($patternPayment->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $patternPayment->playlist_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $patternPayment->has('user') ? $this->Html->link($patternPayment->user->name, ['controller' => 'Users', 'action' => 'view', $patternPayment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($patternPayment->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($patternPayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ownersid') ?></th>
            <td><?= $this->Number->format($patternPayment->ownersid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($patternPayment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($patternPayment->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($patternPayment->note)); ?>
    </div>
</div>
