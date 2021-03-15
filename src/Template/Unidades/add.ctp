<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidade $unidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="unidades form large-9 medium-8 columns content">
    <?= $this->Form->create($unidade) ?>
    <fieldset>
        <legend><?= __('Add Unidade') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('nome');
            echo $this->Form->control('fator_conversao');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
