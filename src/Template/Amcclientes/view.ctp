<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amccliente $amccliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Amccliente'), ['action' => 'edit', $amccliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Amccliente'), ['action' => 'delete', $amccliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amccliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Amcclientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amccliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['controller' => 'AmcVendasEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['controller' => 'AmcVendasEmpresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="amcclientes view large-9 medium-8 columns content">
    <h3><?= h($amccliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($amccliente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($amccliente->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($amccliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($amccliente->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amc Vendas Empresa') ?></th>
            <td><?= $amccliente->has('amc_vendas_empresa') ? $this->Html->link($amccliente->amc_vendas_empresa->empresa, ['controller' => 'AmcVendasEmpresas', 'action' => 'view', $amccliente->amc_vendas_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($amccliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($amccliente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($amccliente->modified) ?></td>
        </tr>
    </table>
</div>
