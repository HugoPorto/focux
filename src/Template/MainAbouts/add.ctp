<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MainAbout $mainAbout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Main Abouts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mainAbouts form large-9 medium-8 columns content">
    <?= $this->Form->create($mainAbout) ?>
    <fieldset>
        <legend><?= __('Add Main About') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('icon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
