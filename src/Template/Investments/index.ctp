<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Investment[]|\Cake\Collection\CollectionInterface $investments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Investment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="investments index large-9 medium-8 columns content">
    <h3><?= __('Investments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('private_pension') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cdbs_lcis_lcas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('investment_funds') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direct_treasure') ?></th>
                <th scope="col"><?= $this->Paginator->sort('loans') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($investments as $investment): ?>
            <tr>
                <td><?= $this->Number->format($investment->id) ?></td>
                <td><?= h($investment->actions) ?></td>
                <td><?= h($investment->private_pension) ?></td>
                <td><?= h($investment->cdbs_lcis_lcas) ?></td>
                <td><?= h($investment->investment_funds) ?></td>
                <td><?= h($investment->direct_treasure) ?></td>
                <td><?= h($investment->loans) ?></td>
                <td><?= h($investment->others) ?></td>
                <td><?= $investment->has('mounth') ? $this->Html->link($investment->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $investment->mounth->id]) : '' ?></td>
                <td><?= $investment->has('user') ? $this->Html->link($investment->user->name, ['controller' => 'Users', 'action' => 'view', $investment->user->id]) : '' ?></td>
                <td><?= h($investment->created) ?></td>
                <td><?= h($investment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $investment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $investment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $investment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $investment->id)]) ?>
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
