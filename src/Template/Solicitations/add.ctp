<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitation $solicitation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Solicitations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="solicitations form large-9 medium-8 columns content">
    <?= $this->Form->create($solicitation) ?>
    <fieldset>
        <legend><?= __('Add Solicitation') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
