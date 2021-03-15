<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animevideo $animevideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Animevideo'), ['action' => 'edit', $animevideo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Animevideo'), ['action' => 'delete', $animevideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animevideo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Animevideos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animevideo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seans'), ['controller' => 'Seans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sean'), ['controller' => 'Seans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="animevideos view large-9 medium-8 columns content">
    <h3><?= h($animevideo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Episode') ?></th>
            <td><?= h($animevideo->episode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thumb') ?></th>
            <td><?= h($animevideo->thumb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numepisode') ?></th>
            <td><?= h($animevideo->numepisode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anime') ?></th>
            <td><?= $animevideo->has('anime') ? $this->Html->link($animevideo->anime->anime, ['controller' => 'Animes', 'action' => 'view', $animevideo->anime->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sean') ?></th>
            <td><?= $animevideo->has('sean') ? $this->Html->link($animevideo->sean->name, ['controller' => 'Seans', 'action' => 'view', $animevideo->sean->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($animevideo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($animevideo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($animevideo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Embed') ?></h4>
        <?= $this->Text->autoParagraph(h($animevideo->embed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($animevideo->link)); ?>
    </div>
</div>
