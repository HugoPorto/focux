<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Download[]|\Cake\Collection\CollectionInterface $downloads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Download'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shorteners'), ['controller' => 'Shorteners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shortener'), ['controller' => 'Shorteners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="downloads index large-9 medium-8 columns content">
    <h3><?= __('Downloads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('videos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shorteners_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($downloads as $download): ?>
            <tr>
                <td><?= $this->Number->format($download->id) ?></td>
                <td><?= $download->has('user') ? $this->Html->link($download->user->name, ['controller' => 'Users', 'action' => 'view', $download->user->id]) : '' ?></td>
                <td><?= $download->has('video') ? $this->Html->link($download->video->title, ['controller' => 'Videos', 'action' => 'view', $download->video->id]) : '' ?></td>
                <td><?= $download->has('shortener') ? $this->Html->link($download->shortener->shortener, ['controller' => 'Shorteners', 'action' => 'view', $download->shortener->id]) : '' ?></td>
                <td><?= h($download->created) ?></td>
                <td><?= h($download->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $download->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $download->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?>
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
