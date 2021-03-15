<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidade $unidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Unidade'), ['action' => 'edit', $unidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unidade'), ['action' => 'delete', $unidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Unidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="unidades view large-9 medium-8 columns content">
    <h3><?= h($unidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($unidade->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($unidade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($unidade->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($unidade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fator Conversao') ?></th>
            <td><?= $this->Number->format($unidade->fator_conversao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($unidade->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($unidade->modified) ?></td>
        </tr>
    </table>
</div>
