<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpensesWithPet $expensesWithPet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Expenses With Pet'), ['action' => 'edit', $expensesWithPet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expenses With Pet'), ['action' => 'delete', $expensesWithPet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expensesWithPet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Expenses With Pets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expenses With Pet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expensesWithPets view large-9 medium-8 columns content">
    <h3><?= h($expensesWithPet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pet Shop') ?></th>
            <td><?= h($expensesWithPet->pet_shop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Portion') ?></th>
            <td><?= h($expensesWithPet->portion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Veterinary') ?></th>
            <td><?= h($expensesWithPet->veterinary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medicines') ?></th>
            <td><?= h($expensesWithPet->medicines) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vaccines') ?></th>
            <td><?= h($expensesWithPet->vaccines) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($expensesWithPet->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $expensesWithPet->has('mounth') ? $this->Html->link($expensesWithPet->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $expensesWithPet->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $expensesWithPet->has('user') ? $this->Html->link($expensesWithPet->user->name, ['controller' => 'Users', 'action' => 'view', $expensesWithPet->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($expensesWithPet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($expensesWithPet->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($expensesWithPet->modified) ?></td>
        </tr>
    </table>
</div>
