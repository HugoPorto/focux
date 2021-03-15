<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centroresultado $centroresultado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Centroresultado'), ['action' => 'edit', $centroresultado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centroresultado'), ['action' => 'delete', $centroresultado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centroresultado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centroresultados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centroresultado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="centroresultados view large-9 medium-8 columns content">
    <h3><?= h($centroresultado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($centroresultado->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($centroresultado->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centroresultado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($centroresultado->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($centroresultado->modified) ?></td>
        </tr>
    </table>
</div>
