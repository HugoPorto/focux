<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estados view large-9 medium-8 columns content">
    <h3><?= h($estado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Iduf') ?></th>
            <td><?= h($estado->iduf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($estado->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($estado->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icmscompra') ?></th>
            <td><?= h($estado->icmscompra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icmsvenda') ?></th>
            <td><?= h($estado->icmsvenda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aliquota Interestadual') ?></th>
            <td><?= $this->Number->format($estado->aliquota_interestadual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aliquota Fcp') ?></th>
            <td><?= $this->Number->format($estado->aliquota_fcp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estado->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estado->modified) ?></td>
        </tr>
    </table>
</div>
