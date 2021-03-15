<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'list']) ?></li>
        <li><?= $this->Html->link(__('List Category Posts'), ['controller' => 'CategoryPosts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Post'), ['controller' => 'CategoryPosts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publicitys'), ['controller' => 'Publicitys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicity'), ['controller' => 'Publicitys', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('photo', ['type' => 'file', 'label' => 'Photo']);
            echo $this->Form->control('post');
            echo $this->Form->control('link_share');
            echo $this->Form->control('extra_publicity_code');
            echo $this->Form->control('category_posts_id', ['options' => $categoryPosts]);
            echo $this->Form->control('publicitys_id', ['options' => $publicitys]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
