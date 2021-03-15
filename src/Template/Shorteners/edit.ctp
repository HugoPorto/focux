<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shortener $shortener
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shortener->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shortener->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shorteners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shorteners form large-9 medium-8 columns content">
    <?= $this->Form->create($shortener) ?>
    <fieldset>
        <legend><?= __('Edit Shortener') ?></legend>
        <?php
            echo $this->Form->control('shortener');
            echo $this->Form->control('site');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
