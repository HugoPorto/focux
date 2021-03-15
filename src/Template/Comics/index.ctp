<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comic[]|\Cake\Collection\CollectionInterface $comics
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Magazines'), ['controller' => 'Magazines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Magazine'), ['controller' => 'Magazines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comics index large-9 medium-8 columns content">
    <h3><?= __('Comics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chapters') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thumb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('magazines_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comics as $comic): ?>
            <tr>
                <td><?= $this->Number->format($comic->id) ?></td>
                <td><?= h($comic->comic) ?></td>
                <td><?= h($comic->autor) ?></td>
                <td><?= h($comic->status) ?></td>
                <td><?= h($comic->categories) ?></td>
                <td><?= h($comic->chapters) ?></td>
                <td><?= h($comic->thumb) ?></td>
                <td><?= $comic->has('magazine') ? $this->Html->link($comic->magazine->magazine, ['controller' => 'Magazines', 'action' => 'view', $comic->magazine->id]) : '' ?></td>
                <td><?= h($comic->created) ?></td>
                <td><?= h($comic->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comic->id)]) ?>
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
