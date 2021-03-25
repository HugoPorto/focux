<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthExpense $healthExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Health Expense'), ['action' => 'edit', $healthExpense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Health Expense'), ['action' => 'delete', $healthExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthExpense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Health Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="healthExpenses view large-9 medium-8 columns content">
    <h3><?= h($healthExpense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Health Plan') ?></th>
            <td><?= h($healthExpense->health_plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medical Appointment') ?></th>
            <td><?= h($healthExpense->medical_appointment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exams') ?></th>
            <td><?= h($healthExpense->exams) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dentist') ?></th>
            <td><?= h($healthExpense->dentist) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medicaments') ?></th>
            <td><?= h($healthExpense->medicaments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Therapy') ?></th>
            <td><?= h($healthExpense->therapy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Life Insurance') ?></th>
            <td><?= h($healthExpense->life_insurance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($healthExpense->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $healthExpense->has('mounth') ? $this->Html->link($healthExpense->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $healthExpense->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $healthExpense->has('user') ? $this->Html->link($healthExpense->user->name, ['controller' => 'Users', 'action' => 'view', $healthExpense->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($healthExpense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($healthExpense->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($healthExpense->modified) ?></td>
        </tr>
    </table>
</div>
