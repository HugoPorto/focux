<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bannerabout $bannerabout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bannerabout'), ['action' => 'edit', $bannerabout->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bannerabout'), ['action' => 'delete', $bannerabout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bannerabout->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bannerabouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bannerabout'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bannerabouts view large-9 medium-8 columns content">
    <h3><?= h($bannerabout->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($bannerabout->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($bannerabout->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($bannerabout->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bannerabout->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bannerabout->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bannerabout->modified) ?></td>
        </tr>
    </table>
</div>
