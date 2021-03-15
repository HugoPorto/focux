<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cest $cest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cest'), ['action' => 'edit', $cest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cest'), ['action' => 'delete', $cest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cest'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cests view large-9 medium-8 columns content">
    <h3><?= h($cest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cest') ?></th>
            <td><?= h($cest->cest) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ncm') ?></th>
            <td><?= h($cest->ncm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($cest->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cest->modified) ?></td>
        </tr>
    </table>
</div>
