<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubcategoryPost[]|\Cake\Collection\CollectionInterface $subcategoryPosts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subcategory Post'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category Posts'), ['controller' => 'CategoryPosts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Post'), ['controller' => 'CategoryPosts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcategoryPosts index large-9 medium-8 columns content">
    <h3><?= __('Subcategory Posts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_posts_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subcategoryPosts as $subcategoryPost): ?>
            <tr>
                <td><?= $this->Number->format($subcategoryPost->id) ?></td>
                <td><?= h($subcategoryPost->description) ?></td>
                <td><?= $subcategoryPost->has('category_post') ? $this->Html->link($subcategoryPost->category_post->description, ['controller' => 'CategoryPosts', 'action' => 'view', $subcategoryPost->category_post->id]) : '' ?></td>
                <td><?= h($subcategoryPost->created) ?></td>
                <td><?= h($subcategoryPost->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subcategoryPost->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcategoryPost->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcategoryPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoryPost->id)]) ?>
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
