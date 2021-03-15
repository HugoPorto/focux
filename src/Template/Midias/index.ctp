<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Midia[]|\Cake\Collection\CollectionInterface $midias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Midia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="midias index large-9 medium-8 columns content">
    <h3><?= __('Midias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($midias as $midia): ?>
            <tr>
                <td><?= $this->Number->format($midia->id) ?></td>
                <td><?= h($midia->icon) ?></td>
                <td><?= h($midia->link) ?></td>
                <td><?= h($midia->created) ?></td>
                <td><?= h($midia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $midia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $midia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $midia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $midia->id)]) ?>
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
