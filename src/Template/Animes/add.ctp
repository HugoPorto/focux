<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anime $anime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="animes form large-9 medium-8 columns content">
    <?= $this->Form->create($anime) ?>
    <fieldset>
        <legend><?= __('Add Anime') ?></legend>
        <?php
            echo $this->Form->control('anime');
            echo $this->Form->control('linkimage');
            echo $this->Form->control('trailer');
            echo $this->Form->control('description');
            echo $this->Form->control('launch');
            echo $this->Form->control('advertising');
            echo $this->Form->control('sponsor');
            echo $this->Form->control('trend');
            echo $this->Form->control('views');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
