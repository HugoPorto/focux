<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seanseries[]|\Cake\Collection\CollectionInterface $seanseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Seanseries'), ['controller' => 'Series', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seanseries index large-9 medium-8 columns content">
    <h3><?= __('Seasons') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>series_id</th>
                <th>created</th>
                <th>modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seanseries as $seanseries): ?>
            <tr>
                <td><?= $this->Number->format($seanseries->id) ?></td>
                <td><?= h($seanseries->name) ?></td>
                <td><?= $seanseries->has('series') ? $this->Html->link($seanseries->series->title, ['controller' => 'Series', 'action' => 'view', $seanseries->series->id]) : '' ?></td>
                <td><?= h($seanseries->created) ?></td>
                <td><?= h($seanseries->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $seanseries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seanseries->id]) ?>
                    <?= $this->Form->postLink(__('Add Videos'), ['controller'  => 'videosseries', 'action' => 'add', $seanseries->id, $seanseries->series->id], ['target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
</div>
