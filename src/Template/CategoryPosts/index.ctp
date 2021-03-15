<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryPost[]|\Cake\Collection\CollectionInterface $categoryPosts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category Post'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoryPosts index large-9 medium-8 columns content">
    <h3><?= __('Category Posts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoryPosts as $categoryPost): ?>
            <tr>
                <td><?= $this->Number->format($categoryPost->id) ?></td>
                <td><?= h($categoryPost->description) ?></td>
                <td><?= h($categoryPost->created) ?></td>
                <td><?= h($categoryPost->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoryPost->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoryPost->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoryPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryPost->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
