<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HousingExpense[]|\Cake\Collection\CollectionInterface $housingExpenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Housing Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="housingExpenses index large-9 medium-8 columns content">
    <h3><?= __('Housing Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('condominium') ?></th>
                <th scope="col"><?= $this->Paginator->sort('house_insurance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iptu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('light') ?></th>
                <th scope="col"><?= $this->Paginator->sort('services') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tvsubscription') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone_smartphone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('installment_of_the_house') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($housingExpenses as $housingExpense): ?>
            <tr>
                <td><?= $this->Number->format($housingExpense->id) ?></td>
                <td><?= h($housingExpense->rent) ?></td>
                <td><?= h($housingExpense->condominium) ?></td>
                <td><?= h($housingExpense->house_insurance) ?></td>
                <td><?= h($housingExpense->iptu) ?></td>
                <td><?= h($housingExpense->gas) ?></td>
                <td><?= h($housingExpense->light) ?></td>
                <td><?= h($housingExpense->services) ?></td>
                <td><?= h($housingExpense->tvsubscription) ?></td>
                <td><?= h($housingExpense->telephone_smartphone) ?></td>
                <td><?= h($housingExpense->installment_of_the_house) ?></td>
                <td><?= h($housingExpense->others) ?></td>
                <td><?= $housingExpense->has('mounth') ? $this->Html->link($housingExpense->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $housingExpense->mounth->id]) : '' ?></td>
                <td><?= $housingExpense->has('user') ? $this->Html->link($housingExpense->user->name, ['controller' => 'Users', 'action' => 'view', $housingExpense->user->id]) : '' ?></td>
                <td><?= h($housingExpense->created) ?></td>
                <td><?= h($housingExpense->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $housingExpense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $housingExpense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $housingExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $housingExpense->id)]) ?>
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
