<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MainAbout[]|\Cake\Collection\CollectionInterface $mainAbouts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Main About'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mainAbouts index large-9 medium-8 columns content">
    <h3><?= __('Main Abouts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mainAbouts as $mainAbout): ?>
            <tr>
                <td><?= $this->Number->format($mainAbout->id) ?></td>
                <td><?= h($mainAbout->title) ?></td>
                <td><?= h($mainAbout->icon) ?></td>
                <td><?= h($mainAbout->created) ?></td>
                <td><?= h($mainAbout->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mainAbout->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mainAbout->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mainAbout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mainAbout->id)]) ?>
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
