<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpensesWithDependent $expensesWithDependent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Expenses With Dependent'), ['action' => 'edit', $expensesWithDependent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expenses With Dependent'), ['action' => 'delete', $expensesWithDependent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expensesWithDependent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Expenses With Dependents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expenses With Dependent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expensesWithDependents view large-9 medium-8 columns content">
    <h3><?= h($expensesWithDependent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School Faculty') ?></th>
            <td><?= h($expensesWithDependent->school_faculty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extra Courses') ?></th>
            <td><?= h($expensesWithDependent->extra_courses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Supplies') ?></th>
            <td><?= h($expensesWithDependent->school_supplies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sports Uniforms') ?></th>
            <td><?= h($expensesWithDependent->sports_uniforms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Allowance') ?></th>
            <td><?= h($expensesWithDependent->allowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Vacation') ?></th>
            <td><?= h($expensesWithDependent->tour_vacation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clothing') ?></th>
            <td><?= h($expensesWithDependent->clothing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Health Medicines') ?></th>
            <td><?= h($expensesWithDependent->health_medicines) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transport') ?></th>
            <td><?= h($expensesWithDependent->transport) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($expensesWithDependent->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $expensesWithDependent->has('mounth') ? $this->Html->link($expensesWithDependent->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $expensesWithDependent->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $expensesWithDependent->has('user') ? $this->Html->link($expensesWithDependent->user->name, ['controller' => 'Users', 'action' => 'view', $expensesWithDependent->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($expensesWithDependent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($expensesWithDependent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($expensesWithDependent->modified) ?></td>
        </tr>
    </table>
</div>
