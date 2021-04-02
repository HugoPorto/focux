<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BarsNightclub[]|\Cake\Collection\CollectionInterface $barsNightclubs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bars Nightclub'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barsNightclubs index large-9 medium-8 columns content">
    <h3><?= __('Bars Nightclubs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('restaurants') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cafes_ice_cream_shop') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bars_nightclubs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotels') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barsNightclubs as $barsNightclub): ?>
            <tr>
                <td><?= $this->Number->format($barsNightclub->id) ?></td>
                <td><?= h($barsNightclub->restaurants) ?></td>
                <td><?= h($barsNightclub->cafes_ice_cream_shop) ?></td>
                <td><?= h($barsNightclub->bars_nightclubs) ?></td>
                <td><?= h($barsNightclub->bookstores) ?></td>
                <td><?= h($barsNightclub->tickets) ?></td>
                <td><?= h($barsNightclub->hotels) ?></td>
                <td><?= h($barsNightclub->tours) ?></td>
                <td><?= h($barsNightclub->others) ?></td>
                <td><?= $barsNightclub->has('mounth') ? $this->Html->link($barsNightclub->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $barsNightclub->mounth->id]) : '' ?></td>
                <td><?= $barsNightclub->has('user') ? $this->Html->link($barsNightclub->user->name, ['controller' => 'Users', 'action' => 'view', $barsNightclub->user->id]) : '' ?></td>
                <td><?= h($barsNightclub->created) ?></td>
                <td><?= h($barsNightclub->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $barsNightclub->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barsNightclub->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barsNightclub->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barsNightclub->id)]) ?>
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
