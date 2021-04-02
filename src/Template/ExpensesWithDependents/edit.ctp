<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpensesWithDependent $expensesWithDependent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $expensesWithDependent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expensesWithDependent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Expenses With Dependents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expensesWithDependents form large-9 medium-8 columns content">
    <?= $this->Form->create($expensesWithDependent) ?>
    <fieldset>
        <legend><?= __('Edit Expenses With Dependent') ?></legend>
        <?php
            echo $this->Form->control('school_faculty');
            echo $this->Form->control('extra_courses');
            echo $this->Form->control('school_supplies');
            echo $this->Form->control('sports_uniforms');
            echo $this->Form->control('allowance');
            echo $this->Form->control('tour_vacation');
            echo $this->Form->control('clothing');
            echo $this->Form->control('health_medicines');
            echo $this->Form->control('transport');
            echo $this->Form->control('others');
            echo $this->Form->control('mounths_id', ['options' => $mounths]);
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
