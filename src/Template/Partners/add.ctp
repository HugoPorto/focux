<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partner $partner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Partners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="partners form large-9 medium-8 columns content">
    <?= $this->Form->create($partner) ?>
    <fieldset>
        <legend><?= __('Add Partner') ?></legend>
        <?php
            echo $this->Form->control('photo');
            echo $this->Form->control('link');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
