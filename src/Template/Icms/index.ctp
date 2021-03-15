<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Icm[]|\Cake\Collection\CollectionInterface $icms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Icm'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="icms index large-9 medium-8 columns content">
    <h3><?= __('Icms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_icms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_icms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desc_icms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($icms as $icm): ?>
            <tr>
                <td><?= $this->Number->format($icm->id_icms) ?></td>
                <td><?= h($icm->codigo_icms) ?></td>
                <td><?= h($icm->desc_icms) ?></td>
                <td><?= h($icm->created) ?></td>
                <td><?= h($icm->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $icm->id_icms]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $icm->id_icms]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $icm->id_icms], ['confirm' => __('Are you sure you want to delete # {0}?', $icm->id_icms)]) ?>
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
