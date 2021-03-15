<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupotributaco $grupotributaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupotributaco'), ['action' => 'edit', $grupotributaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupotributaco'), ['action' => 'delete', $grupotributaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupotributaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupotributacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupotributaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Csts'), ['controller' => 'Csts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cst'), ['controller' => 'Csts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cfops'), ['controller' => 'Cfops', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cfop'), ['controller' => 'Cfops', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grupotributacoes view large-9 medium-8 columns content">
    <h3><?= h($grupotributaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($grupotributaco->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cst') ?></th>
            <td><?= $grupotributaco->has('cst') ? $this->Html->link($grupotributaco->cst->id, ['controller' => 'Csts', 'action' => 'view', $grupotributaco->cst->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cfop') ?></th>
            <td><?= $grupotributaco->has('cfop') ? $this->Html->link($grupotributaco->cfop->id, ['controller' => 'Cfops', 'action' => 'view', $grupotributaco->cfop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origem') ?></th>
            <td><?= h($grupotributaco->origem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pis Saida') ?></th>
            <td><?= h($grupotributaco->pis_saida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cofins Saida') ?></th>
            <td><?= h($grupotributaco->cofins_saida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($grupotributaco->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grupotributaco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icms Saida Aliquota') ?></th>
            <td><?= $this->Number->format($grupotributaco->icms_saida_aliquota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icms Saida Aliquota Red Base Calc') ?></th>
            <td><?= $this->Number->format($grupotributaco->icms_saida_aliquota_red_base_calc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pis Saida Aliquota') ?></th>
            <td><?= $this->Number->format($grupotributaco->pis_saida_aliquota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cofins Saida Aliquota') ?></th>
            <td><?= $this->Number->format($grupotributaco->cofins_saida_aliquota) ?></td>
        </tr>
    </table>
</div>
