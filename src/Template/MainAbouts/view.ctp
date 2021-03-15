<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MainAbout $mainAbout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Main About'), ['action' => 'edit', $mainAbout->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Main About'), ['action' => 'delete', $mainAbout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mainAbout->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Main Abouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Main About'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mainAbouts view large-9 medium-8 columns content">
    <h3><?= h($mainAbout->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($mainAbout->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($mainAbout->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mainAbout->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mainAbout->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mainAbout->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($mainAbout->text)); ?>
    </div>
</div>
