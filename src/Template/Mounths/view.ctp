<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mounth $mounth
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mounth'), ['action' => 'edit', $mounth->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mounth'), ['action' => 'delete', $mounth->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mounth->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mounths view large-9 medium-8 columns content">
    <h3><?= h($mounth->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= h($mounth->mounth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mounth->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mounth->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mounth->modified) ?></td>
        </tr>
    </table>
</div>
