<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe[]|\Cake\Collection\CollectionInterface $recipes
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipes index large-10 medium-9 columns content">
    <h3><?= __('Recipes') ?></h3>
    <table id="general" class="display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Salarys</th>
                <th scope="col">Rentals</th>
                <th scope="col">Dividends</th>
                <th scope="col">Bonus</th>
                <th scope="col">Others</th>
                <th scope="col">Mounths_id</th>
                <th scope="col">Users_id</th>
                <th scope="col">Created</th>
                <th scope="col">Modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipes as $recipe): ?>
            <tr>
                <td><?= $this->Number->format($recipe->id) ?></td>
                <td><?= h($recipe->salarys) ?></td>
                <td><?= h($recipe->rentals) ?></td>
                <td><?= h($recipe->dividends) ?></td>
                <td><?= h($recipe->bonus) ?></td>
                <td><?= h($recipe->others) ?></td>
                <td><?= $recipe->has('mounth') ? $this->Html->link($recipe->mounth->mounth, ['controller' => 'Mounths', 'action' => 'view', $recipe->mounth->id]) : '' ?></td>
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
</div>
