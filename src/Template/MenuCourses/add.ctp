<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MenuCourse $menuCourse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Menu Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menuCourses form large-9 medium-8 columns content">
    <?= $this->Form->create($menuCourse) ?>
    <fieldset>
        <legend><?= __('Add Menu Course') ?></legend>
        <?php
            echo $this->Form->control('menu');
            echo $this->Form->control('description');
            echo $this->Form->control('courses_id', ['options' => $courses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
