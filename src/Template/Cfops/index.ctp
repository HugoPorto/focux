<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cfop[]|\Cake\Collection\CollectionInterface $cfops
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cfop'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cfops index large-9 medium-8 columns content">
    <h3><?= __('Cfops') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigocfop') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cfops as $cfop): ?>
            <tr>
                <td><?= $this->Number->format($cfop->id) ?></td>
                <td><?= h($cfop->codigocfop) ?></td>
                <td><?= h($cfop->descricao) ?></td>
                <td><?= h($cfop->ativo) ?></td>
                <td><?= h($cfop->created) ?></td>
                <td><?= h($cfop->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cfop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cfop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cfop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cfop->id)]) ?>
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
