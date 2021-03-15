<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupotributaco[]|\Cake\Collection\CollectionInterface $grupotributacoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupotributaco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Csts'), ['controller' => 'Csts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cst'), ['controller' => 'Csts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cfops'), ['controller' => 'Cfops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cfop'), ['controller' => 'Cfops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grupotributacoes index large-9 medium-8 columns content">
    <h3><?= __('Grupotributacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('csts_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cfops_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('origem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icms_saida_aliquota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icms_saida_aliquota_red_base_calc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pis_saida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pis_saida_aliquota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cofins_saida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cofins_saida_aliquota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupotributacoes as $grupotributaco): ?>
            <tr>
                <td><?= $this->Number->format($grupotributaco->id) ?></td>
                <td><?= h($grupotributaco->nome) ?></td>
                <td><?= $grupotributaco->has('cst') ? $this->Html->link($grupotributaco->cst->id, ['controller' => 'Csts', 'action' => 'view', $grupotributaco->cst->id]) : '' ?></td>
                <td><?= $grupotributaco->has('cfop') ? $this->Html->link($grupotributaco->cfop->id, ['controller' => 'Cfops', 'action' => 'view', $grupotributaco->cfop->id]) : '' ?></td>
                <td><?= h($grupotributaco->origem) ?></td>
                <td><?= $this->Number->format($grupotributaco->icms_saida_aliquota) ?></td>
                <td><?= $this->Number->format($grupotributaco->icms_saida_aliquota_red_base_calc) ?></td>
                <td><?= h($grupotributaco->pis_saida) ?></td>
                <td><?= $this->Number->format($grupotributaco->pis_saida_aliquota) ?></td>
                <td><?= h($grupotributaco->cofins_saida) ?></td>
                <td><?= $this->Number->format($grupotributaco->cofins_saida_aliquota) ?></td>
                <td><?= h($grupotributaco->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $grupotributaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grupotributaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grupotributaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupotributaco->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
