<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubcategoriaProduto $subcategoriaProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subcategoria Produto'), ['action' => 'edit', $subcategoriaProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subcategoria Produto'), ['action' => 'delete', $subcategoriaProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoriaProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subcategoria Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategoria Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subcategoriaProdutos view large-9 medium-8 columns content">
    <h3><?= h($subcategoriaProduto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($subcategoriaProduto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subcategoriaProduto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Categoria') ?></th>
            <td><?= $this->Number->format($subcategoriaProduto->id_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($subcategoriaProduto->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subcategoriaProduto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subcategoriaProduto->modified) ?></td>
        </tr>
    </table>
</div>
