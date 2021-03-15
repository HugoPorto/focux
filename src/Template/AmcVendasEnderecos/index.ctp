<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AmcVendasEndereco[]|\Cake\Collection\CollectionInterface $amcVendasEnderecos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Endereco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amcVendasEnderecos index large-9 medium-8 columns content">
    <h3><?= __('Amc Vendas Enderecos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($amcVendasEnderecos as $amcVendasEndereco): ?>
            <tr>
                <td><?= $this->Number->format($amcVendasEndereco->id) ?></td>
                <td><?= h($amcVendasEndereco->endereco) ?></td>
                <td><?= h($amcVendasEndereco->bairro) ?></td>
                <td><?= h($amcVendasEndereco->numero) ?></td>
                <td><?= h($amcVendasEndereco->cep) ?></td>
                <td><?= h($amcVendasEndereco->created) ?></td>
                <td><?= h($amcVendasEndereco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $amcVendasEndereco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $amcVendasEndereco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $amcVendasEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amcVendasEndereco->id)]) ?>
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
