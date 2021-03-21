<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Linkcoin $linkcoin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Linkcoins'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coins'), ['controller' => 'Coins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coin'), ['controller' => 'Coins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="linkcoins form large-9 medium-8 columns content">
    <?= $this->Form->create($linkcoin) ?>
    <fieldset>
        <legend><?= __('Add Linkcoin') ?></legend>
        <?php
            echo $this->Form->control('coins_id', ['options' => $coins]);
            echo $this->Form->control('link');
            echo $this->Form->control('main');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
