<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anime[]|\Cake\Collection\CollectionInterface $animes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animes index large-9 medium-8 columns content">
    <h3><?= __('Animes') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
    <thead>
            <tr>
                <th>id</th>
                <th>anime</th>
                <th>launch</th>
                <th>trend</th>
                <th>views</th>
                <th>created</th>
                <th>modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animes as $anime): ?>
            <tr>
                <td><?= $this->Number->format($anime->id) ?></td>
                <td><?= h($anime->anime) ?></td>
                <td><?= h($anime->launch) ?></td>
                <?php if($anime->trend):?>
                    <td>Active</td>
                <?php elseif($anime->trend==false):?>
                    <td>Inactive</td>
                <?php endif;?>
                <td><?= h($anime->views) ?></td>
                <td><?= h($anime->created) ?></td>
                <td><?= h($anime->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $anime->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anime->id]) ?>                    
                    <?= $this->Form->postLink(__('Add Season'), ['controller'  => 'seans', 'action' => 'add', $anime->id], ['target' => '_blank']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
