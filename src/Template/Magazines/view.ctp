<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Magazine $magazine
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Magazine'), ['action' => 'edit', $magazine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Magazine'), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Magazines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Magazine'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="magazines view large-9 medium-8 columns content">
    <h3><?= h($magazine->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Magazine') ?></th>
            <td><?= h($magazine->magazine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($magazine->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($magazine->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($magazine->modified) ?></td>
        </tr>
    </table>
</div>
