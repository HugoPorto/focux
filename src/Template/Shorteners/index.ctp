<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shortener[]|\Cake\Collection\CollectionInterface $shorteners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shortener'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shorteners index large-9 medium-8 columns content">
    <h3><?= __('Shorteners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shortener') ?></th>
                <th scope="col"><?= $this->Paginator->sort('site') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shorteners as $shortener): ?>
            <tr>
                <td><?= $this->Number->format($shortener->id) ?></td>
                <td><?= h($shortener->shortener) ?></td>
                <td><?= h($shortener->site) ?></td>
                <td><?= h($shortener->created) ?></td>
                <td><?= h($shortener->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shortener->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shortener->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shortener->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shortener->id)]) ?>
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
