<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BarsNightclub $barsNightclub
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $barsNightclub->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $barsNightclub->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bars Nightclubs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barsNightclubs form large-9 medium-8 columns content">
    <?= $this->Form->create($barsNightclub) ?>
    <fieldset>
        <legend><?= __('Edit Bars Nightclub') ?></legend>
        <?php
            echo $this->Form->control('restaurants');
            echo $this->Form->control('cafes_ice_cream_shop');
            echo $this->Form->control('bars_nightclubs');
            echo $this->Form->control('bookstores');
            echo $this->Form->control('tickets');
            echo $this->Form->control('hotels');
            echo $this->Form->control('tours');
            echo $this->Form->control('others');
            echo $this->Form->control('mounths_id', ['options' => $mounths]);
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
