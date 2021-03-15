<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubcategoryPost $subcategoryPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subcategory Post'), ['action' => 'edit', $subcategoryPost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subcategory Post'), ['action' => 'delete', $subcategoryPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoryPost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subcategory Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Posts'), ['controller' => 'CategoryPosts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Post'), ['controller' => 'CategoryPosts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subcategoryPosts view large-9 medium-8 columns content">
    <h3><?= h($subcategoryPost->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($subcategoryPost->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Post') ?></th>
            <td><?= $subcategoryPost->has('category_post') ? $this->Html->link($subcategoryPost->category_post->description, ['controller' => 'CategoryPosts', 'action' => 'view', $subcategoryPost->category_post->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subcategoryPost->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subcategoryPost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subcategoryPost->modified) ?></td>
        </tr>
    </table>
</div>
