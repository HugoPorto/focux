<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MypreciousTitle[]|\Cake\Collection\CollectionInterface $mypreciousTitles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Myprecious Title'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mypreciousTitles index large-9 medium-8 columns content">
    <h3><?= __('Myprecious Titles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('page') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mypreciousTitles as $mypreciousTitle): ?>
            <tr>
                <td><?= $this->Number->format($mypreciousTitle->id) ?></td>
                <td><?= h($mypreciousTitle->title) ?></td>
                <td><?= h($mypreciousTitle->page) ?></td>
                <td><?= h($mypreciousTitle->created) ?></td>
                <td><?= h($mypreciousTitle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mypreciousTitle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mypreciousTitle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mypreciousTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mypreciousTitle->id)]) ?>
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
