<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PurchasedPlaylist $purchasedPlaylist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $purchasedPlaylist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $purchasedPlaylist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Purchased Playlists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Playlist Users'), ['controller' => 'PlaylistUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Playlist User'), ['controller' => 'PlaylistUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="purchasedPlaylists form large-9 medium-8 columns content">
    <?= $this->Form->create($purchasedPlaylist) ?>
    <fieldset>
        <legend><?= __('Edit Purchased Playlist') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('playlist_users_id', ['options' => $playlistUsers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
