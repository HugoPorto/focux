<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th style="background-color: #ffba15">id</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th style="background-color: #2eff5f">E-mail</th>
                <th>Cellphone</th>
                <th>Functions</th>
                <th style="background-color: #dd4b39">Created</th>
                <th style="background-color: #dd4b39">Modified</th>
                <th class="actions" style="background-color: white"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td style="background-color: #ffba15"><?= $this->Number->format($user->id) ?></td>
                <td><strong><?= h($user->name) ?></strong></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->username) ?></td>
                <td style="background-color: #2eff5f"><?= h($user->email) ?></td>
                <td><?= h($user->cellphone) ?></td>
                <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                <td style="background-color: #dd4b39"><?= h($user->created) ?></td>
                <td style="background-color: #dd4b39"><?= h($user->modified) ?></td>
                <td class="actions" style="background-color: white">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th style="background-color: #ffba15">id</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Username</th>
                <th style="background-color: #2eff5f">E-mail</th>
                <th>Cellphone</th>
                <th>Functions</th>
                <th style="background-color: #dd4b39">Created</th>
                <th style="background-color: #dd4b39">Modified</th>
                <th class="actions" style="background-color: white"><?= __('Actions') ?></th>
            </tr>
        </tfoot>
    </table>
    <br/>
    <br/>
</div>