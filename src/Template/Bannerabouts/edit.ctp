<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bannerabout $bannerabout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bannerabout->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bannerabout->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bannerabouts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bannerabouts form large-9 medium-8 columns content">
    <?= $this->Form->create($bannerabout) ?>
    <fieldset>
        <legend><?= __('Edit Bannerabout') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
