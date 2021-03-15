<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AmcVendasEmpresa $amcVendasEmpresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Amc Vendas Empresa'), ['action' => 'edit', $amcVendasEmpresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Amc Vendas Empresa'), ['action' => 'delete', $amcVendasEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amcVendasEmpresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Amc Vendas Enderecos'), ['controller' => 'AmcVendasEnderecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amc Vendas Endereco'), ['controller' => 'AmcVendasEnderecos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="amcVendasEmpresas view large-9 medium-8 columns content">
    <h3><?= h($amcVendasEmpresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= h($amcVendasEmpresa->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($amcVendasEmpresa->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($amcVendasEmpresa->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amc Vendas Endereco') ?></th>
            <td><?= $amcVendasEmpresa->has('amc_vendas_endereco') ? $this->Html->link($amcVendasEmpresa->amc_vendas_endereco->id, ['controller' => 'AmcVendasEnderecos', 'action' => 'view', $amcVendasEmpresa->amc_vendas_endereco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($amcVendasEmpresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($amcVendasEmpresa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($amcVendasEmpresa->modified) ?></td>
        </tr>
    </table>
</div>
