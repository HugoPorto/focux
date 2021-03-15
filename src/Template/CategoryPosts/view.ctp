<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryPost $categoryPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category Post'), ['action' => 'edit', $categoryPost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category Post'), ['action' => 'delete', $categoryPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryPost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Post'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoryPosts view large-9 medium-8 columns content">
    <h3><?= h($categoryPost->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($categoryPost->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoryPost->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoryPost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoryPost->modified) ?></td>
        </tr>
    </table>
</div>
