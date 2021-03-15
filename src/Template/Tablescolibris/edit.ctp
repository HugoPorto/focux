<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablescolibri $tablescolibri
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tablescolibri->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tablescolibri->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tablescolibris'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tablescolibris form large-9 medium-8 columns content">
    <?= $this->Form->create($tablescolibri) ?>
    <fieldset>
        <legend><?= __('Edit Tablescolibri') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
