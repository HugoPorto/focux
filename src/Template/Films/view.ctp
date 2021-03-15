<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film $film
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Film'), ['action' => 'edit', $film->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Film'), ['action' => 'delete', $film->id], ['confirm' => __('Are you sure you want to delete # {0}?', $film->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Films'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="films view large-9 medium-8 columns content">
    <h3><?= h($film->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($film->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Launch') ?></th>
            <td><?= h($film->launch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($film->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($film->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Award') ?></th>
            <td><?= h($film->award) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Audio') ?></th>
            <td><?= h($film->audio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($film->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quality') ?></th>
            <td><?= h($film->quality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= $film->has('genre') ? $this->Html->link($film->genre->name, ['controller' => 'Genres', 'action' => 'view', $film->genre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($film->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Views') ?></th>
            <td><?= $this->Number->format($film->views) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($film->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($film->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trend') ?></th>
            <td><?= $film->trend ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $film->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Linkimage') ?></h4>
        <?= $this->Text->autoParagraph(h($film->linkimage)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($film->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Trailer') ?></h4>
        <?= $this->Text->autoParagraph(h($film->trailer)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($film->link)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embeddubbed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed2') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embeddubbed2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed3') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embeddubbed3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed4') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embeddubbed4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed2') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embed2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed3') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embed3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed4') ?></h4>
        <?= $this->Text->autoParagraph(h($film->embed4)); ?>
    </div>
</div>
