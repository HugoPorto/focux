<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anvideo $anvideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Anvideo'), ['action' => 'edit', $anvideo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Anvideo'), ['action' => 'delete', $anvideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anvideo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Anvideos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anvideo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seans'), ['controller' => 'Seans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sean'), ['controller' => 'Seans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="anvideos view large-9 medium-8 columns content">
    <h3><?= h($anvideo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Episode') ?></th>
            <td><?= h($anvideo->episode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thumb') ?></th>
            <td><?= h($anvideo->thumb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numepisode') ?></th>
            <td><?= h($anvideo->numepisode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anime') ?></th>
            <td><?= $anvideo->has('anime') ? $this->Html->link($anvideo->anime->anime, ['controller' => 'Animes', 'action' => 'view', $anvideo->anime->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sean') ?></th>
            <td><?= $anvideo->has('sean') ? $this->Html->link($anvideo->sean->name, ['controller' => 'Seans', 'action' => 'view', $anvideo->sean->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($anvideo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($anvideo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($anvideo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trend') ?></th>
            <td><?= $anvideo->trend ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $anvideo->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embeddubbed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed2') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embeddubbed2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed3') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embeddubbed3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed4') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embeddubbed4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed2') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embed2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed3') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embed3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed4') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->embed4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($anvideo->link)); ?>
    </div>
</div>
