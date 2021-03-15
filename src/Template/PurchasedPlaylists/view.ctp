<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PurchasedPlaylist $purchasedPlaylist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Purchased Playlist'), ['action' => 'edit', $purchasedPlaylist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Purchased Playlist'), ['action' => 'delete', $purchasedPlaylist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchasedPlaylist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Purchased Playlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchased Playlist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlist Users'), ['controller' => 'PlaylistUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist User'), ['controller' => 'PlaylistUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="purchasedPlaylists view large-9 medium-8 columns content">
    <h3><?= h($purchasedPlaylist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $purchasedPlaylist->has('user') ? $this->Html->link($purchasedPlaylist->user->name, ['controller' => 'Users', 'action' => 'view', $purchasedPlaylist->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Playlist User') ?></th>
            <td><?= $purchasedPlaylist->has('playlist_user') ? $this->Html->link($purchasedPlaylist->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $purchasedPlaylist->playlist_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($purchasedPlaylist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($purchasedPlaylist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($purchasedPlaylist->modified) ?></td>
        </tr>
    </table>
</div>
