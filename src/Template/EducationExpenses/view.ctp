<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EducationExpense $educationExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Education Expense'), ['action' => 'edit', $educationExpense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Education Expense'), ['action' => 'delete', $educationExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationExpense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Education Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Education Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="educationExpenses view large-9 medium-8 columns content">
    <h3><?= h($educationExpense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Graduation') ?></th>
            <td><?= h($educationExpense->graduation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postgraduate Studies') ?></th>
            <td><?= h($educationExpense->postgraduate_studies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialization Courses') ?></th>
            <td><?= h($educationExpense->specialization_courses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language Courses') ?></th>
            <td><?= h($educationExpense->language_courses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($educationExpense->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $educationExpense->has('mounth') ? $this->Html->link($educationExpense->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $educationExpense->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $educationExpense->has('user') ? $this->Html->link($educationExpense->user->name, ['controller' => 'Users', 'action' => 'view', $educationExpense->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($educationExpense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($educationExpense->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($educationExpense->modified) ?></td>
        </tr>
    </table>
</div>
