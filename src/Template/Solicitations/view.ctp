<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitation $solicitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solicitation'), ['action' => 'edit', $solicitation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solicitation'), ['action' => 'delete', $solicitation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Solicitations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solicitations view large-9 medium-8 columns content">
    <h3><?= h($solicitation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($solicitation->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($solicitation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($solicitation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($solicitation->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($solicitation->description)); ?>
    </div>
</div>
