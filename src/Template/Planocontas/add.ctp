<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planoconta $planoconta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Planocontas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Centroresultados'), ['controller' => 'Centroresultados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centroresultado'), ['controller' => 'Centroresultados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planocontas form large-9 medium-8 columns content">
    <?= $this->Form->create($planoconta) ?>
    <fieldset>
        <legend><?= __('Add Planoconta') ?></legend>
        <?php
            echo $this->Form->control('codigo');
            echo $this->Form->control('nome');
            echo $this->Form->control('tipo_conta');
            echo $this->Form->control('categoria_conta');
            echo $this->Form->control('modo_conta');
            echo $this->Form->control('ordem');
            echo $this->Form->control('ativo');
            echo $this->Form->control('centroresultado_id', ['options' => $centroresultados]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
