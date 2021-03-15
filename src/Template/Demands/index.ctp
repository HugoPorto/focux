<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demand[]|\Cake\Collection\CollectionInterface $demands
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demand'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demands index large-9 medium-8 columns content">
    <h3><?= __('Demands') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demandcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salesman') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valuereceive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clients_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demands as $demand): ?>
            <tr>
                <td><?= $this->Number->format($demand->id) ?></td>
                <td><?= h($demand->demandcode) ?></td>
                <td><?= h($demand->salesman) ?></td>
                <td><?= h($demand->payment) ?></td>
                <td><?= h($demand->valuereceive) ?></td>
                <td><?= $demand->has('client') ? $this->Html->link($demand->client->client, ['controller' => 'Clients', 'action' => 'view', $demand->client->id]) : '' ?></td>
                <td><?= $demand->has('product') ? $this->Html->link($demand->product->title, ['controller' => 'Products', 'action' => 'view', $demand->product->id]) : '' ?></td>
                <td><?= h($demand->created) ?></td>
                <td><?= h($demand->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demand->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demand->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demand->id)]) ?>
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
