<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coin $coin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coin->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coin->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coins'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coins form large-9 medium-8 columns content">
    <?= $this->Form->create($coin) ?>
    <fieldset>
        <legend><?= __('Edit Coin') ?></legend>
        <?php
            echo $this->Form->control('coin');
            echo $this->Form->control('iconName');
            echo $this->Form->control('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
