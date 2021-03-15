<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maintenance $maintenance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maintenance'), ['action' => 'edit', $maintenance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maintenance'), ['action' => 'delete', $maintenance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maintenances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maintenance'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maintenances view large-9 medium-8 columns content">
    <h3><?= h($maintenance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maintenance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($maintenance->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($maintenance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($maintenance->modified) ?></td>
        </tr>
    </table>
</div>
