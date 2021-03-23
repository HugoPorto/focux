<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe $recipe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipe'), ['action' => 'edit', $recipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipe'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipes view large-9 medium-8 columns content">
    <h3><?= h($recipe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Salarys') ?></th>
            <td><?= h($recipe->salarys) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rentals') ?></th>
            <td><?= h($recipe->rentals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prolabores') ?></th>
            <td><?= h($recipe->prolabores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Fixed Revenues') ?></th>
            <td><?= h($recipe->other_fixed_revenues) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dividends') ?></th>
            <td><?= h($recipe->dividends) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commissions') ?></th>
            <td><?= h($recipe->commissions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thirteen Salarys') ?></th>
            <td><?= h($recipe->thirteen_salarys) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bonus') ?></th>
            <td><?= h($recipe->bonus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($recipe->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $recipe->has('mounth') ? $this->Html->link($recipe->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $recipe->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($recipe->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($recipe->modified) ?></td>
        </tr>
    </table>
</div>
