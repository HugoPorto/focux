<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fornecedore $fornecedore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Planocontas'), ['controller' => 'Planocontas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planoconta'), ['controller' => 'Planocontas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cidades'), ['controller' => 'Cidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fornecedores form large-9 medium-8 columns content">
    <?= $this->Form->create($fornecedore) ?>
    <fieldset>
        <legend><?= __('Add Fornecedore') ?></legend>
        <?php
            echo $this->Form->control('planocontas_id', ['options' => $planocontas, 'empty' => true]);
            echo $this->Form->control('nome');
            echo $this->Form->control('razao_social');
            echo $this->Form->control('cnpj_cpf');
            echo $this->Form->control('ie');
            echo $this->Form->control('endereco');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cep');
            echo $this->Form->control('fone');
            echo $this->Form->control('fax');
            echo $this->Form->control('email_site');
            echo $this->Form->control('obs');
            echo $this->Form->control('estados_id', ['options' => $estados]);
            echo $this->Form->control('cidades_id', ['options' => $cidades]);
            echo $this->Form->control('empresas_id', ['options' => $empresas]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
