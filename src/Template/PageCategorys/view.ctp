<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PageCategory $pageCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Page Category'), ['action' => 'edit', $pageCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Page Category'), ['action' => 'delete', $pageCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pageCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Page Categorys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pageCategorys view large-9 medium-8 columns content">
    <h3><?= h($pageCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($pageCategory->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pageCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pageCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pageCategory->modified) ?></td>
        </tr>
    </table>
</div>
