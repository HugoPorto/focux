<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mounth $mounth
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mounths'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mounths form large-9 medium-8 columns content">
    <?= $this->Form->create($mounth) ?>
    <fieldset>
        <legend><?= __('Add Mounth') ?></legend>
        <?php
            echo $this->Form->control('mounth');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
