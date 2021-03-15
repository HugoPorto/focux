<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablestubex $tablestubex
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tablestubex'), ['action' => 'edit', $tablestubex->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tablestubex'), ['action' => 'delete', $tablestubex->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablestubex->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tablestubex'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tablestubex'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tablestubex view large-9 medium-8 columns content">
    <h3><?= h($tablestubex->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($tablestubex->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($tablestubex->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($tablestubex->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tablestubex->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tablestubex->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tablestubex->modified) ?></td>
        </tr>
    </table>
</div>
