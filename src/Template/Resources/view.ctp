<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resource'), ['action' => 'edit', $resource->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resource'), ['action' => 'delete', $resource->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resource->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Resources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resource'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resources view large-9 medium-8 columns content">
    <h3><?= h($resource->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Resource') ?></th>
            <td><?= h($resource->resource) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($resource->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($resource->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($resource->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($resource->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($resource->text)); ?>
    </div>
</div>
