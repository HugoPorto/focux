<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animevideo[]|\Cake\Collection\CollectionInterface $animevideos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Animevideo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seans'), ['controller' => 'Seans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sean'), ['controller' => 'Seans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animevideos index large-9 medium-8 columns content">
    <h3><?= __('Animevideos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('episode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thumb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numepisode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seans_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animevideos as $animevideo): ?>
            <tr>
                <td><?= $this->Number->format($animevideo->id) ?></td>
                <td><?= h($animevideo->episode) ?></td>
                <td><?= h($animevideo->thumb) ?></td>
                <td><?= h($animevideo->numepisode) ?></td>
                <td><?= $animevideo->has('anime') ? $this->Html->link($animevideo->anime->anime, ['controller' => 'Animes', 'action' => 'view', $animevideo->anime->id]) : '' ?></td>
                <td><?= $animevideo->has('sean') ? $this->Html->link($animevideo->sean->name, ['controller' => 'Seans', 'action' => 'view', $animevideo->sean->id]) : '' ?></td>
                <td><?= h($animevideo->created) ?></td>
                <td><?= h($animevideo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animevideo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animevideo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animevideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animevideo->id)]) ?>
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
