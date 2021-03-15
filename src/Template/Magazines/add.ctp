<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Magazine $magazine
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Magazines'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="magazines form large-9 medium-8 columns content">
    <?= $this->Form->create($magazine) ?>
    <fieldset>
        <legend><?= __('Add Magazine') ?></legend>
        <?php
            echo $this->Form->control('magazine');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
