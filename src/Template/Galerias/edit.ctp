<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galeria $galeria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $galeria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $galeria->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Galerias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="galerias form large-9 medium-8 columns content">
    <?= $this->Form->create($galeria) ?>
    <fieldset>
        <legend><?= __('Edit Galeria') ?></legend>
        <?php
            echo $this->Form->control('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
