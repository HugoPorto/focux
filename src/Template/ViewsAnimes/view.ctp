<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ViewsAnime $viewsAnime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Views Anime'), ['action' => 'edit', $viewsAnime->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Views Anime'), ['action' => 'delete', $viewsAnime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viewsAnime->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Views Animes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Views Anime'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="viewsAnimes view large-9 medium-8 columns content">
    <h3><?= h($viewsAnime->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Anime') ?></th>
            <td><?= $viewsAnime->has('anime') ? $this->Html->link($viewsAnime->anime->anime, ['controller' => 'Animes', 'action' => 'view', $viewsAnime->anime->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($viewsAnime->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number View') ?></th>
            <td><?= $this->Number->format($viewsAnime->number_view) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($viewsAnime->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($viewsAnime->modified) ?></td>
        </tr>
    </table>
</div>
