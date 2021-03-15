<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Videosseries[]|\Cake\Collection\CollectionInterface $videosseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Videosseries'), ['controller' => 'Series', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Series'), ['controller' => 'Series', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Series'), ['controller' => 'Series', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seanseries'), ['controller' => 'Seanseries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seanseries'), ['controller' => 'Seanseries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosseries index large-9 medium-8 columns content">
    <h3><?= __('Videos') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>episode</th>
                <th>thumb</th>
                <th>numepisode</th>
                <th>trend</th>
                <th>status</th>
                <th>serie</th>
                <th>season</th>
                <th>created</th>
                <th>modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videosseries as $videosseries): ?>
            <tr>
                <td><?= $this->Number->format($videosseries->id) ?></td>
                <td><?= h($videosseries->episode) ?></td>
                <td><?= h($videosseries->thumb) ?></td>
                <td><?= h($videosseries->numepisode) ?></td>
                <?php if($videosseries->trend==true): ?>
                    <td>In Trend</td>
                <?php else: ?>
                    <td>No Trend</td>
                <?php endif;?>
                <?php if($videosseries->status==true): ?>
                    <td>Active</td>
                <?php else: ?>
                    <td>Inactive</td>
                <?php endif;?>
                <td><?= $videosseries->has('series') ? $this->Html->link($videosseries->series->title, ['controller' => 'Series', 'action' => 'view', $videosseries->series->id]) : '' ?></td>
                <td><?= $videosseries->has('seanseries') ? $this->Html->link($videosseries->seanseries->name, ['controller' => 'Seanseries', 'action' => 'view', $videosseries->seanseries->id]) : '' ?></td>
                <td><?= h($videosseries->created) ?></td>
                <td><?= h($videosseries->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $videosseries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $videosseries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $videosseries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosseries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
</div>
