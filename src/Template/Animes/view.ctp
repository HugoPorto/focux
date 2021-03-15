<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anime $anime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Anime'), ['action' => 'edit', $anime->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Anime'), ['action' => 'delete', $anime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $anime->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Animes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anime'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="animes view large-9 medium-8 columns content">
    <h3><?= h($anime->anime) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Anime') ?></th>
            <td><?= h($anime->anime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Launch') ?></th>
            <td><?= h($anime->launch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($anime->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Views') ?></th>
            <td><?= $this->Number->format($anime->views) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($anime->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($anime->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trend') ?></th>
            <td><?= $anime->trend ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Linkimage') ?></h4>
        <?= $this->Text->autoParagraph(h($anime->linkimage)); ?>
    </div>
    <div class="row">
        <h4><?= __('Trailer') ?></h4>
        <?= $this->Text->autoParagraph(h($anime->trailer)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($anime->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Advertising') ?></h4>
        <?= $this->Text->autoParagraph(h($anime->advertising)); ?>
    </div>
    <div class="row">
        <h4><?= __('Sponsor') ?></h4>
        <?= $this->Text->autoParagraph(h($anime->sponsor)); ?>
    </div>
</div>
