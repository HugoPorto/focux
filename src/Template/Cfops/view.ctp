<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cfop $cfop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cfop'), ['action' => 'edit', $cfop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cfop'), ['action' => 'delete', $cfop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cfop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cfops'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cfop'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cfops view large-9 medium-8 columns content">
    <h3><?= h($cfop->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigocfop') ?></th>
            <td><?= h($cfop->codigocfop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($cfop->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cfop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cfop->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cfop->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($cfop->descricao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Aplicacao') ?></h4>
        <?= $this->Text->autoParagraph(h($cfop->aplicacao)); ?>
    </div>
</div>
