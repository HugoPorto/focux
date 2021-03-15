<section class="content">
<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
            <?= $this->Form->create($schedule) ?>
            <fieldset>
                <legend><?= __('Add Schedule') ?></legend>
                <?php
                    echo $this->Form->control('schedule', ['class' => 'form-control', 'Placeholder' => 'Schedule']);
                    echo $this->Form->control('embed', ['class' => 'form-control', 'Placeholder' => 'Embed']);
                    echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
</section>


