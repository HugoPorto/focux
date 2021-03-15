<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Galerys'), ['controller' => 'Galerys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galery'), ['controller' => 'Galerys', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images form large-9 medium-8 columns content">
    <?= $this->Form->create($image, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <?php
            echo $this->Form->control('image[]', ['label' => 'Image', 'type' => 'file', 'multiple' => 'true']);
            echo $this->Form->control('galerys_id', ['options' => $galerys]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
