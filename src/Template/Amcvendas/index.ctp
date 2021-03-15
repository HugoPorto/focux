<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amcvenda[]|\Cake\Collection\CollectionInterface $amcvendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Amcvenda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['controller' => 'AmcVendasEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['controller' => 'AmcVendasEmpresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amcvendas index large-9 medium-8 columns content">
    <h3><?= __('Amcvendas') ?></h3>
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
            <?php foreach ($amcvendas as $amcvenda): ?>
            <tr>
                <td><?= $this->Number->format($amcvenda->id) ?></td>
                <td><?= h($amcvenda->nome) ?></td>
                <td><?= h($amcvenda->usuario) ?></td>
                <td><?= h($amcvenda->email) ?></td>
                <td><?= h($amcvenda->senha) ?></td>
                <td><?= $amcvenda->has('amc_vendas_empresa') ? $this->Html->link($amcvenda->amc_vendas_empresa->empresa, ['controller' => 'AmcVendasEmpresas', 'action' => 'view', $amcvenda->amc_vendas_empresa->id]) : '' ?></td>
                <td><?= h($amcvenda->created) ?></td>
                <td><?= h($amcvenda->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $amcvenda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $amcvenda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $amcvenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amcvenda->id)]) ?>
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
