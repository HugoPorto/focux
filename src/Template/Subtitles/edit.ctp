<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subtitle $subtitle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subtitle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subtitle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subtitles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="subtitles form large-9 medium-8 columns content">
    <?= $this->Form->create($subtitle) ?>
    <fieldset>
        <legend><?= __('Edit Subtitle') ?></legend>
        <?php
            echo $this->Form->control('subtitle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
