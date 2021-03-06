<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amccliente[]|\Cake\Collection\CollectionInterface $amcclientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Amccliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['controller' => 'AmcVendasEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['controller' => 'AmcVendasEmpresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amcclientes index large-9 medium-8 columns content">
    <h3><?= __('Amcclientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amc_vendas_empresas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($amcclientes as $amccliente): ?>
            <tr>
                <td><?= $this->Number->format($amccliente->id) ?></td>
                <td><?= h($amccliente->nome) ?></td>
                <td><?= h($amccliente->usuario) ?></td>
                <td><?= h($amccliente->email) ?></td>
                <td><?= h($amccliente->senha) ?></td>
                <td><?= $amccliente->has('amc_vendas_empresa') ? $this->Html->link($amccliente->amc_vendas_empresa->empresa, ['controller' => 'AmcVendasEmpresas', 'action' => 'view', $amccliente->amc_vendas_empresa->id]) : '' ?></td>
                <td><?= h($amccliente->created) ?></td>
                <td><?= h($amccliente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $amccliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $amccliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $amccliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amccliente->id)]) ?>
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
