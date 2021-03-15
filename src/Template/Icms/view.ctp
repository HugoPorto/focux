<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Icm $icm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Icm'), ['action' => 'edit', $icm->id_icms]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Icm'), ['action' => 'delete', $icm->id_icms], ['confirm' => __('Are you sure you want to delete # {0}?', $icm->id_icms)]) ?> </li>
        <li><?= $this->Html->link(__('List Icms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Icm'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="icms view large-9 medium-8 columns content">
    <h3><?= h($icm->id_icms) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo Icms') ?></th>
            <td><?= h($icm->codigo_icms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Icms') ?></th>
            <td><?= $this->Number->format($icm->id_icms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($icm->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($icm->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Desc Icms') ?></h4>
        <?= $this->Text->autoParagraph(h($icm->desc_icms)); ?>
    </div>
</div>
