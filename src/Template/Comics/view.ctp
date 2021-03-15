<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comic $comic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comic'), ['action' => 'edit', $comic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comic'), ['action' => 'delete', $comic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Magazines'), ['controller' => 'Magazines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Magazine'), ['controller' => 'Magazines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comics view large-9 medium-8 columns content">
    <h3><?= h($comic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Comic') ?></th>
            <td><?= h($comic->comic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor') ?></th>
            <td><?= h($comic->autor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categories') ?></th>
            <td><?= h($comic->categories) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chapters') ?></th>
            <td><?= h($comic->chapters) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thumb') ?></th>
            <td><?= h($comic->thumb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Magazine') ?></th>
            <td><?= $comic->has('magazine') ? $this->Html->link($comic->magazine->magazine, ['controller' => 'Magazines', 'action' => 'view', $comic->magazine->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($comic->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($comic->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($comic->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $comic->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($comic->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embed') ?></h4>
        <?= $this->Text->autoParagraph(h($comic->embed)); ?>
    </div>
    <div class="row">
        <h4><?= __('Embeddubbed') ?></h4>
        <?= $this->Text->autoParagraph(h($comic->embeddubbed)); ?>
    </div>
</div>
