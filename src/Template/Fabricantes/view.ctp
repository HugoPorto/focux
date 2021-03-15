<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricante $fabricante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fabricante'), ['action' => 'edit', $fabricante->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fabricante'), ['action' => 'delete', $fabricante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fabricante->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fabricantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fabricante'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fabricantes view large-9 medium-8 columns content">
    <h3><?= h($fabricante->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($fabricante->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($fabricante->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fabricante->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fabricante->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fabricante->modified) ?></td>
        </tr>
    </table>
</div>
