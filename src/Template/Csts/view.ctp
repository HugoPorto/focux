<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cst $cst
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cst'), ['action' => 'edit', $cst->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cst'), ['action' => 'delete', $cst->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cst->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Csts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cst'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="csts view large-9 medium-8 columns content">
    <h3><?= h($cst->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigotributario') ?></th>
            <td><?= h($cst->codigotributario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($cst->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($cst->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cst->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icms') ?></th>
            <td><?= $this->Number->format($cst->icms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cst->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cst->modified) ?></td>
        </tr>
    </table>
</div>
