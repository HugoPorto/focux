<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Seans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seans', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="anvideos index large-9 medium-8 columns content">
    <h3><?= __('Videos') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th>Id</th>
                <th>Episode</th>
                <th>Thumb</th>
                <th>Number</th>
                <th>trend</th>
                <th>Status</th>
                <th>Anime</th>
                <th>Season</th>               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($anvideos as $anvideo): ?>
            <tr>
                <td><?= $this->Number->format($anvideo->id) ?></td>
                <td><?= h($anvideo->episode) ?></td>
                <td><?= h($anvideo->thumb) ?></td>
                <td><?= h($anvideo->numepisode) ?></td>
                <?php if($anvideo->trend):?>
                    <td>Ativo</td>
                <?php elseif($anvideo->trend==false):?>
                    <td>Inativo</td>
                <?php endif;?>
                <?php if($anvideo->status):?>
                    <td>Ativo</td>
                <?php elseif($anvideo->status==false):?>
                    <td>Inativo</td>
                <?php endif;?>                
                <td><?= $anvideo->has('anime') ? $this->Html->link($anvideo->anime->anime, ['controller' => 'Animes', 'action' => 'view', $anvideo->anime->id]) : '' ?></td>
                <td><?= $anvideo->has('sean') ? $this->Html->link($anvideo->sean->name, ['controller' => 'Seans', 'action' => 'view', $anvideo->sean->id]) : '' ?></td>              
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $anvideo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $anvideo->id, $anvideo->anime->id]) ?>                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Episode</th>
                <th>Thumb</th>
                <th>Number</th>
                <th>trend</th>
                <th>Status</th>
                <th>Anime</th>
                <th>Season</th>              
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
    <br/>
    <br/>
</div>
