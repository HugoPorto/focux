<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BarsNightclub $barsNightclub
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bars Nightclub'), ['action' => 'edit', $barsNightclub->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bars Nightclub'), ['action' => 'delete', $barsNightclub->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barsNightclub->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bars Nightclubs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bars Nightclub'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="barsNightclubs view large-9 medium-8 columns content">
    <h3><?= h($barsNightclub->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Restaurants') ?></th>
            <td><?= h($barsNightclub->restaurants) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cafes Ice Cream Shop') ?></th>
            <td><?= h($barsNightclub->cafes_ice_cream_shop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bars Nightclubs') ?></th>
            <td><?= h($barsNightclub->bars_nightclubs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookstores') ?></th>
            <td><?= h($barsNightclub->bookstores) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tickets') ?></th>
            <td><?= h($barsNightclub->tickets) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotels') ?></th>
            <td><?= h($barsNightclub->hotels) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tours') ?></th>
            <td><?= h($barsNightclub->tours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Others') ?></th>
            <td><?= h($barsNightclub->others) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mounth') ?></th>
            <td><?= $barsNightclub->has('mounth') ? $this->Html->link($barsNightclub->mounth->id, ['controller' => 'Mounths', 'action' => 'view', $barsNightclub->mounth->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $barsNightclub->has('user') ? $this->Html->link($barsNightclub->user->name, ['controller' => 'Users', 'action' => 'view', $barsNightclub->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($barsNightclub->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($barsNightclub->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($barsNightclub->modified) ?></td>
        </tr>
    </table>
</div>
