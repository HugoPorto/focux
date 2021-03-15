<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Planoconta[]|\Cake\Collection\CollectionInterface $planocontas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Planoconta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centroresultados'), ['controller' => 'Centroresultados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centroresultado'), ['controller' => 'Centroresultados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planocontas index large-9 medium-8 columns content">
    <h3><?= __('Planocontas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modo_conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centroresultado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planocontas as $planoconta): ?>
            <tr>
                <td><?= $this->Number->format($planoconta->id) ?></td>
                <td><?= h($planoconta->codigo) ?></td>
                <td><?= h($planoconta->nome) ?></td>
                <td><?= h($planoconta->tipo_conta) ?></td>
                <td><?= h($planoconta->categoria_conta) ?></td>
                <td><?= h($planoconta->modo_conta) ?></td>
                <td><?= h($planoconta->ordem) ?></td>
                <td><?= h($planoconta->ativo) ?></td>
                <td><?= $planoconta->has('centroresultado') ? $this->Html->link($planoconta->centroresultado->id, ['controller' => 'Centroresultados', 'action' => 'view', $planoconta->centroresultado->id]) : '' ?></td>
                <td><?= h($planoconta->created) ?></td>
                <td><?= h($planoconta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $planoconta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $planoconta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $planoconta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planoconta->id)]) ?>
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
