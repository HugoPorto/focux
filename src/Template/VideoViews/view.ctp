<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideoView $videoView
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Video View'), ['action' => 'edit', $videoView->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Video View'), ['action' => 'delete', $videoView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videoView->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Video Views'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video View'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videoViews view large-9 medium-8 columns content">
    <h3><?= h($videoView->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $videoView->has('user') ? $this->Html->link($videoView->user->name, ['controller' => 'Users', 'action' => 'view', $videoView->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= $videoView->has('video') ? $this->Html->link($videoView->video->title, ['controller' => 'Videos', 'action' => 'view', $videoView->video->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($videoView->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($videoView->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Browser') ?></th>
            <td><?= h($videoView->browser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($videoView->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($videoView->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($videoView->modified) ?></td>
        </tr>
    </table>
</div>
