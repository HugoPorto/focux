<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Video $video
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Video'), ['action' => 'edit', $video->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Video'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Videos'), ['controller' => 'CategoryVideos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Video'), ['controller' => 'CategoryVideos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videos view large-9 medium-8 columns content">
    <h3><?= h($video->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($video->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($video->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Video') ?></th>
            <td><?= $video->has('category_video') ? $this->Html->link($video->category_video->id, ['controller' => 'CategoryVideos', 'action' => 'view', $video->category_video->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($video->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($video->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($video->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Video') ?></h4>
        <?= $this->Text->autoParagraph(h($video->video)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($video->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link Share') ?></h4>
        <?= $this->Text->autoParagraph(h($video->link_share)); ?>
    </div>
</div>




<div class="col-md-12" style="padding: 0px">
                            <div class="video-container" @click="popup()">
                                <?php echo $video->video; ?>
                            </div>                     
                        </div>   