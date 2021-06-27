<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PageCategory $pageCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Page Categorys'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pageCategorys form large-9 medium-8 columns content">
    <?= $this->Form->create($pageCategory) ?>
    <fieldset>
        <legend><?= __('Add Page Category') ?></legend>
        <?php
            echo $this->Form->control('category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
