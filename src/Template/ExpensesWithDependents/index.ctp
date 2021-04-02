<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpensesWithDependent[]|\Cake\Collection\CollectionInterface $expensesWithDependents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Expenses With Dependent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expensesWithDependents index large-9 medium-8 columns content">
    <h3><?= __('Expenses With Dependents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_faculty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extra_courses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_supplies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sports_uniforms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allowance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_vacation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clothing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('health_medicines') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transport') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expensesWithDependents as $expensesWithDependent): ?>
            <tr>
                <td><?= $this->Number->format($expensesWithDependent->id) ?></td>
                <td><?= h($expensesWithDependent->school_faculty) ?></td>
                <td><?= h($expensesWithDependent->extra_courses) ?></td>
                <td><?= h($expensesWithDependent->school_supplies) ?></td>
                <td><?= h($expensesWithDependent->sports_uniforms) ?></td>
                <td><?= h($expensesWithDependent->allowance) ?></td>
                <td><?= h($expensesWithDependent->tour_vacation) ?></td>
                <td><?= h($expensesWithDependent->clothing) ?></td>
                <td><?= h($expensesWithDependent->health_medicines) ?></td>
                <td><?= h($expensesWithDependent->transport) ?></td>
                <td><?= h($expensesWithDependent->others) ?></td>
                <td><?= $expensesWithDependent->has('mounth') ? $this->Html->link($expensesWithDependent->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $expensesWithDependent->mounth->id]) : '' ?></td>
                <td><?= $expensesWithDependent->has('user') ? $this->Html->link($expensesWithDependent->user->name, ['controller' => 'Users', 'action' => 'view', $expensesWithDependent->user->id]) : '' ?></td>
                <td><?= h($expensesWithDependent->created) ?></td>
                <td><?= h($expensesWithDependent->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expensesWithDependent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expensesWithDependent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expensesWithDependent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expensesWithDependent->id)]) ?>
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
