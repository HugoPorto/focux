<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Film'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="films index large-9 medium-8 columns content">
    <h3><?= __('Films') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>award</th>
                <th>audio</th>
                <th>trend</th>
                <th>status</th>
                <th>genres_id</th>
                <th>views</th>
                <th>created</th>
                <th>modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($films as $film): ?>
            <tr>
                <td><?= $this->Number->format($film->id) ?></td>
                <td><?= h($film->title) ?></td>
                <td><?= h($film->award) ?></td>
                <td><?= h($film->audio) ?></td>
                <?php if($film->trend):?>
                    <td>Active</td>
                <?php elseif($film->trend==false):?>
                    <td>Inactive</td>
                <?php endif;?>
                <?php if($film->status):?>
                    <td>Active</td>
                <?php elseif($film->status==false):?>
                    <td>Inactive</td>
                <?php endif;?>
                <td><?= $film->has('genre') ? $this->Html->link($film->genre->name, ['controller' => 'Genres', 'action' => 'view', $film->genre->id]) : '' ?></td>
                <td><?= $this->Number->format($film->views) ?></td>
                <td><?= h($film->created) ?></td>
                <td><?= h($film->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $film->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $film->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $film->id], ['confirm' => __('Are you sure you want to delete # {0}?', $film->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
