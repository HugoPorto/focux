<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablesmyprecious $tablesmyprecious
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tablesmyprecious->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tablesmyprecious->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tablesmyprecious form large-10 medium-9 columns content">
    <?= $this->Form->create($tablesmyprecious) ?>
    <fieldset>
        <legend><?= __('Edit Tablesmyprecious') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('link');
            echo $this->Form->control('categorys_id', ['options' => $pageCategorys]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
