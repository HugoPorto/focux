<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
            <?= $this->Form->create($videosUser, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Videos User') ?></legend>
                <?php
                    echo $this->Form->control('video', ['class' => 'form-control', 'Placeholder' => 'Video']);
                    echo $this->Form->control('photo[]', ['label' => 'Photo', 'type' => 'file', 'multiple' => 'true']);
                    echo $this->Form->control('title', ['class' => 'form-control', 'Placeholder' => 'Title']);
                    echo $this->Form->control('description', ['class' => 'form-control', 'Placeholder' => 'Description']);
                    echo $this->Form->control('link_share', ['class' => 'form-control', 'Placeholder' => 'Link Share']);
                    echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                    echo $this->Form->control('galerys_id', ['type' => 'hidden', 'value' => 3]);
                    echo $this->Form->control('playlist_users_id', ['options' => $playlistUsers, 'class' => 'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>



