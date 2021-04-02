<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusSubwayTrain $busSubwayTrain
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bus Subway Train'), ['action' => 'edit', $busSubwayTrain->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bus Subway Train'), ['action' => 'delete', $busSubwayTrain->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busSubwayTrain->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bus Subway Train'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus Subway Train'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="busSubwayTrain view large-9 medium-8 columns content">
    <h3><?= h($busSubwayTrain->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bus Subway Train') ?></th>
            <td><?= h($busSubwayTrain->bus_subway_train) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taxi Uber') ?></th>
            <td><?= h($busSubwayTrain->taxi_uber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehicle Installment') ?></th>
            <td><?= h($busSubwayTrain->vehicle_installment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car Insurance') ?></th>
            <td><?= h($busSubwayTrain->car_insurance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel') ?></th>
            <td><?= h($busSubwayTrain->fuel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ipva Dpvat Licensing') ?></th>
            <td><?= h($busSubwayTrain->ipva_dpvat_licensing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mechanic') ?></th>
            <td><?= h($busSubwayTrain->mechanic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fines') ?></th>
            <td><?= h($busSubwayTrain->fines) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parking') ?></th>
            <td><?= h($busSubwayTrain->parking) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tolls') ?></th>
            <td><?= h($busSubwayTrain->tolls) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others Financing Consortium') ?></th>
            <td><?= h($busSubwayTrain->others_financing_consortium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $busSubwayTrain->has('mounth') ? $this->Html->link($busSubwayTrain->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $busSubwayTrain->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $busSubwayTrain->has('user') ? $this->Html->link($busSubwayTrain->user->name, ['controller' => 'Users', 'action' => 'view', $busSubwayTrain->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($busSubwayTrain->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($busSubwayTrain->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($busSubwayTrain->modified) ?></td>
        </tr>
    </table>
</div>
