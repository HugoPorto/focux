<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablestubex[]|\Cake\Collection\CollectionInterface $tablestubex
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tablestubex'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tablestubex index large-9 medium-8 columns content">
    <h3><?= __('Tablestubex') ?></h3>
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
            <?php foreach ($tablestubex as $tablestubex): ?>
            <tr>
                <td><?= $this->Number->format($tablestubex->id) ?></td>
                <td><?= h($tablestubex->title) ?></td>
                <td><?= h($tablestubex->text) ?></td>
                <td><?= h($tablestubex->link) ?></td>
                <td><?= h($tablestubex->created) ?></td>
                <td><?= h($tablestubex->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tablestubex->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tablestubex->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tablestubex->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablestubex->id)]) ?>
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
