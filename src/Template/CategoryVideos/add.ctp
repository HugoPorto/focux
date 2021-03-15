<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryVideo $categoryVideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Category Videos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoryVideos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoryVideo) ?>
    <fieldset>
        <legend><?= __('Add Category Video') ?></legend>
        <?php
            echo $this->Form->control('category');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
