<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Linkcoin $linkcoin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Linkcoin'), ['action' => 'edit', $linkcoin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Linkcoin'), ['action' => 'delete', $linkcoin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linkcoin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Linkcoins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Linkcoin'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coins'), ['controller' => 'Coins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coin'), ['controller' => 'Coins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="linkcoins view large-9 medium-8 columns content">
    <h3><?= h($linkcoin->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coin') ?></th>
            <td><?= $linkcoin->has('coin') ? $this->Html->link($linkcoin->coin->coin, ['controller' => 'Coins', 'action' => 'view', $linkcoin->coin->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($linkcoin->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($linkcoin->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main') ?></th>
            <td><?= $this->Number->format($linkcoin->main) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($linkcoin->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($linkcoin->modified) ?></td>
        </tr>
    </table>
</div>
