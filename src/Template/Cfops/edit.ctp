<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cfop $cfop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cfop->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cfop->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cfops'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cfops form large-9 medium-8 columns content">
    <?= $this->Form->create($cfop) ?>
    <fieldset>
        <legend><?= __('Edit Cfop') ?></legend>
        <?php
            echo $this->Form->control('codigocfop');
            echo $this->Form->control('descricao');
            echo $this->Form->control('aplicacao');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
