<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AmcVendasEndereco $amcVendasEndereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Amc Vendas Endereco'), ['action' => 'edit', $amcVendasEndereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Amc Vendas Endereco'), ['action' => 'delete', $amcVendasEndereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amcVendasEndereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Amc Vendas Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amc Vendas Endereco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="amcVendasEnderecos view large-9 medium-8 columns content">
    <h3><?= h($amcVendasEndereco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($amcVendasEndereco->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($amcVendasEndereco->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($amcVendasEndereco->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($amcVendasEndereco->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($amcVendasEndereco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($amcVendasEndereco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($amcVendasEndereco->modified) ?></td>
        </tr>
    </table>
</div>
