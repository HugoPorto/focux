<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shortener $shortener
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shorteners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shorteners form large-9 medium-8 columns content">
    <?= $this->Form->create($shortener) ?>
    <fieldset>
        <legend><?= __('Add Shortener') ?></legend>
        <?php
            echo $this->Form->control('shortener');
            echo $this->Form->control('site');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
