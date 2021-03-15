<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosRecommended $videosRecommended
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Videos Recommended'), ['action' => 'edit', $videosRecommended->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Videos Recommended'), ['action' => 'delete', $videosRecommended->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosRecommended->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos Recommendeds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Recommended'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videosRecommendeds view large-9 medium-8 columns content">
    <h3><?= h($videosRecommended->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= $videosRecommended->has('video') ? $this->Html->link($videosRecommended->video->title, ['controller' => 'Videos', 'action' => 'view', $videosRecommended->video->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($videosRecommended->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($videosRecommended->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($videosRecommended->modified) ?></td>
        </tr>
    </table>
</div>
