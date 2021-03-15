<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinksShortener[]|\Cake\Collection\CollectionInterface $linksShorteners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Links Shortener'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shorteners'), ['controller' => 'Shorteners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shortener'), ['controller' => 'Shorteners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="linksShorteners index large-9 medium-8 columns content">
    <h3><?= __('Links Shorteners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shorteners_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id video') ?></th>
                <th scope="col"><?= $this->Paginator->sort('videos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($linksShorteners as $linksShortener): ?>
            <tr>
                <td><?= $this->Number->format($linksShortener->id) ?></td>
                <td><?= $linksShortener->has('shortener') ? $this->Html->link($linksShortener->shortener->shortener, ['controller' => 'Shorteners', 'action' => 'view', $linksShortener->shortener->id]) : '' ?></td>
                <td><?= $linksShortener->has('video') ? $this->Html->link($linksShortener->video->id, ['controller' => 'Videos', 'action' => 'view', $linksShortener->video->id]) : '' ?></td>
                <td><?= $linksShortener->has('video') ? $this->Html->link($linksShortener->video->title, ['controller' => 'Videos', 'action' => 'view', $linksShortener->video->id]) : '' ?></td>
                <td><?= h($linksShortener->created) ?></td>
                <td><?= h($linksShortener->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $linksShortener->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $linksShortener->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $linksShortener->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linksShortener->id)]) ?>
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
