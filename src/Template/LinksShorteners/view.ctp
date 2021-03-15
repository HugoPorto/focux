<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinksShortener $linksShortener
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Links Shortener'), ['action' => 'edit', $linksShortener->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Links Shortener'), ['action' => 'delete', $linksShortener->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linksShortener->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Links Shorteners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Links Shortener'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shorteners'), ['controller' => 'Shorteners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shortener'), ['controller' => 'Shorteners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="linksShorteners view large-9 medium-8 columns content">
    <h3><?= h($linksShortener->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shortener') ?></th>
            <td><?= $linksShortener->has('shortener') ? $this->Html->link($linksShortener->shortener->id, ['controller' => 'Shorteners', 'action' => 'view', $linksShortener->shortener->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= $linksShortener->has('video') ? $this->Html->link($linksShortener->video->title, ['controller' => 'Videos', 'action' => 'view', $linksShortener->video->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($linksShortener->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($linksShortener->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($linksShortener->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($linksShortener->link)); ?>
    </div>
</div>
