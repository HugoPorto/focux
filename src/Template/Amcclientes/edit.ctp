<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amccliente $amccliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $amccliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $amccliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Amcclientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['controller' => 'AmcVendasEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['controller' => 'AmcVendasEmpresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amcclientes form large-9 medium-8 columns content">
    <?= $this->Form->create($amccliente) ?>
    <fieldset>
        <legend><?= __('Edit Amccliente') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('usuario');
            echo $this->Form->control('email');
            echo $this->Form->control('senha');
            echo $this->Form->control('amc_vendas_empresas_id', ['options' => $amcVendasEmpresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
