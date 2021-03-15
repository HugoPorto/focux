<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centroresultado[]|\Cake\Collection\CollectionInterface $centroresultados
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Centroresultado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centroresultados index large-9 medium-8 columns content">
    <h3><?= __('Centroresultados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($centroresultados as $centroresultado): ?>
            <tr>
                <td><?= $this->Number->format($centroresultado->id) ?></td>
                <td><?= h($centroresultado->descricao) ?></td>
                <td><?= h($centroresultado->ativo) ?></td>
                <td><?= h($centroresultado->created) ?></td>
                <td><?= h($centroresultado->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $centroresultado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $centroresultado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $centroresultado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centroresultado->id)]) ?>
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
