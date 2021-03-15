<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosRecomendado $videosRecomendado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Videos Recomendado'), ['action' => 'edit', $videosRecomendado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Videos Recomendado'), ['action' => 'delete', $videosRecomendado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosRecomendado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos Recomendados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Recomendado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videosRecomendados view large-9 medium-8 columns content">
    <h3><?= h($videosRecomendado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= $videosRecomendado->has('video') ? $this->Html->link($videosRecomendado->video->title, ['controller' => 'Videos', 'action' => 'view', $videosRecomendado->video->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($videosRecomendado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($videosRecomendado->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($videosRecomendado->modified) ?></td>
        </tr>
    </table>
</div>
