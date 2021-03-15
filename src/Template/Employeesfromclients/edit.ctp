<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeesfromclient $employeesfromclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employeesfromclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employeesfromclient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employeesfromclients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesfromclients form large-9 medium-8 columns content">
    <?= $this->Form->create($employeesfromclient) ?>
    <fieldset>
        <legend><?= __('Edit Employees') ?></legend>
        <?php
            echo $this->Form->control('employee');
            echo $this->Form->control('fone');
            echo $this->Form->control('login');
            echo $this->Form->control('password');
            echo $this->Form->control('clients_id', ['options' => $clients]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
