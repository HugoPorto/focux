<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriaProduto[]|\Cake\Collection\CollectionInterface $categoriaProdutos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categoria Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriaProdutos index large-9 medium-8 columns content">
    <h3><?= __('Categoria Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriaProdutos as $categoriaProduto): ?>
            <tr>
                <td><?= $this->Number->format($categoriaProduto->id) ?></td>
                <td><?= h($categoriaProduto->nome) ?></td>
                <td><?= $this->Number->format($categoriaProduto->ativo) ?></td>
                <td><?= $this->Number->format($categoriaProduto->comissao) ?></td>
                <td><?= h($categoriaProduto->created) ?></td>
                <td><?= h($categoriaProduto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriaProduto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriaProduto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriaProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaProduto->id)]) ?>
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
