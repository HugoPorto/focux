<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MypreciousTitle $mypreciousTitle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Myprecious Title'), ['action' => 'edit', $mypreciousTitle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Myprecious Title'), ['action' => 'delete', $mypreciousTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mypreciousTitle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Myprecious Titles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Myprecious Title'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mypreciousTitles view large-9 medium-8 columns content">
    <h3><?= h($mypreciousTitle->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($mypreciousTitle->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Page') ?></th>
            <td><?= h($mypreciousTitle->page) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mypreciousTitle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mypreciousTitle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mypreciousTitle->modified) ?></td>
        </tr>
    </table>
</div>
