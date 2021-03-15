<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galery $galery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galery'), ['action' => 'edit', $galery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galery'), ['action' => 'delete', $galery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galery->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galerys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galery'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galerys view large-9 medium-8 columns content">
    <h3><?= h($galery->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($galery->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($galery->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($galery->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($galery->modified) ?></td>
        </tr>
    </table>
</div>
