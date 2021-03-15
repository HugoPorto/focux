<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Videos Recomendados'), ['action' => 'list']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosRecomendados form large-9 medium-8 columns content">
    <?= $this->Form->create($videosRecomendado) ?>
    <fieldset>
        <legend><?= __('Add Videos Recomendado') ?></legend>
        <?php
            echo $this->Form->control('videos_id', ['options' => $videos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
