<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cidades'), ['controller' => 'Cidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $empresa->has('estado') ? $this->Html->link($empresa->estado->id, ['controller' => 'Estados', 'action' => 'view', $empresa->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= $empresa->has('cidade') ? $this->Html->link($empresa->cidade->id, ['controller' => 'Cidades', 'action' => 'view', $empresa->cidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($empresa->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ie') ?></th>
            <td><?= h($empresa->ie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Im') ?></th>
            <td><?= h($empresa->im) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fantasia') ?></th>
            <td><?= h($empresa->fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razao Social') ?></th>
            <td><?= h($empresa->razao_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($empresa->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($empresa->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($empresa->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($empresa->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($empresa->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($empresa->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crt') ?></th>
            <td><?= h($empresa->crt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnae') ?></th>
            <td><?= h($empresa->cnae) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Revenda') ?></th>
            <td><?= h($empresa->codigo_revenda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($empresa->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Juros Diario') ?></th>
            <td><?= $this->Number->format($empresa->juros_diario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Multa') ?></th>
            <td><?= $this->Number->format($empresa->multa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
</div>
