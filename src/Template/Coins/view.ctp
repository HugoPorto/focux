<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coin $coin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coin'), ['action' => 'edit', $coin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coin'), ['action' => 'delete', $coin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coin'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coins view large-9 medium-8 columns content">
    <h3><?= h($coin->coin) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coin') ?></th>
            <td><?= h($coin->coin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IconName') ?></th>
            <td><?= h($coin->iconName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($coin->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coin->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($coin->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($coin->modified) ?></td>
        </tr>
    </table>
</div>
