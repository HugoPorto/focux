<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaylistPrice[]|\Cake\Collection\CollectionInterface $playlistPrices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Playlist Price'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Playlist Users'), ['controller' => 'PlaylistUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Playlist User'), ['controller' => 'PlaylistUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playlistPrices index large-9 medium-8 columns content">
    <h3><?= __('Playlist Prices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('playlist_users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playlistPrices as $playlistPrice): ?>
            <tr>
                <td><?= $this->Number->format($playlistPrice->id) ?></td>
                <td><?= $playlistPrice->has('playlist_user') ? $this->Html->link($playlistPrice->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $playlistPrice->playlist_user->id]) : '' ?></td>
                <td><?= $playlistPrice->has('user') ? $this->Html->link($playlistPrice->user->name, ['controller' => 'Users', 'action' => 'view', $playlistPrice->user->id]) : '' ?></td>
                <td><?= $this->Number->format($playlistPrice->price) ?></td>
                <td><?= h($playlistPrice->created) ?></td>
                <td><?= h($playlistPrice->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $playlistPrice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playlistPrice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playlistPrice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlistPrice->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
