<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logo $logo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logo'), ['action' => 'edit', $logo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logo'), ['action' => 'delete', $logo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logos view large-9 medium-8 columns content">
    <h3><?= h($logo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($logo->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= h($logo->place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($logo->modified) ?></td>
        </tr>
    </table>
</div>
