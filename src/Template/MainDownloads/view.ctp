<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MainDownload $mainDownload
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Main Download'), ['action' => 'edit', $mainDownload->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Main Download'), ['action' => 'delete', $mainDownload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mainDownload->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Main Downloads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Main Download'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mainDownloads view large-9 medium-8 columns content">
    <h3><?= h($mainDownload->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($mainDownload->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($mainDownload->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($mainDownload->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mainDownload->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mainDownload->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mainDownload->modified) ?></td>
        </tr>
    </table>
</div>
