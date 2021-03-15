<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AmcVendasEmpresa $amcVendasEmpresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Enderecos'), ['controller' => 'AmcVendasEnderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amc Vendas Endereco'), ['controller' => 'AmcVendasEnderecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amcVendasEmpresas form large-9 medium-8 columns content">
    <?= $this->Form->create($amcVendasEmpresa) ?>
    <fieldset>
        <legend><?= __('Add Amc Vendas Empresa') ?></legend>
        <?php
            echo $this->Form->control('empresa');
            echo $this->Form->control('telefone');
            echo $this->Form->control('celular');
            echo $this->Form->control('amc_vendas_enderecos_id', ['options' => $amcVendasEnderecos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
