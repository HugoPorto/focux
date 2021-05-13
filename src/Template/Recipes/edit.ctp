<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe $recipe
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="recipes form large-10 medium-9 columns content">
    <?= $this->Form->create($recipe) ?>
    <fieldset>
        <legend><?= __('Edit Recipe') ?></legend>
        <?php
            echo $this->Form->control('salarys', ['label' => 'Salary']);
            echo $this->Form->control('rentals', ['label' => 'Rental']);
            echo $this->Form->control('prolabores', ['label' => 'Prolabore']);
            echo $this->Form->control('other_fixed_revenues', ['label' => 'Other Fixed Revenue']);
            echo $this->Form->control('dividends', ['label' => 'Dividend']);
            echo $this->Form->control('commissions', ['label' => 'Commission']);
            echo $this->Form->control('thirteen_salarys', ['label' => 'Thirteen Salary']);
            echo $this->Form->control('bonus', ['label' => 'Salary']);
            echo $this->Form->control('others', ['label' => 'Bonus']);
            echo $this->Form->control('mounths_id', ['options' => $mounths, 'empty' => true, 'label' => 'Mounth']);
            echo $this->Form->control('users_id', ['options' => $users, 'label' => 'User']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
