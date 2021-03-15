<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa[]|\Cake\Collection\CollectionInterface $empresas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cidades'), ['controller' => 'Cidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresas index large-9 medium-8 columns content">
    <h3><?= __('Empresas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidades_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('im') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fantasia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razao_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('juros_diario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('multa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnae') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_revenda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresas as $empresa): ?>
            <tr>
                <td><?= $this->Number->format($empresa->id) ?></td>
                <td><?= $empresa->has('estado') ? $this->Html->link($empresa->estado->id, ['controller' => 'Estados', 'action' => 'view', $empresa->estado->id]) : '' ?></td>
                <td><?= $empresa->has('cidade') ? $this->Html->link($empresa->cidade->id, ['controller' => 'Cidades', 'action' => 'view', $empresa->cidade->id]) : '' ?></td>
                <td><?= h($empresa->cnpj) ?></td>
                <td><?= h($empresa->ie) ?></td>
                <td><?= h($empresa->im) ?></td>
                <td><?= h($empresa->fantasia) ?></td>
                <td><?= h($empresa->razao_social) ?></td>
                <td><?= h($empresa->endereco) ?></td>
                <td><?= h($empresa->numero) ?></td>
                <td><?= h($empresa->bairro) ?></td>
                <td><?= h($empresa->cep) ?></td>
                <td><?= h($empresa->telefone) ?></td>
                <td><?= h($empresa->email) ?></td>
                <td><?= $this->Number->format($empresa->juros_diario) ?></td>
                <td><?= $this->Number->format($empresa->multa) ?></td>
                <td><?= h($empresa->crt) ?></td>
                <td><?= h($empresa->cnae) ?></td>
                <td><?= h($empresa->codigo_revenda) ?></td>
                <td><?= h($empresa->ativo) ?></td>
                <td><?= h($empresa->created) ?></td>
                <td><?= h($empresa->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
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
