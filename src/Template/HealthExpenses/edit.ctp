<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthExpense $healthExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $healthExpense->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $healthExpense->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Health Expenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="healthExpenses form large-9 medium-8 columns content">
    <?= $this->Form->create($healthExpense) ?>
    <fieldset>
        <legend><?= __('Edit Health Expense') ?></legend>
        <?php
            echo $this->Form->control('health_plan');
            echo $this->Form->control('medical_appointment');
            echo $this->Form->control('exams');
            echo $this->Form->control('dentist');
            echo $this->Form->control('medicaments');
            echo $this->Form->control('therapy');
            echo $this->Form->control('life_insurance');
            echo $this->Form->control('others');
            echo $this->Form->control('mounths_id', ['options' => $mounths]);
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
