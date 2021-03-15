<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicity[]|\Cake\Collection\CollectionInterface $publicitys
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publicity'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publicitys index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('business') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publicitys as $publicity): ?>
            <tr>
                <td><?= $this->Number->format($publicity->id) ?></td>
                <td><?= h($publicity->business) ?></td>
                <td><?= h($publicity->link) ?></td>
                <td><?= h($publicity->created) ?></td>
                <td><?= h($publicity->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publicity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publicity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publicity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicity->id)]) ?>
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
