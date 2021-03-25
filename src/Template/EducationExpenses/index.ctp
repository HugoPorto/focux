<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EducationExpense[]|\Cake\Collection\CollectionInterface $educationExpenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Education Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="educationExpenses index large-9 medium-8 columns content">
    <h3><?= __('Education Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('graduation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postgraduate_studies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('specialization_courses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language_courses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($educationExpenses as $educationExpense): ?>
            <tr>
                <td><?= $this->Number->format($educationExpense->id) ?></td>
                <td><?= h($educationExpense->graduation) ?></td>
                <td><?= h($educationExpense->postgraduate_studies) ?></td>
                <td><?= h($educationExpense->specialization_courses) ?></td>
                <td><?= h($educationExpense->language_courses) ?></td>
                <td><?= h($educationExpense->others) ?></td>
                <td><?= $educationExpense->has('mounth') ? $this->Html->link($educationExpense->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $educationExpense->mounth->id]) : '' ?></td>
                <td><?= $educationExpense->has('user') ? $this->Html->link($educationExpense->user->name, ['controller' => 'Users', 'action' => 'view', $educationExpense->user->id]) : '' ?></td>
                <td><?= h($educationExpense->created) ?></td>
                <td><?= h($educationExpense->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $educationExpense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $educationExpense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $educationExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationExpense->id)]) ?>
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
