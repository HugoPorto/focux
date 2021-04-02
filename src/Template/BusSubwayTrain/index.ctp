<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusSubwayTrain[]|\Cake\Collection\CollectionInterface $busSubwayTrain
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bus Subway Train'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="busSubwayTrain index large-9 medium-8 columns content">
    <h3><?= __('Bus Subway Train') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bus_subway_train') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taxi_uber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehicle_installment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_insurance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fuel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ipva_dpvat_licensing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mechanic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fines') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parking') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tolls') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others_financing_consortium') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($busSubwayTrain as $busSubwayTrain): ?>
            <tr>
                <td><?= $this->Number->format($busSubwayTrain->id) ?></td>
                <td><?= h($busSubwayTrain->bus_subway_train) ?></td>
                <td><?= h($busSubwayTrain->taxi_uber) ?></td>
                <td><?= h($busSubwayTrain->vehicle_installment) ?></td>
                <td><?= h($busSubwayTrain->car_insurance) ?></td>
                <td><?= h($busSubwayTrain->fuel) ?></td>
                <td><?= h($busSubwayTrain->ipva_dpvat_licensing) ?></td>
                <td><?= h($busSubwayTrain->mechanic) ?></td>
                <td><?= h($busSubwayTrain->fines) ?></td>
                <td><?= h($busSubwayTrain->parking) ?></td>
                <td><?= h($busSubwayTrain->tolls) ?></td>
                <td><?= h($busSubwayTrain->others_financing_consortium) ?></td>
                <td><?= $busSubwayTrain->has('mounth') ? $this->Html->link($busSubwayTrain->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $busSubwayTrain->mounth->id]) : '' ?></td>
                <td><?= $busSubwayTrain->has('user') ? $this->Html->link($busSubwayTrain->user->name, ['controller' => 'Users', 'action' => 'view', $busSubwayTrain->user->id]) : '' ?></td>
                <td><?= h($busSubwayTrain->created) ?></td>
                <td><?= h($busSubwayTrain->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $busSubwayTrain->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $busSubwayTrain->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $busSubwayTrain->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busSubwayTrain->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
