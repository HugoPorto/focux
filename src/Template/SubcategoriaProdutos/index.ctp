<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubcategoriaProduto[]|\Cake\Collection\CollectionInterface $subcategoriaProdutos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subcategoria Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcategoriaProdutos index large-9 medium-8 columns content">
    <h3><?= __('Subcategoria Produtos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subcategoriaProdutos as $subcategoriaProduto): ?>
            <tr>
                <td><?= $this->Number->format($subcategoriaProduto->id) ?></td>
                <td><?= h($subcategoriaProduto->nome) ?></td>
                <td><?= $this->Number->format($subcategoriaProduto->id_categoria) ?></td>
                <td><?= $this->Number->format($subcategoriaProduto->ativo) ?></td>
                <td><?= h($subcategoriaProduto->created) ?></td>
                <td><?= h($subcategoriaProduto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subcategoriaProduto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcategoriaProduto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcategoriaProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoriaProduto->id)]) ?>
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
