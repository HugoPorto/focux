<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animes'), ['controller' => 'Animes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Anime'), ['controller' => 'Animes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seans index large-9 medium-8 columns content">
    <h3><?= __('Seasons') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Anime</th>
                <th>Created</th>
                <th>Modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($seans as $sean): ?>
            <tr>
                <td><?= $this->Number->format($sean->id) ?></td>
                <td><?= h($sean->name) ?></td>
                <td><?= $sean->has('anime') ? $this->Html->link($sean->anime->anime, ['controller' => 'Animes', 'action' => 'view', $sean->anime->id]) : '' ?></td>
                <td><?= h($sean->created) ?></td>
                <td><?= h($sean->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sean->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sean->id]) ?>
                    <?= $this->Form->postLink(__('Add Videos'), ['controller'  => 'anvideos', 'action' => 'add', $sean->id, $sean->anime->id], ['target' => '_blank']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Animes_id</th>
                <th>Created</th>
                <th>Modified</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
    <br/>
    <br/>
</div>
