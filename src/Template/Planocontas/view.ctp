<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planoconta $planoconta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Planoconta'), ['action' => 'edit', $planoconta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Planoconta'), ['action' => 'delete', $planoconta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planoconta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Planocontas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planoconta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centroresultados'), ['controller' => 'Centroresultados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centroresultado'), ['controller' => 'Centroresultados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="planocontas view large-9 medium-8 columns content">
    <h3><?= h($planoconta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($planoconta->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($planoconta->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Conta') ?></th>
            <td><?= h($planoconta->tipo_conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria Conta') ?></th>
            <td><?= h($planoconta->categoria_conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modo Conta') ?></th>
            <td><?= h($planoconta->modo_conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= h($planoconta->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($planoconta->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centroresultado') ?></th>
            <td><?= $planoconta->has('centroresultado') ? $this->Html->link($planoconta->centroresultado->id, ['controller' => 'Centroresultados', 'action' => 'view', $planoconta->centroresultado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($planoconta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($planoconta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($planoconta->modified) ?></td>
        </tr>
    </table>
</div>
