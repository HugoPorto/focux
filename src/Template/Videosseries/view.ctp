<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Videosseries $videosseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Videosseries'), ['action' => 'edit', $videosseries->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Videosseries'), ['action' => 'delete', $videosseries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosseries->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videosseries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videosseries'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seanseries'), ['controller' => 'Seanseries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seanseries'), ['controller' => 'Seanseries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videosseries view large-9 medium-8 columns content">
    <h3><?= h($videosseries->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Episode') ?></th>
            <td><?= h($videosseries->episode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thumb') ?></th>
            <td><?= h($videosseries->thumb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numepisode') ?></th>
            <td><?= h($videosseries->numepisode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Series') ?></th>
            <td><?= $videosseries->has('series') ? $this->Html->link($videosseries->series->title, ['controller' => 'Series', 'action' => 'view', $videosseries->series->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seanseries') ?></th>
            <td><?= $videosseries->has('seanseries') ? $this->Html->link($videosseries->seanseries->name, ['controller' => 'Seanseries', 'action' => 'view', $videosseries->seanseries->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($videosseries->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($videosseries->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($videosseries->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trend') ?></th>
            <td><?= $videosseries->trend ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $videosseries->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embeddubbed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed2') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embeddubbed2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed3') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embeddubbed3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed4') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embeddubbed4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed2') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embed2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed3') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embed3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed4') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->embed4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($videosseries->link)); ?>
    </div>
</div>
