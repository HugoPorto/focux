<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genreseries $genreseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Genreseries'), ['action' => 'edit', $genreseries->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Genreseries'), ['action' => 'delete', $genreseries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genreseries->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Genreseries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genreseries'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="genreseries view large-9 medium-8 columns content">
    <h3><?= h($genreseries->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($genreseries->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($genreseries->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($genreseries->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($genreseries->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($genreseries->description)); ?>
    </div>
</div>
