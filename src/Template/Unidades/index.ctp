<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidade[]|\Cake\Collection\CollectionInterface $unidades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Unidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="unidades index large-9 medium-8 columns content">
    <h3><?= __('Unidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fator_conversao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($unidades as $unidade): ?>
            <tr>
                <td><?= $this->Number->format($unidade->id) ?></td>
                <td><?= h($unidade->descricao) ?></td>
                <td><?= h($unidade->nome) ?></td>
                <td><?= $this->Number->format($unidade->fator_conversao) ?></td>
                <td><?= h($unidade->ativo) ?></td>
                <td><?= h($unidade->created) ?></td>
                <td><?= h($unidade->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $unidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->id)]) ?>
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
