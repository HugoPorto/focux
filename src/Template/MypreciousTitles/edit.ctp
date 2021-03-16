<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MypreciousTitle $mypreciousTitle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mypreciousTitle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mypreciousTitle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Myprecious Titles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mypreciousTitles form large-9 medium-8 columns content">
    <?= $this->Form->create($mypreciousTitle) ?>
    <fieldset>
        <legend><?= __('Edit Myprecious Title') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('page');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
