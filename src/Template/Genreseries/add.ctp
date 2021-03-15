<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genreseries $genreseries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Genreseries'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="genreseries form large-9 medium-8 columns content">
    <?= $this->Form->create($genreseries) ?>
    <fieldset>
        <legend><?= __('Add Genreseries') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
