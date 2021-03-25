<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HousingExpense $housingExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $housingExpense->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $housingExpense->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Housing Expenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="housingExpenses form large-9 medium-8 columns content">
    <?= $this->Form->create($housingExpense) ?>
    <fieldset>
        <legend><?= __('Edit Housing Expense') ?></legend>
        <?php
            echo $this->Form->control('rent');
            echo $this->Form->control('condominium');
            echo $this->Form->control('house_insurance');
            echo $this->Form->control('iptu');
            echo $this->Form->control('gas');
            echo $this->Form->control('light');
            echo $this->Form->control('services');
            echo $this->Form->control('tvsubscription');
            echo $this->Form->control('telephone_smartphone');
            echo $this->Form->control('installment_of_the_house');
            echo $this->Form->control('others');
            echo $this->Form->control('mounths_id', ['options' => $mounths]);
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
