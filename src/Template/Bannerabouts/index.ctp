<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bannerabout[]|\Cake\Collection\CollectionInterface $bannerabouts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bannerabout'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bannerabouts index large-9 medium-8 columns content">
    <h3><?= __('Bannerabouts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('text') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bannerabouts as $bannerabout): ?>
            <tr>
                <td><?= $this->Number->format($bannerabout->id) ?></td>
                <td><?= h($bannerabout->title) ?></td>
                <td><?= h($bannerabout->text) ?></td>
                <td><?= h($bannerabout->link) ?></td>
                <td><?= h($bannerabout->created) ?></td>
                <td><?= h($bannerabout->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bannerabout->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bannerabout->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bannerabout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bannerabout->id)]) ?>
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
