<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MethodTopayment[]|\Cake\Collection\CollectionInterface $methodTopayments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Method Topayment'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="methodTopayments index large-9 medium-8 columns content">
    <h3><?= __('Method Topayments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('method') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($methodTopayments as $methodTopayment): ?>
            <tr>
                <td><?= $this->Number->format($methodTopayment->id) ?></td>
                <td><?= h($methodTopayment->method) ?></td>
                <td><?= h($methodTopayment->created) ?></td>
                <td><?= h($methodTopayment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $methodTopayment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $methodTopayment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $methodTopayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $methodTopayment->id)]) ?>
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
