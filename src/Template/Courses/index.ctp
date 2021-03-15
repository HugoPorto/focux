<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Curso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses index large-9 medium-8 columns content">
    <h3><?= __('Cursos Registrados') ?></h3>
    <table id="general" class="display" style="width:100%; border: 1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>Curso</th>
                <th>Foto</th>
                <th>Subtítulo</th>
                <th>R$value</th>
                <th>Usuário</th>
                <th>Ativo</th>
                <th>Criado Em</th>
                <th>Modificado Em</th>
                <th><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courses as $course): ?>
                <?php if($course->active == true): ?>
                    <tr>
                        <td><?= $this->Number->format($course->id) ?></td>
                        <td><?= h($course->course) ?></td>
                        <?php if($course->photo): ?>
                            <td><?php echo $this->Html->image($course->photo) ?></td>
                        <?php else: ?>
                            <td>Sem Foto Registrada</td>
                        <?php endif;?>
                        <td><?= h($course->subtitle) ?></td>
                        <td>R$ <?= h($course->value) ?></td>
                        <td><?= $course->has('user') ? $this->Html->link($course->user->name, ['controller' => 'Users', 'action' => 'view', $course->user->id]) : '' ?></td>
                        <?php if($course->active == true):?>
                            <td style="color: green; font-weight: bold">
                                <?php echo 'Ativo'; ?>
                            </td>
                        <?php else: ?>
                            <td style="color: red; font-weight: bold">
                                <?php echo 'Inativo'; ?>
                            </td>
                        <?php endif; ?>
                        <td><?= h($course->created) ?></td>
                        <td><?= h($course->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $course->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $course->id]) ?>
                            <?php //echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr style="background-color: #dd4b39">
                        <td style="background-color: #dd4b39"><?= $this->Number->format($course->id) ?></td>
                        <td><?= h($course->course) ?></td>
                        <?php if($course->photo): ?>
                            <td><?php echo $this->Html->image($course->photo) ?></td>
                        <?php else: ?>
                            <td>Sem Foto Registrada</td>
                        <?php endif;?>
                        <td><?= h($course->subtitle) ?></td>
                        <td>R$ <?= h($course->value) ?></td>
                        <td><?= $course->has('user') ? $this->Html->link($course->user->name, ['controller' => 'Users', 'action' => 'view', $course->user->id]) : '' ?></td>
                        <?php if($course->active == true):?>
                            <td style="color: green; font-weight: bold">
                                <?php echo 'Ativo'; ?>
                            </td>
                        <?php else: ?>
                            <td style="color: white; font-weight: bold">
                                <?php echo 'Inativo'; ?>
                            </td>
                        <?php endif; ?>
                        <td><?= h($course->created) ?></td>
                        <td><?= h($course->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $course->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $course->id]) ?>
                            <?php //echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
                        </td>
                    </tr>
                <?php endif;?>
          
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Curso</th>
                <th>Foto</th>
                <th>Subtítulo</th>
                <th>R$value</th>
                <th>Usuário</th>
                <th>Ativo</th>
                <th>Criado Em</th>
                <th>Modificado Em</th>
                <th><?= __('Ações') ?></th>
            </tr>
        </tfoot>
    </table>
    <br>
    <br>
</div>
