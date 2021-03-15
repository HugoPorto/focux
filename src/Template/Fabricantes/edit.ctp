<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fabricante $fabricante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fabricante->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fabricante->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fabricantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fabricantes form large-9 medium-8 columns content">
    <?= $this->Form->create($fabricante) ?>
    <fieldset>
        <legend><?= __('Edit Fabricante') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
