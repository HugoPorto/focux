<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?php if($course->photo):?>
        <div style="width: 250px; height: 250px">
            <?php echo $this->Html->image($course->photo)?>
        </div>
        <h3>Nome: <?php echo $course->photo;?></h3>
        <p>Atenção! Para editar a imagem clique em Editar abaixo.</p>
        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $course->id, true]) ?>
    <?php else:?>
        <h3>Esse curso não tem imagem associada!</h3>
        <p>Para adicionar uma clique em Editar.</p>
        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $course->id, true]) ?>
    <?php endif;?> 
    <?= $this->Form->create($course, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Course') ?></legend>
        <?php
            echo $this->Form->control('course');
            if($editImage !== null){
                echo $this->Form->control('photo', ['type' => 'file', 'label' => 'Foto']);
            }
            echo $this->Form->control('description');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('link');
            echo $this->Form->control('value');
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
