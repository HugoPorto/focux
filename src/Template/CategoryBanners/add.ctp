<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryBanner $categoryBanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Category Banners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoryBanners form large-9 medium-8 columns content">
    <?= $this->Form->create($categoryBanner) ?>
    <fieldset>
        <legend><?= __('Add Category Banner') ?></legend>
        <?php
            echo $this->Form->control('category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
