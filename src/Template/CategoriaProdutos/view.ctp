<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriaProduto $categoriaProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria Produto'), ['action' => 'edit', $categoriaProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria Produto'), ['action' => 'delete', $categoriaProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriaProdutos view large-9 medium-8 columns content">
    <h3><?= h($categoriaProduto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($categoriaProduto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriaProduto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($categoriaProduto->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comissao') ?></th>
            <td><?= $this->Number->format($categoriaProduto->comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoriaProduto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoriaProduto->modified) ?></td>
        </tr>
    </table>
</div>
