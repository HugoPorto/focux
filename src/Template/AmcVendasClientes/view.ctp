<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amcvendascliente $amcvendascliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Amcvendascliente'), ['action' => 'edit', $amcvendascliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Amcvendascliente'), ['action' => 'delete', $amcvendascliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amcvendascliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Amcvendasclientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amcvendascliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['controller' => 'AmcVendasEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['controller' => 'AmcVendasEmpresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="amcvendasclientes view large-9 medium-8 columns content">
    <h3><?= h($amcvendascliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($amcvendascliente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($amcvendascliente->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($amcvendascliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($amcvendascliente->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amc Vendas Empresa') ?></th>
            <td><?= $amcvendascliente->has('amc_vendas_empresa') ? $this->Html->link($amcvendascliente->amc_vendas_empresa->empresa, ['controller' => 'AmcVendasEmpresas', 'action' => 'view', $amcvendascliente->amc_vendas_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($amcvendascliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($amcvendascliente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($amcvendascliente->modified) ?></td>
        </tr>
    </table>
</div>
