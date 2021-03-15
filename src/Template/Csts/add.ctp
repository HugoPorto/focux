<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cst $cst
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Csts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="csts form large-9 medium-8 columns content">
    <?= $this->Form->create($cst) ?>
    <fieldset>
        <legend><?= __('Add Cst') ?></legend>
        <?php
            echo $this->Form->control('codigotributario');
            echo $this->Form->control('descricao');
            echo $this->Form->control('icms');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
