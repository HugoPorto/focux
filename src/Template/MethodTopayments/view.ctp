<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MethodTopayment $methodTopayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Method Topayment'), ['action' => 'edit', $methodTopayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Method Topayment'), ['action' => 'delete', $methodTopayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $methodTopayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Method Topayments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Method Topayment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="methodTopayments view large-9 medium-8 columns content">
    <h3><?= h($methodTopayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Method') ?></th>
            <td><?= h($methodTopayment->method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($methodTopayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($methodTopayment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($methodTopayment->modified) ?></td>
        </tr>
    </table>
</div>
