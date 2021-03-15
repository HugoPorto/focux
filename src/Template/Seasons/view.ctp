<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Season $season
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Season'), ['action' => 'edit', $season->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Season'), ['action' => 'delete', $season->id], ['confirm' => __('Are you sure you want to delete # {0}?', $season->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seasons view large-9 medium-8 columns content">
    <h3><?= h($season->season) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Season') ?></th>
            <td><?= h($season->season) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anime') ?></th>
            <td><?= $season->has('anime') ? $this->Html->link($season->anime->anime, ['controller' => 'Animes', 'action' => 'view', $season->anime->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($season->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($season->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($season->modified) ?></td>
        </tr>
    </table>
</div>
