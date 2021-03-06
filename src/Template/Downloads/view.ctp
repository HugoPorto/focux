<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Download $download
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Download'), ['action' => 'edit', $download->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Download'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Downloads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Download'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shorteners'), ['controller' => 'Shorteners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shortener'), ['controller' => 'Shorteners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="downloads view large-9 medium-8 columns content">
    <h3><?= h($download->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $download->has('user') ? $this->Html->link($download->user->name, ['controller' => 'Users', 'action' => 'view', $download->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= $download->has('video') ? $this->Html->link($download->video->title, ['controller' => 'Videos', 'action' => 'view', $download->video->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shortener') ?></th>
            <td><?= $download->has('shortener') ? $this->Html->link($download->shortener->shortener, ['controller' => 'Shorteners', 'action' => 'view', $download->shortener->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($download->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($download->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($download->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($download->link)); ?>
    </div>
</div>
