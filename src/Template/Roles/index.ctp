<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roles index large-9 medium-8 columns content">
    <table id="general" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>role</th>
                <th>created</th>
                <th>modified</th>
                <th><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
                <tr>
                    <td><?= $this->Number->format($role->id) ?></td>
                    <td><?= h($role->role) ?></td>
                    <td><?= h($role->created) ?></td>
                    <td><?= h($role->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $role->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>role</th>
                <th>created</th>
                <th>modified</th>to ter
                <th><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
</div>
