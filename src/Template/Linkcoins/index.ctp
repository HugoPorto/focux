<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Linkcoin[]|\Cake\Collection\CollectionInterface $linkcoins
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Linkcoin'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coins'), ['controller' => 'Coins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coin'), ['controller' => 'Coins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="linkcoins index large-9 medium-8 columns content">
    <h3><?= __('Linkcoins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coins_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($linkcoins as $linkcoin): ?>
            <tr>
                <td><?= $this->Number->format($linkcoin->id) ?></td>
                <td><?= $linkcoin->has('coin') ? $this->Html->link($linkcoin->coin->coin, ['controller' => 'Coins', 'action' => 'view', $linkcoin->coin->id]) : '' ?></td>
                <td><?= h($linkcoin->link) ?></td>
                <td><?= $this->Number->format($linkcoin->main) ?></td>
                <td><?= h($linkcoin->created) ?></td>
                <td><?= h($linkcoin->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $linkcoin->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $linkcoin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $linkcoin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $linkcoin->id)]) ?>
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
