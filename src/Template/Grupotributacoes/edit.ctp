<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupotributaco $grupotributaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $grupotributaco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $grupotributaco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Grupotributacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Csts'), ['controller' => 'Csts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cst'), ['controller' => 'Csts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cfops'), ['controller' => 'Cfops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cfop'), ['controller' => 'Cfops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grupotributacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($grupotributaco) ?>
    <fieldset>
        <legend><?= __('Edit Grupotributaco') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('csts_id', ['options' => $csts]);
            echo $this->Form->control('cfops_id', ['options' => $cfops]);
            echo $this->Form->control('origem');
            echo $this->Form->control('icms_saida_aliquota');
            echo $this->Form->control('icms_saida_aliquota_red_base_calc');
            echo $this->Form->control('pis_saida');
            echo $this->Form->control('pis_saida_aliquota');
            echo $this->Form->control('cofins_saida');
            echo $this->Form->control('cofins_saida_aliquota');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
