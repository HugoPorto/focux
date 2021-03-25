<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PersonalExpense $personalExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Personal Expense'), ['action' => 'edit', $personalExpense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Personal Expense'), ['action' => 'delete', $personalExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalExpense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Personal Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personal Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personalExpenses view large-9 medium-8 columns content">
    <h3><?= h($personalExpense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Personal Hygiene And Cosmetics') ?></th>
            <td><?= h($personalExpense->personal_hygiene_and_cosmetics) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hairdresser') ?></th>
            <td><?= h($personalExpense->hairdresser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Donations') ?></th>
            <td><?= h($personalExpense->donations) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($personalExpense->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $personalExpense->has('mounth') ? $this->Html->link($personalExpense->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $personalExpense->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $personalExpense->has('user') ? $this->Html->link($personalExpense->user->name, ['controller' => 'Users', 'action' => 'view', $personalExpense->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($personalExpense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($personalExpense->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($personalExpense->modified) ?></td>
        </tr>
    </table>
</div>
