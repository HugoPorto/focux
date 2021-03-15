<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubcategoriaProduto $subcategoriaProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subcategoria Produtos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="subcategoriaProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($subcategoriaProduto) ?>
    <fieldset>
        <legend><?= __('Add Subcategoria Produto') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('id_categoria');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
