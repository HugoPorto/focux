<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablestubex $tablestubex
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tablestubex'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tablestubex form large-9 medium-8 columns content">
    <?= $this->Form->create($tablestubex) ?>
    <fieldset>
        <legend><?= __('Add Tablestubex') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
