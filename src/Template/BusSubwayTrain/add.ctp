<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusSubwayTrain $busSubwayTrain
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bus Subway Train'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="busSubwayTrain form large-9 medium-8 columns content">
    <?= $this->Form->create($busSubwayTrain) ?>
    <fieldset>
        <legend><?= __('Add Bus Subway Train') ?></legend>
        <?php
            echo $this->Form->control('bus_subway_train');
            echo $this->Form->control('taxi_uber');
            echo $this->Form->control('vehicle_installment');
            echo $this->Form->control('car_insurance');
            echo $this->Form->control('fuel');
            echo $this->Form->control('ipva_dpvat_licensing');
            echo $this->Form->control('mechanic');
            echo $this->Form->control('fines');
            echo $this->Form->control('parking');
            echo $this->Form->control('tolls');
            echo $this->Form->control('others_financing_consortium');
            echo $this->Form->control('mounths_id', ['options' => $mounths]);
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
