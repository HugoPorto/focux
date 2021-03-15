<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MenuCourse $menuCourse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Menu Course'), ['action' => 'edit', $menuCourse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu Course'), ['action' => 'delete', $menuCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuCourse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menu Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="menuCourses view large-9 medium-8 columns content">
    <h3><?= h($menuCourse->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Menu') ?></th>
            <td><?= h($menuCourse->menu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $menuCourse->has('course') ? $this->Html->link($menuCourse->course->course, ['controller' => 'Courses', 'action' => 'view', $menuCourse->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($menuCourse->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($menuCourse->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($menuCourse->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($menuCourse->description)); ?>
    </div>
</div>
