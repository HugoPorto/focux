<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demand $demand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demand'), ['action' => 'edit', $demand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demand'), ['action' => 'delete', $demand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demands view large-9 medium-8 columns content">
    <h3><?= h($demand->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Demandcode') ?></th>
            <td><?= h($demand->demandcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salesman') ?></th>
            <td><?= h($demand->salesman) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= h($demand->payment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valuereceive') ?></th>
            <td><?= h($demand->valuereceive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $demand->has('client') ? $this->Html->link($demand->client->client, ['controller' => 'Clients', 'action' => 'view', $demand->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $demand->has('product') ? $this->Html->link($demand->product->title, ['controller' => 'Products', 'action' => 'view', $demand->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demand->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($demand->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($demand->modified) ?></td>
        </tr>
    </table>
</div>
