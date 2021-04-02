<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpensesWithPet $expensesWithPet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $expensesWithPet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expensesWithPet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Expenses With Pets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['controller' => 'Mounths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mounth'), ['controller' => 'Mounths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expensesWithPets form large-9 medium-8 columns content">
    <?= $this->Form->create($expensesWithPet) ?>
    <fieldset>
        <legend><?= __('Edit Expenses With Pet') ?></legend>
        <?php
            echo $this->Form->control('pet_shop');
            echo $this->Form->control('portion');
            echo $this->Form->control('veterinary');
            echo $this->Form->control('medicines');
            echo $this->Form->control('vaccines');
            echo $this->Form->control('others');
            echo $this->Form->control('mounths_id', ['options' => $mounths]);
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
