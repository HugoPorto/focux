<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablesmyprecious $tablesmyprecious
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tablesmyprecious'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tablesmyprecious form large-9 medium-8 columns content">
    <?= $this->Form->create($tablesmyprecious) ?>
    <fieldset>
        <legend><?= __('Add Tablesmyprecious') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
