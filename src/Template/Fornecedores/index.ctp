<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fornecedore[]|\Cake\Collection\CollectionInterface $fornecedores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Planocontas'), ['controller' => 'Planocontas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planoconta'), ['controller' => 'Planocontas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cidades'), ['controller' => 'Cidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fornecedores index large-9 medium-8 columns content">
    <h3><?= __('Fornecedores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planocontas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razao_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj_cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_site') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidades_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fornecedores as $fornecedore): ?>
            <tr>
                <td><?= $this->Number->format($fornecedore->id) ?></td>
                <td><?= $fornecedore->has('planoconta') ? $this->Html->link($fornecedore->planoconta->id, ['controller' => 'Planocontas', 'action' => 'view', $fornecedore->planoconta->id]) : '' ?></td>
                <td><?= h($fornecedore->nome) ?></td>
                <td><?= h($fornecedore->razao_social) ?></td>
                <td><?= h($fornecedore->cnpj_cpf) ?></td>
                <td><?= h($fornecedore->ie) ?></td>
                <td><?= h($fornecedore->endereco) ?></td>
                <td><?= h($fornecedore->numero) ?></td>
                <td><?= h($fornecedore->bairro) ?></td>
                <td><?= h($fornecedore->cep) ?></td>
                <td><?= h($fornecedore->fone) ?></td>
                <td><?= h($fornecedore->fax) ?></td>
                <td><?= h($fornecedore->email_site) ?></td>
                <td><?= $fornecedore->has('estado') ? $this->Html->link($fornecedore->estado->id, ['controller' => 'Estados', 'action' => 'view', $fornecedore->estado->id]) : '' ?></td>
                <td><?= $fornecedore->has('cidade') ? $this->Html->link($fornecedore->cidade->id, ['controller' => 'Cidades', 'action' => 'view', $fornecedore->cidade->id]) : '' ?></td>
                <td><?= $fornecedore->has('empresa') ? $this->Html->link($fornecedore->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $fornecedore->empresa->id]) : '' ?></td>
                <td><?= h($fornecedore->ativo) ?></td>
                <td><?= h($fornecedore->tipo) ?></td>
                <td><?= h($fornecedore->created) ?></td>
                <td><?= h($fornecedore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fornecedore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fornecedore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedore->id)]) ?>
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
