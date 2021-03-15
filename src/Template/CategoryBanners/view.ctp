<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryBanner $categoryBanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category Banner'), ['action' => 'edit', $categoryBanner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category Banner'), ['action' => 'delete', $categoryBanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryBanner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category Banners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Banner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoryBanners view large-9 medium-8 columns content">
    <h3><?= h($categoryBanner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($categoryBanner->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoryBanner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoryBanner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoryBanner->modified) ?></td>
        </tr>
    </table>
</div>
