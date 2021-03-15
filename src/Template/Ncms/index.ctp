<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ncm[]|\Cake\Collection\CollectionInterface $ncms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ncm'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ncms index large-9 medium-8 columns content">
    <h3><?= __('Ncms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aliquota_nacional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aliquota_internacional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aliquota_estadual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aliquota_municipal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ncms as $ncm): ?>
            <tr>
                <td><?= $this->Number->format($ncm->id) ?></td>
                <td><?= h($ncm->codigo) ?></td>
                <td><?= $this->Number->format($ncm->aliquota_nacional) ?></td>
                <td><?= $this->Number->format($ncm->aliquota_internacional) ?></td>
                <td><?= $this->Number->format($ncm->aliquota_estadual) ?></td>
                <td><?= $this->Number->format($ncm->aliquota_municipal) ?></td>
                <td><?= h($ncm->ativo) ?></td>
                <td><?= h($ncm->created) ?></td>
                <td><?= h($ncm->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ncm->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ncm->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ncm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ncm->id)]) ?>
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
