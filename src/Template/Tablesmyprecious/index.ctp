<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablesmyprecious[]|\Cake\Collection\CollectionInterface $tablesmyprecious
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tablesmyprecious'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tablesmyprecious index large-9 medium-8 columns content">
    <h3><?= __('Tablesmyprecious') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('text') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tablesmyprecious as $tablesmyprecious): ?>
            <tr>
                <td><?= $this->Number->format($tablesmyprecious->id) ?></td>
                <td><?= h($tablesmyprecious->title) ?></td>
                <td><?= h($tablesmyprecious->text) ?></td>
                <td><?= h($tablesmyprecious->link) ?></td>
                <td><?= h($tablesmyprecious->created) ?></td>
                <td><?= h($tablesmyprecious->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tablesmyprecious->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tablesmyprecious->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tablesmyprecious->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablesmyprecious->id)]) ?>
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
