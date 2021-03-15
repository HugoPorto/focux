<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MenuCourse[]|\Cake\Collection\CollectionInterface $menuCourses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Menu Course'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menuCourses index large-9 medium-8 columns content">
    <h3><?= __('Menu Courses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('courses_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menuCourses as $menuCourse): ?>
            <tr>
                <td><?= $this->Number->format($menuCourse->id) ?></td>
                <td><?= h($menuCourse->menu) ?></td>
                <td><?= $menuCourse->has('course') ? $this->Html->link($menuCourse->course->course, ['controller' => 'Courses', 'action' => 'view', $menuCourse->course->id]) : '' ?></td>
                <td><?= h($menuCourse->created) ?></td>
                <td><?= h($menuCourse->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $menuCourse->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $menuCourse->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $menuCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuCourse->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
