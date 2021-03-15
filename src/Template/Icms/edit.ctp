<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Icm $icm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $icm->id_icms],
                ['confirm' => __('Are you sure you want to delete # {0}?', $icm->id_icms)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Icms'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="icms form large-9 medium-8 columns content">
    <?= $this->Form->create($icm) ?>
    <fieldset>
        <legend><?= __('Edit Icm') ?></legend>
        <?php
            echo $this->Form->control('codigo_icms');
            echo $this->Form->control('desc_icms');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
