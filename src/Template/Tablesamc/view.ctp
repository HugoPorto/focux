<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablesamc $tablesamc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tablesamc'), ['action' => 'edit', $tablesamc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tablesamc'), ['action' => 'delete', $tablesamc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablesamc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tablesamc'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tablesamc'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tablesamc view large-9 medium-8 columns content">
    <h3><?= h($tablesamc->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($tablesamc->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($tablesamc->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($tablesamc->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tablesamc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tablesamc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tablesamc->modified) ?></td>
        </tr>
    </table>
</div>
