<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amcvenda $amcvenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Amcvenda'), ['action' => 'edit', $amcvenda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Amcvenda'), ['action' => 'delete', $amcvenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amcvenda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Amcvendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amcvenda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['controller' => 'AmcVendasEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['controller' => 'AmcVendasEmpresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="amcvendas view large-9 medium-8 columns content">
    <h3><?= h($amcvenda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($amcvenda->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($amcvenda->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($amcvenda->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($amcvenda->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amc Vendas Empresa') ?></th>
            <td><?= $amcvenda->has('amc_vendas_empresa') ? $this->Html->link($amcvenda->amc_vendas_empresa->empresa, ['controller' => 'AmcVendasEmpresas', 'action' => 'view', $amcvenda->amc_vendas_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($amcvenda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($amcvenda->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($amcvenda->modified) ?></td>
        </tr>
    </table>
</div>
