<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentMethod[]|\Cake\Collection\CollectionInterface $paymentMethods
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payment Method'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Method Topayments'), ['controller' => 'MethodTopayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Method Topayment'), ['controller' => 'MethodTopayments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paymentMethods index large-9 medium-8 columns content">
    <h3><?= __('Payment Methods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('method') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('method_topayments_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paymentMethods as $paymentMethod): ?>
            <tr>
                <td><?= $this->Number->format($paymentMethod->id) ?></td>
                <td><?= h($paymentMethod->method) ?></td>
                <td><?= h($paymentMethod->email) ?></td>
                <td><?= $paymentMethod->has('user') ? $this->Html->link($paymentMethod->user->name, ['controller' => 'Users', 'action' => 'view', $paymentMethod->user->id]) : '' ?></td>
                <td><?= $paymentMethod->has('method_topayment') ? $this->Html->link($paymentMethod->method_topayment->method, ['controller' => 'MethodTopayments', 'action' => 'view', $paymentMethod->method_topayment->id]) : '' ?></td>
                <td><?= h($paymentMethod->created) ?></td>
                <td><?= h($paymentMethod->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paymentMethod->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymentMethod->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymentMethod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentMethod->id)]) ?>
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
