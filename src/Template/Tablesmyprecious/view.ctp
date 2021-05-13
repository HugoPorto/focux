<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablesmyprecious $tablesmyprecious
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $tablesmyprecious->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tablesmyprecious->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablesmyprecious->id)]) ?> </li>
        <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tablesmyprecious view large-10 medium-9 columns content">
    <h3><?= h($tablesmyprecious->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($tablesmyprecious->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($tablesmyprecious->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($tablesmyprecious->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tablesmyprecious->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tablesmyprecious->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tablesmyprecious->modified) ?></td>
        </tr>
    </table>
</div>
