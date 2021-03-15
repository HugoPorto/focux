<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubcategoryPost $subcategoryPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subcategoryPost->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoryPost->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subcategory Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Category Posts'), ['controller' => 'CategoryPosts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Post'), ['controller' => 'CategoryPosts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcategoryPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($subcategoryPost) ?>
    <fieldset>
        <legend><?= __('Edit Subcategory Post') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('category_posts_id', ['options' => $categoryPosts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
