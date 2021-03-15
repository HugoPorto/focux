<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablesadmin[]|\Cake\Collection\CollectionInterface $tablesadmins
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tablesadmin'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tablesadmins index large-9 medium-8 columns content">
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
            <?php foreach ($tablesadmins as $tablesadmin): ?>
            <tr>
                <td><?= $this->Number->format($tablesadmin->id) ?></td>
                <td><?= h($tablesadmin->title) ?></td>
                <td><?= h($tablesadmin->text) ?></td>
                <td><?= h($tablesadmin->link) ?></td>
                <td><?= h($tablesadmin->created) ?></td>
                <td><?= h($tablesadmin->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tablesadmin->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tablesadmin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tablesadmin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablesadmin->id)]) ?>
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
