<section class="content">
<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Edit User') ?></legend>
                    <?php
                        echo $this->Form->control('name',['class' => 'form-control', 'Placeholder' => 'Name']);
                        echo '<br>';
                        echo $this->Form->control('email', ['class' => 'form-control', 'Placeholder' => 'E-mail']);                       
                        echo '<br>';
                        echo $this->Form->control('roles_id', ['type' => 'hidden', 'value' => 3]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
</section>