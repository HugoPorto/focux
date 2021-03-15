<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fornecedore $fornecedore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fornecedore'), ['action' => 'edit', $fornecedore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fornecedore'), ['action' => 'delete', $fornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Planocontas'), ['controller' => 'Planocontas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planoconta'), ['controller' => 'Planocontas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cidades'), ['controller' => 'Cidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fornecedores view large-9 medium-8 columns content">
    <h3><?= h($fornecedore->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Planoconta') ?></th>
            <td><?= $fornecedore->has('planoconta') ? $this->Html->link($fornecedore->planoconta->id, ['controller' => 'Planocontas', 'action' => 'view', $fornecedore->planoconta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($fornecedore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razao Social') ?></th>
            <td><?= h($fornecedore->razao_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj Cpf') ?></th>
            <td><?= h($fornecedore->cnpj_cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ie') ?></th>
            <td><?= h($fornecedore->ie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($fornecedore->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($fornecedore->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($fornecedore->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($fornecedore->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fone') ?></th>
            <td><?= h($fornecedore->fone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($fornecedore->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Site') ?></th>
            <td><?= h($fornecedore->email_site) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $fornecedore->has('estado') ? $this->Html->link($fornecedore->estado->id, ['controller' => 'Estados', 'action' => 'view', $fornecedore->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= $fornecedore->has('cidade') ? $this->Html->link($fornecedore->cidade->id, ['controller' => 'Cidades', 'action' => 'view', $fornecedore->cidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $fornecedore->has('empresa') ? $this->Html->link($fornecedore->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $fornecedore->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($fornecedore->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($fornecedore->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fornecedore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fornecedore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fornecedore->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Obs') ?></h4>
        <?= $this->Text->autoParagraph(h($fornecedore->obs)); ?>
    </div>
</div>
