<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthExpense[]|\Cake\Collection\CollectionInterface $healthExpenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Health Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="healthExpenses index large-9 medium-8 columns content">
    <h3><?= __('Health Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('health_plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medical_appointment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exams') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dentist') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medicaments') ?></th>
                <th scope="col"><?= $this->Paginator->sort('therapy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('life_insurance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($healthExpenses as $healthExpense): ?>
            <tr>
                <td><?= $this->Number->format($healthExpense->id) ?></td>
                <td><?= h($healthExpense->health_plan) ?></td>
                <td><?= h($healthExpense->medical_appointment) ?></td>
                <td><?= h($healthExpense->exams) ?></td>
                <td><?= h($healthExpense->dentist) ?></td>
                <td><?= h($healthExpense->medicaments) ?></td>
                <td><?= h($healthExpense->therapy) ?></td>
                <td><?= h($healthExpense->life_insurance) ?></td>
                <td><?= h($healthExpense->others) ?></td>
                <td><?= $healthExpense->has('mounth') ? $this->Html->link($healthExpense->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $healthExpense->mounth->id]) : '' ?></td>
                <td><?= $healthExpense->has('user') ? $this->Html->link($healthExpense->user->name, ['controller' => 'Users', 'action' => 'view', $healthExpense->user->id]) : '' ?></td>
                <td><?= h($healthExpense->created) ?></td>
                <td><?= h($healthExpense->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $healthExpense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $healthExpense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $healthExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthExpense->id)]) ?>
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
