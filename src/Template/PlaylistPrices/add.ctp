<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
            <?= $this->Form->create($playlistPrice) ?>
            <fieldset>
                <legend><?= __('Add Playlist Price') ?></legend>
                <?php
                    echo $this->Form->control('playlist_users_id', ['options' => $playlistUsers, 'class' => 'form-control']);
                    echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                    echo $this->Form->control('price', ['class' => 'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>