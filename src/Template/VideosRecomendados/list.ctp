<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Videos Recomendado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosRecomendados index large-9 medium-8 columns content">
    <h3><?= __('Videos Recomendados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('videos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videosRecomendados as $videosRecomendado): ?>
            <tr>
                <td><?= $this->Number->format($videosRecomendado->id) ?></td>
                <td><?= $videosRecomendado->has('video') ? $this->Html->link($videosRecomendado->video->title, ['controller' => 'Videos', 'action' => 'view', $videosRecomendado->video->id]) : '' ?></td>
                <td><?= h($videosRecomendado->created) ?></td>
                <td><?= h($videosRecomendado->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $videosRecomendado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $videosRecomendado->id]) ?>                    
                    <?php if($role == 'root'):?>                    
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $videosRecomendado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosRecomendado->id)]) ?>
                    <?php endif;?>  
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