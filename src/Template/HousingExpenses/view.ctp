<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HousingExpense $housingExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Housing Expense'), ['action' => 'edit', $housingExpense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Housing Expense'), ['action' => 'delete', $housingExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $housingExpense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Housing Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Housing Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="housingExpenses view large-9 medium-8 columns content">
    <h3><?= h($housingExpense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rent') ?></th>
            <td><?= h($housingExpense->rent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Condominium') ?></th>
            <td><?= h($housingExpense->condominium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('House Insurance') ?></th>
            <td><?= h($housingExpense->house_insurance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iptu') ?></th>
            <td><?= h($housingExpense->iptu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gas') ?></th>
            <td><?= h($housingExpense->gas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Light') ?></th>
            <td><?= h($housingExpense->light) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Services') ?></th>
            <td><?= h($housingExpense->services) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tvsubscription') ?></th>
            <td><?= h($housingExpense->tvsubscription) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone Smartphone') ?></th>
            <td><?= h($housingExpense->telephone_smartphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Installment Of The House') ?></th>
            <td><?= h($housingExpense->installment_of_the_house) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($housingExpense->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $housingExpense->has('mounth') ? $this->Html->link($housingExpense->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $housingExpense->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $housingExpense->has('user') ? $this->Html->link($housingExpense->user->name, ['controller' => 'Users', 'action' => 'view', $housingExpense->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($housingExpense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($housingExpense->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($housingExpense->modified) ?></td>
        </tr>
    </table>
</div>
