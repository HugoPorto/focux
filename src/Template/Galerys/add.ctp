<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galery $galery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galerys'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="galerys form large-9 medium-8 columns content">
    <?= $this->Form->create($galery) ?>
    <fieldset>
        <legend><?= __('Add Galery') ?></legend>
        <?php
            echo $this->Form->control('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
