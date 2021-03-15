<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupotributacoes'), ['controller' => 'Grupotributacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupotributaco'), ['controller' => 'Grupotributacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Produtos'), ['controller' => 'CategoriaProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria Produto'), ['controller' => 'CategoriaProdutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cfops'), ['controller' => 'Cfops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cfop'), ['controller' => 'Cfops', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Csts'), ['controller' => 'Csts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cst'), ['controller' => 'Csts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ncms'), ['controller' => 'Ncms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ncm'), ['controller' => 'Ncms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cests'), ['controller' => 'Cests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cest'), ['controller' => 'Cests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fabricantes'), ['controller' => 'Fabricantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fabricante'), ['controller' => 'Fabricantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subcategoria Produtos'), ['controller' => 'SubcategoriaProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subcategoria Produto'), ['controller' => 'SubcategoriaProdutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtos index large-9 medium-8 columns content">
    <h3><?= __('Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_barras') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $this->Number->format($produto->id) ?></td>
                <td><?= h($produto->codigo) ?></td>
                <td><?= h($produto->referencia) ?></td>
                <td><?= h($produto->codigo_barras) ?></td>
                <td><?= h($produto->nome) ?></td>
                <td><?= h($produto->descricao) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
