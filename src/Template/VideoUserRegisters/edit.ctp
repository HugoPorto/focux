<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideoUserRegister $videoUserRegister
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $videoUserRegister->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $videoUserRegister->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Video User Registers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videoUserRegisters form large-9 medium-8 columns content">
    <?= $this->Form->create($videoUserRegister) ?>
    <fieldset>
        <legend><?= __('Edit Video User Register') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('videos_id', ['options' => $videos]);
            echo $this->Form->control('location');
            echo $this->Form->control('ip');
            echo $this->Form->control('browser');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
