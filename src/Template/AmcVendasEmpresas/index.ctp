<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AmcVendasEmpresa[]|\Cake\Collection\CollectionInterface $amcVendasEmpresas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Enderecos'), ['controller' => 'AmcVendasEnderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Endereco'), ['controller' => 'AmcVendasEnderecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amcVendasEmpresas index large-9 medium-8 columns content">
    <h3><?= __('Amc Vendas Empresas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amc_vendas_enderecos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($amcVendasEmpresas as $amcVendasEmpresa): ?>
            <tr>
                <td><?= $this->Number->format($amcVendasEmpresa->id) ?></td>
                <td><?= h($amcVendasEmpresa->empresa) ?></td>
                <td><?= h($amcVendasEmpresa->telefone) ?></td>
                <td><?= h($amcVendasEmpresa->celular) ?></td>
                <td><?= $amcVendasEmpresa->has('amc_vendas_endereco') ? $this->Html->link($amcVendasEmpresa->amc_vendas_endereco->id, ['controller' => 'AmcVendasEnderecos', 'action' => 'view', $amcVendasEmpresa->amc_vendas_endereco->id]) : '' ?></td>
                <td><?= h($amcVendasEmpresa->created) ?></td>
                <td><?= h($amcVendasEmpresa->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $amcVendasEmpresa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $amcVendasEmpresa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $amcVendasEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amcVendasEmpresa->id)]) ?>
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
