<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cest $cest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cests'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cests form large-9 medium-8 columns content">
    <?= $this->Form->create($cest) ?>
    <fieldset>
        <legend><?= __('Edit Cest') ?></legend>
        <?php
            echo $this->Form->control('cest');
            echo $this->Form->control('ncm');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
