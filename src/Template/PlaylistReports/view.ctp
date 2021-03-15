<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaylistReport $playlistReport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Playlist Report'), ['action' => 'edit', $playlistReport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Playlist Report'), ['action' => 'delete', $playlistReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlistReport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Playlist Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist Report'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlist Users'), ['controller' => 'PlaylistUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist User'), ['controller' => 'PlaylistUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="playlistReports view large-9 medium-8 columns content">
    <h3><?= h($playlistReport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $playlistReport->has('user') ? $this->Html->link($playlistReport->user->name, ['controller' => 'Users', 'action' => 'view', $playlistReport->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Playlist User') ?></th>
            <td><?= $playlistReport->has('playlist_user') ? $this->Html->link($playlistReport->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $playlistReport->playlist_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($playlistReport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($playlistReport->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($playlistReport->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Report') ?></h4>
        <?= $this->Text->autoParagraph(h($playlistReport->report)); ?>
    </div>
</div>
