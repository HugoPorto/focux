<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaylistPrice $playlistPrice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Playlist Price'), ['action' => 'edit', $playlistPrice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Playlist Price'), ['action' => 'delete', $playlistPrice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlistPrice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Playlist Prices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist Price'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlist Users'), ['controller' => 'PlaylistUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist User'), ['controller' => 'PlaylistUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="playlistPrices view large-9 medium-8 columns content">
    <h3><?= h($playlistPrice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Playlist User') ?></th>
            <td><?= $playlistPrice->has('playlist_user') ? $this->Html->link($playlistPrice->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $playlistPrice->playlist_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $playlistPrice->has('user') ? $this->Html->link($playlistPrice->user->name, ['controller' => 'Users', 'action' => 'view', $playlistPrice->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($playlistPrice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($playlistPrice->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($playlistPrice->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($playlistPrice->modified) ?></td>
        </tr>
    </table>
</div>
