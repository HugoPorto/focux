<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryPost $categoryPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoryPost->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoryPost->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Category Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoryPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($categoryPost) ?>
    <fieldset>
        <legend><?= __('Edit Category Post') ?></legend>
        <?php
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
