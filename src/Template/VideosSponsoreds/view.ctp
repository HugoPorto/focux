<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosSponsored $videosSponsored
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Videos Sponsored'), ['action' => 'edit', $videosSponsored->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Videos Sponsored'), ['action' => 'delete', $videosSponsored->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosSponsored->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos Sponsoreds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Sponsored'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videosSponsoreds view large-9 medium-8 columns content">
    <h3><?= h($videosSponsored->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= $videosSponsored->has('video') ? $this->Html->link($videosSponsored->video->title, ['controller' => 'Videos', 'action' => 'view', $videosSponsored->video->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($videosSponsored->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($videosSponsored->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($videosSponsored->modified) ?></td>
        </tr>
    </table>
</div>
