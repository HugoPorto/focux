<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe $recipe
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipes view large-10 medium-9 columns content">
    <h3><?= h('Code: '.$recipe->id.' | Mounth: '.$recipe->mounth->mounth) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= h($recipe->salarys) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental') ?></th>
            <td><?= h($recipe->rentals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prolabore') ?></th>
            <td><?= h($recipe->prolabores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Fixed Revenue') ?></th>
            <td><?= h($recipe->other_fixed_revenues) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dividend') ?></th>
            <td><?= h($recipe->dividends) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commission') ?></th>
            <td><?= h($recipe->commissions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thirteen Salary') ?></th>
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
            <td><?= $recipe->has('mounth') ? $this->Html->link($recipe->mounth->mounth, ['controller' => 'Mounths', 'action' => 'view', $recipe->mounth->id]) : '' ?></td>
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
