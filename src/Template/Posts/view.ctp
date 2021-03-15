<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'list']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Posts'), ['controller' => 'CategoryPosts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Post'), ['controller' => 'CategoryPosts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicitys'), ['controller' => 'Publicitys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicity'), ['controller' => 'Publicitys', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <th><?php echo $this->Html->image($post->photo) ?></th>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Post') ?></th>
            <td><?= $post->has('category_post') ? $this->Html->link($post->category_post->id, ['controller' => 'CategoryPosts', 'action' => 'view', $post->category_post->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicity') ?></th>
            <td><?= $post->has('publicity') ? $this->Html->link($post->publicity->id, ['controller' => 'Publicitys', 'action' => 'view', $post->publicity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($post->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($post->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Post') ?></h4>
        <?= $this->Text->autoParagraph(h($post->post)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link Share') ?></h4>
        <?= $this->Text->autoParagraph(h($post->link_share)); ?>
    </div>
    <div class="row">
        <h4><?= __('Extra Publicity Code') ?></h4>
        <?= $this->Text->autoParagraph(h($post->extra_publicity_code)); ?>
    </div>
</div>
