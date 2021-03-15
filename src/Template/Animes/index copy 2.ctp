<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anime[]|\Cake\Collection\CollectionInterface $animes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animes index large-9 medium-8 columns content">
    <h3><?= __('Animes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('launch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animes as $anime): ?>
            <tr>
                <td><?= $this->Number->format($anime->id) ?></td>
                <td><?= h($anime->anime) ?></td>
                <td><?= h($anime->launch) ?></td>
                <td><?= h($anime->created) ?></td>
                <td><?= h($anime->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $anime->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anime->id]) ?>
                    <?= $this->Form->postLink(__('Add Season'), ['controller'  => 'seans', 'action' => 'add', $anime->id], ['target' => '_blank']) ?>
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
