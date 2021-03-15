<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maintenance $maintenance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Maintenances'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="maintenances form large-9 medium-8 columns content">
    <?= $this->Form->create($maintenance) ?>
    <fieldset>
        <legend><?= __('Add Maintenance') ?></legend>
        <?php
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
