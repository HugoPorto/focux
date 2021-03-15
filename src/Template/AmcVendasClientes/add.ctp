<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amcvendascliente $amcvendascliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Amcvendasclientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['controller' => 'AmcVendasEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Empresa'), ['controller' => 'AmcVendasEmpresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amcvendasclientes form large-9 medium-8 columns content">
    <?= $this->Form->create($amcvendascliente) ?>
    <fieldset>
        <legend><?= __('Add Amcvendascliente') ?></legend>
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
