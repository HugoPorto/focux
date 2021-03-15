<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeesfromclient[]|\Cake\Collection\CollectionInterface $employeesfromclients
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employeesfromclient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesfromclients index large-9 medium-8 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clients_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeesfromclients as $employeesfromclient): ?>
            <tr>
                <td><?= $this->Number->format($employeesfromclient->id) ?></td>
                <td><?= h($employeesfromclient->employee) ?></td>
                <td><?= h($employeesfromclient->fone) ?></td>
                <td><?= h($employeesfromclient->login) ?></td>
                <td><?= $employeesfromclient->has('client') ? $this->Html->link($employeesfromclient->client->client, ['controller' => 'Clients', 'action' => 'view', $employeesfromclient->client->id]) : '' ?></td>
                <td><?= h($employeesfromclient->created) ?></td>
                <td><?= h($employeesfromclient->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeesfromclient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeesfromclient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeesfromclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesfromclient->id)]) ?>
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
