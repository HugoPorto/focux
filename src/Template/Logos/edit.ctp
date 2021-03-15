<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logo $logo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $logo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $logo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Logos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="logos form large-9 medium-8 columns content">
    <?= $this->Form->create($logo) ?>
    <fieldset>
        <legend><?= __('Edit Logo') ?></legend>
        <?php
            echo $this->Form->control('photo');
            echo $this->Form->control('place');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
