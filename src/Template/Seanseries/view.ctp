<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seanseries $seanseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seanseries'), ['action' => 'edit', $seanseries->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seanseries'), ['action' => 'delete', $seanseries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seanseries->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seanseries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seanseries'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seanseries view large-9 medium-8 columns content">
    <h3><?= h($seanseries->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($seanseries->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Series') ?></th>
            <td><?= $seanseries->has('series') ? $this->Html->link($seanseries->series->title, ['controller' => 'Series', 'action' => 'view', $seanseries->series->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($seanseries->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($seanseries->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($seanseries->modified) ?></td>
        </tr>
    </table>
</div>
