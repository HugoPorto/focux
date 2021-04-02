<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpensesWithPet[]|\Cake\Collection\CollectionInterface $expensesWithPets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Expenses With Pet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expensesWithPets index large-9 medium-8 columns content">
    <h3><?= __('Expenses With Pets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pet_shop') ?></th>
                <th scope="col"><?= $this->Paginator->sort('portion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('veterinary') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medicines') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vaccines') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expensesWithPets as $expensesWithPet): ?>
            <tr>
                <td><?= $this->Number->format($expensesWithPet->id) ?></td>
                <td><?= h($expensesWithPet->pet_shop) ?></td>
                <td><?= h($expensesWithPet->portion) ?></td>
                <td><?= h($expensesWithPet->veterinary) ?></td>
                <td><?= h($expensesWithPet->medicines) ?></td>
                <td><?= h($expensesWithPet->vaccines) ?></td>
                <td><?= h($expensesWithPet->others) ?></td>
                <td><?= $expensesWithPet->has('mounth') ? $this->Html->link($expensesWithPet->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $expensesWithPet->mounth->id]) : '' ?></td>
                <td><?= $expensesWithPet->has('user') ? $this->Html->link($expensesWithPet->user->name, ['controller' => 'Users', 'action' => 'view', $expensesWithPet->user->id]) : '' ?></td>
                <td><?= h($expensesWithPet->created) ?></td>
                <td><?= h($expensesWithPet->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expensesWithPet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expensesWithPet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expensesWithPet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expensesWithPet->id)]) ?>
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
