<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cst[]|\Cake\Collection\CollectionInterface $csts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cst'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="csts index large-9 medium-8 columns content">
    <h3><?= __('Csts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigotributario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($csts as $cst): ?>
            <tr>
                <td><?= $this->Number->format($cst->id) ?></td>
                <td><?= h($cst->codigotributario) ?></td>
                <td><?= h($cst->descricao) ?></td>
                <td><?= $this->Number->format($cst->icms) ?></td>
                <td><?= h($cst->ativo) ?></td>
                <td><?= h($cst->created) ?></td>
                <td><?= h($cst->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cst->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cst->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cst->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cst->id)]) ?>
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
