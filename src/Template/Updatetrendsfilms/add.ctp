<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Updatetrendsfilm $updatetrendsfilm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Updatetrendsfilms'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="updatetrendsfilms form large-9 medium-8 columns content">
    <?= $this->Form->create($updatetrendsfilm) ?>
    <fieldset>
        <legend><?= __('Add Updatetrendsfilm') ?></legend>
        <?php
            echo $this->Form->control('updatetrendsfilms');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
