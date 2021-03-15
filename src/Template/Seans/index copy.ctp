<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sean[]|\Cake\Collection\CollectionInterface $seans
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sean'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seans index large-9 medium-8 columns content">
    <h3><?= __('Seans') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seans as $sean): ?>
            <tr>
                <td><?= $this->Number->format($sean->id) ?></td>
                <td><?= h($sean->name) ?></td>
                <td><?= $sean->has('anime') ? $this->Html->link($sean->anime->anime, ['controller' => 'Animes', 'action' => 'view', $sean->anime->id]) : '' ?></td>
                <td><?= h($sean->created) ?></td>
                <td><?= h($sean->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sean->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sean->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sean->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sean->id)]) ?>
                    <?= $this->Form->postLink(__('Add Videos'), ['controller'  => 'anvideos', 'action' => 'addvideos', $sean->id, $sean->anime->id], ['target' => '_blank']) ?>
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
