<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banner'), ['action' => 'edit', $banner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banner'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Banners'), ['controller' => 'CategoryBanners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Banner'), ['controller' => 'CategoryBanners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="banners view large-9 medium-8 columns content">
    <h3><?= h($banner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($banner->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Banner') ?></th>
            <td><?= $banner->has('category_banner') ? $this->Html->link($banner->category_banner->category, ['controller' => 'CategoryBanners', 'action' => 'view', $banner->category_banner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($banner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($banner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($banner->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Banner') ?></h4>
        <?= $this->Text->autoParagraph(h($banner->banner)); ?>
    </div>
</div>
