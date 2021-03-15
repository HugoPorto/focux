<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ncm $ncm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ncm'), ['action' => 'edit', $ncm->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ncm'), ['action' => 'delete', $ncm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ncm->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ncms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ncm'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ncms view large-9 medium-8 columns content">
    <h3><?= h($ncm->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($ncm->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($ncm->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ncm->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aliquota Nacional') ?></th>
            <td><?= $this->Number->format($ncm->aliquota_nacional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aliquota Internacional') ?></th>
            <td><?= $this->Number->format($ncm->aliquota_internacional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aliquota Estadual') ?></th>
            <td><?= $this->Number->format($ncm->aliquota_estadual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aliquota Municipal') ?></th>
            <td><?= $this->Number->format($ncm->aliquota_municipal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ncm->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ncm->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($ncm->descricao)); ?>
    </div>
</div>
