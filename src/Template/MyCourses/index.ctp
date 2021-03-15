<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MyCourse[]|\Cake\Collection\CollectionInterface $myCourses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New My Course'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="myCourses index large-9 medium-8 columns content">
    <h3><?= __('My Courses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('courses_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($myCourses as $myCourse): ?>
            <tr>
                <td><?= $this->Number->format($myCourse->id) ?></td>
                <td><?= $myCourse->has('user') ? $this->Html->link($myCourse->user->name, ['controller' => 'Users', 'action' => 'view', $myCourse->user->id]) : '' ?></td>
                <td><?= $myCourse->has('course') ? $this->Html->link($myCourse->course->course, ['controller' => 'Courses', 'action' => 'view', $myCourse->course->id]) : '' ?></td>
                <td><?= h($myCourse->created) ?></td>
                <td><?= h($myCourse->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $myCourse->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $myCourse->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $myCourse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myCourse->id)]) ?>
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
