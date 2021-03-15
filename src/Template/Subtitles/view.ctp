<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subtitle $subtitle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtitle'), ['action' => 'edit', $subtitle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtitle'), ['action' => 'delete', $subtitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtitle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtitles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtitle'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtitles view large-9 medium-8 columns content">
    <h3><?= h($subtitle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($subtitle->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtitle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subtitle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subtitle->modified) ?></td>
        </tr>
    </table>
</div>
