<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galeria $galeria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galerias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="galerias form large-9 medium-8 columns content">
    <?= $this->Form->create($galeria) ?>
    <fieldset>
        <legend><?= __('Add Galeria') ?></legend>
        <?php
            echo $this->Form->control('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
