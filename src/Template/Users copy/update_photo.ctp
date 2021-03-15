<section class="content">
<div class="row" style="padding: 0px">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border">            
                <?= $this->Form->create($imageProfile, ['type' => 'file']) ?>
                <fieldset>
                    <legend><?= __('Add Image Profile') ?></legend>
                    <?php
                        echo $this->Form->control('image[]', ['label' => 'Image', 'type' => 'file', 'multiple' => 'false']);
                        echo $this->Form->control('galerys_id', ['type' => 'hidden', 'value' => '2', 'class' => 'form-control']);
                        echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id, 'class' => 'form-control']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
</section>