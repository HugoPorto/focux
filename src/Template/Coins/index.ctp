<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coin[]|\Cake\Collection\CollectionInterface $coins
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coin'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coins index large-9 medium-8 columns content">
    <h3><?= __('Coins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iconName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coins as $coin): ?>
            <tr>
                <td><?= $this->Number->format($coin->id) ?></td>
                <td><?= h($coin->coin) ?></td>
                <td><?= h($coin->iconName) ?></td>
                <td><?= h($coin->url) ?></td>
                <td><?= h($coin->created) ?></td>
                <td><?= h($coin->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coin->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coin->id)]) ?>
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
