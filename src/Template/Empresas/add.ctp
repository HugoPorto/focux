<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cidades'), ['controller' => 'Cidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Add Empresa') ?></legend>
        <?php
            echo $this->Form->control('estados_id', ['options' => $estados]);
            echo $this->Form->control('cidades_id', ['options' => $cidades]);
            echo $this->Form->control('cnpj');
            echo $this->Form->control('ie');
            echo $this->Form->control('im');
            echo $this->Form->control('fantasia');
            echo $this->Form->control('razao_social');
            echo $this->Form->control('endereco');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cep');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
            echo $this->Form->control('juros_diario');
            echo $this->Form->control('multa');
            echo $this->Form->control('crt');
            echo $this->Form->control('cnae');
            echo $this->Form->control('codigo_revenda');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
