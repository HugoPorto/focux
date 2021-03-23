<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe[]|\Cake\Collection\CollectionInterface $recipes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipes index large-9 medium-8 columns content">
    <h3><?= __('Recipes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salarys') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rentals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prolabores') ?></th>
                <th scope="col"><?= $this->Paginator->sort('other_fixed_revenues') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dividends') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commissions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thirteen_salarys') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bonus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mounths_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipes as $recipe): ?>
            <tr>
                <td><?= $this->Number->format($recipe->id) ?></td>
                <td><?= h($recipe->salarys) ?></td>
                <td><?= h($recipe->rentals) ?></td>
                <td><?= h($recipe->prolabores) ?></td>
                <td><?= h($recipe->other_fixed_revenues) ?></td>
                <td><?= h($recipe->dividends) ?></td>
                <td><?= h($recipe->commissions) ?></td>
                <td><?= h($recipe->thirteen_salarys) ?></td>
                <td><?= h($recipe->bonus) ?></td>
                <td><?= h($recipe->others) ?></td>
                <td><?= $recipe->has('mounth') ? $this->Html->link($recipe->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $recipe->mounth->id]) : '' ?></td>
                <td><?= $recipe->has('user') ? $this->Html->link($recipe->user->name, ['controller' => 'Users', 'action' => 'view', $recipe->user->id]) : '' ?></td>
                <td><?= h($recipe->created) ?></td>
                <td><?= h($recipe->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recipe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?>
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
