<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Updatetrend $updatetrend
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Updatetrends'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="updatetrends form large-9 medium-8 columns content">
    <?= $this->Form->create($updatetrend) ?>
    <fieldset>
        <legend><?= __('Add Updatetrend') ?></legend>
        <?php
            echo $this->Form->control('updatetrends');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
