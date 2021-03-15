<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maintenance[]|\Cake\Collection\CollectionInterface $maintenances
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Maintenance'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maintenances index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maintenances as $maintenance): ?>
            <tr>
                <td><?= $this->Number->format($maintenance->id) ?></td>
                <td><?= $this->Number->format($maintenance->status) ?></td>
                <td><?= h($maintenance->created) ?></td>
                <td><?= h($maintenance->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maintenance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maintenance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maintenance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenance->id)]) ?>
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
