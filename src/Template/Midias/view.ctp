<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Midia $midia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Midia'), ['action' => 'edit', $midia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Midia'), ['action' => 'delete', $midia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $midia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Midias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Midia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="midias view large-9 medium-8 columns content">
    <h3><?= h($midia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($midia->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($midia->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($midia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($midia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($midia->modified) ?></td>
        </tr>
    </table>
</div>
