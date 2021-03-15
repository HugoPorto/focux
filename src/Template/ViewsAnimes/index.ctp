<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ViewsAnime[]|\Cake\Collection\CollectionInterface $viewsAnimes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Views Anime'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="viewsAnimes index large-9 medium-8 columns content">
    <h3><?= __('Views Animes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_view') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($viewsAnimes as $viewsAnime): ?>
            <tr>
                <td><?= $this->Number->format($viewsAnime->id) ?></td>
                <td><?= $viewsAnime->has('anime') ? $this->Html->link($viewsAnime->anime->anime, ['controller' => 'Animes', 'action' => 'view', $viewsAnime->anime->id]) : '' ?></td>
                <td><?= $this->Number->format($viewsAnime->number_view) ?></td>
                <td><?= h($viewsAnime->created) ?></td>
                <td><?= h($viewsAnime->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $viewsAnime->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $viewsAnime->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $viewsAnime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viewsAnime->id)]) ?>
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
