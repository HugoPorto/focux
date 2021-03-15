<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicity $publicity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Publicitys'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="publicitys form large-9 medium-8 columns content">
    <?= $this->Form->create($publicity) ?>
    <fieldset>
        <legend><?= __('Add Publicity') ?></legend>
        <?php
            echo $this->Form->control('business');
            echo $this->Form->control('link');
            echo $this->Form->control('embed1');
            echo $this->Form->control('embed2');
            echo $this->Form->control('embed3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
