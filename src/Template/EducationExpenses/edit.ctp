<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EducationExpense $educationExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $educationExpense->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $educationExpense->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Education Expenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="educationExpenses form large-9 medium-8 columns content">
    <?= $this->Form->create($educationExpense) ?>
    <fieldset>
        <legend><?= __('Edit Education Expense') ?></legend>
        <?php
            echo $this->Form->control('graduation');
            echo $this->Form->control('postgraduate_studies');
            echo $this->Form->control('specialization_courses');
            echo $this->Form->control('language_courses');
            echo $this->Form->control('others');
            echo $this->Form->control('mounths_id', ['options' => $mounths]);
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
