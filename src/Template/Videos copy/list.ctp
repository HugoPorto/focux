<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roles index large-9 medium-8 columns content">
    <table id="videos_list" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>photo</th>
                <th>photo</th>
                <th>description</th>
                <th>link share</th>
                <th>Category</th>
                <th>created</th>
                <th>modified</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videos as $video): ?>
                <tr>
                    <td><?= $this->Number->format($video->id) ?></td>
                    <td><?= h($video->title) ?></td>
                    <td><?php echo $this->Html->image($video->photo) ?></td>
                    <td><?= h($video->photo) ?></td>
                    <td><?= h($video->description) ?></td>
                    <td><?= h($video->link_share) ?></td>
                    <td><?= $video->has('category_video') ? $this->Html->link($video->category_video->category, ['controller' => 'CategoryVideos', 'action' => 'view', $video->category_video->id]) : '' ?></td>                
                    <td><?= h($video->created) ?></td>
                    <td><?= h($video->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $video->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id]) ?>
                        <?php if($role == 'root'):?>                    
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?>
                        <?php endif;?>                       
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link share') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
</div>
