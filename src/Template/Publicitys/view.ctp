<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicity $publicity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publicity'), ['action' => 'edit', $publicity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publicity'), ['action' => 'delete', $publicity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publicitys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicity'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publicitys view large-9 medium-8 columns content">
    <h3><?= h($publicity->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Business') ?></th>
            <td><?= h($publicity->business) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($publicity->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publicity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($publicity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($publicity->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Embed1') ?></h4>
        <?= $this->Text->autoParagraph(h($publicity->embed1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed2') ?></h4>
        <?= $this->Text->autoParagraph(h($publicity->embed2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed3') ?></h4>
        <?= $this->Text->autoParagraph(h($publicity->embed3)); ?>
    </div>
</div>
