<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablescolibri[]|\Cake\Collection\CollectionInterface $tablescolibris
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tablescolibri'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tablescolibris index large-9 medium-8 columns content">
    <h3><?= __('Tablescolibris') ?></h3>
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
            <?php foreach ($tablescolibris as $tablescolibri): ?>
            <tr>
                <td><?= $this->Number->format($tablescolibri->id) ?></td>
                <td><?= h($tablescolibri->title) ?></td>
                <td><?= h($tablescolibri->text) ?></td>
                <td><?= h($tablescolibri->link) ?></td>
                <td><?= h($tablescolibri->created) ?></td>
                <td><?= h($tablescolibri->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tablescolibri->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tablescolibri->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tablescolibri->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablescolibri->id)]) ?>
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
