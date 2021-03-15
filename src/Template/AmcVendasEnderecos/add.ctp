<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AmcVendasEndereco $amcVendasEndereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Amc Vendas Enderecos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="amcVendasEnderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($amcVendasEndereco) ?>
    <fieldset>
        <legend><?= __('Add Amc Vendas Endereco') ?></legend>
        <?php
            echo $this->Form->control('endereco');
            echo $this->Form->control('bairro');
            echo $this->Form->control('numero');
            echo $this->Form->control('cep');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
