<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Work $work
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Work'), ['action' => 'edit', $work->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Work'), ['action' => 'delete', $work->id], ['confirm' => __('Are you sure you want to delete # {0}?', $work->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Works'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="works view large-9 medium-8 columns content">
    <h3><?= h($work->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reference') ?></th>
            <td><?= h($work->reference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($work->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($work->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($work->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($work->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($work->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($work->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($work->modified) ?></td>
        </tr>
    </table>
</div>
