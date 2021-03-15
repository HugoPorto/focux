<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category Video'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoryVideos index large-9 medium-8 columns content">
    <table id="general" class="display" style="width:100%">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('category') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoryVideos as $categoryVideo): ?>
                <tr>
                    <td><?= $this->Number->format($categoryVideo->id) ?></td>
                    <td><?= h($categoryVideo->category) ?></td>
                    <td><?= h($categoryVideo->description) ?></td>
                    <td><?= h($categoryVideo->created) ?></td>
                    <td><?= h($categoryVideo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoryVideo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoryVideo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoryVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryVideo->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('category') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
</div>
