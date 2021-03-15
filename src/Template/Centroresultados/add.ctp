<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centroresultado $centroresultado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Centroresultados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="centroresultados form large-9 medium-8 columns content">
    <?= $this->Form->create($centroresultado) ?>
    <fieldset>
        <legend><?= __('Add Centroresultado') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
