<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ViewsAnime $viewsAnime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Views Animes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="viewsAnimes form large-9 medium-8 columns content">
    <?= $this->Form->create($viewsAnime) ?>
    <fieldset>
        <legend><?= __('Add Views Anime') ?></legend>
        <?php
            echo $this->Form->control('animes_id', ['options' => $animes]);
            echo $this->Form->control('number_view');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
