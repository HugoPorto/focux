<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MyCourse $myCourse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit My Course'), ['action' => 'edit', $myCourse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete My Course'), ['action' => 'delete', $myCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myCourse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List My Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New My Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="myCourses view large-9 medium-8 columns content">
    <h3><?= h($myCourse->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $myCourse->has('user') ? $this->Html->link($myCourse->user->name, ['controller' => 'Users', 'action' => 'view', $myCourse->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $myCourse->has('course') ? $this->Html->link($myCourse->course->course, ['controller' => 'Courses', 'action' => 'view', $myCourse->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($myCourse->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($myCourse->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($myCourse->modified) ?></td>
        </tr>
    </table>
</div>
