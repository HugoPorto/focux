<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series[]|\Cake\Collection\CollectionInterface $series
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Series'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genreseries'), ['controller' => 'Genreseries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genreseries'), ['controller' => 'Genreseries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="series index large-9 medium-8 columns content">
    <h3><?= __('Series') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>trend</th>
                <th>status</th>
                <th>genreseries_id</th>
                <th>created</th>
                <th>modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($series as $series): ?>
            <tr>
                <td><?= $this->Number->format($series->id) ?></td>
                <td><?= h($series->title) ?></td>
                <?php if($series->trend==true): ?>
                    <td>In Trend</td>
                <?php else: ?>
                    <td>No Trend</td>
                <?php endif;?>
                <?php if($series->status==true): ?>
                    <td>Active</td>
                <?php else: ?>
                    <td>Inactive</td>
                <?php endif;?>
                
                <td><?= $series->has('genreseries') ? $this->Html->link($series->genreseries->name, ['controller' => 'Genreseries', 'action' => 'view', $series->genreseries->id]) : '' ?></td>
                <td><?= h($series->created) ?></td>
                <td><?= h($series->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $series->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $series->id]) ?>
                    <?= $this->Form->postLink(__('Add Season'), ['controller'  => 'seanseries', 'action' => 'add', $series->id], ['target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
</div>
