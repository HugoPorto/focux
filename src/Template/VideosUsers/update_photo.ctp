<div class="row" style="padding: 0px">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border">            
                <?= $this->Form->create($videosUser, ['type' => 'file']) ?>
                <fieldset>
                    <legend><?= __('Update Image Video') ?></legend>
                    <?php
                        echo $this->Form->control('photo[]', ['label' => 'Image', 'type' => 'file', 'multiple' => 'false']);
                        echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                        echo $this->Form->control('galerys_id', ['type' => 'hidden', 'value' => 3]);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>