<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sean $sean
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Season'), ['action' => 'edit', $sean->id]) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Animes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seans view large-9 medium-8 columns content">
    <h3><?= h($sean->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($sean->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anime') ?></th>
            <td><?= $sean->has('anime') ? $this->Html->link($sean->anime->anime, ['controller' => 'Animes', 'action' => 'view', $sean->anime->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sean->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sean->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sean->modified) ?></td>
        </tr>
    </table>
</div>
