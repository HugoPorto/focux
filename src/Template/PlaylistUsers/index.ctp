<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaylistUser[]|\Cake\Collection\CollectionInterface $playlistUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Playlist User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playlistUsers index large-9 medium-8 columns content">
    <h3><?= __('Playlist Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playlistUsers as $playlistUser): ?>
            <tr>
                <td><?= $this->Number->format($playlistUser->id) ?></td>
                <td><?= h($playlistUser->title) ?></td>
                <td><?= $playlistUser->has('user') ? $this->Html->link($playlistUser->user->name, ['controller' => 'Users', 'action' => 'view', $playlistUser->user->id]) : '' ?></td>
                <td><?= h($playlistUser->created) ?></td>
                <td><?= h($playlistUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $playlistUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playlistUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playlistUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlistUser->id)]) ?>
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
