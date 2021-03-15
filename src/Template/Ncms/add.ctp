<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ncm $ncm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ncms'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ncms form large-9 medium-8 columns content">
    <?= $this->Form->create($ncm) ?>
    <fieldset>
        <legend><?= __('Add Ncm') ?></legend>
        <?php
            echo $this->Form->control('codigo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('aliquota_nacional');
            echo $this->Form->control('aliquota_internacional');
            echo $this->Form->control('aliquota_estadual');
            echo $this->Form->control('aliquota_municipal');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
