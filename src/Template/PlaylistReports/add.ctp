<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
            <?= $this->Form->create($playlistReport) ?>
            <fieldset>
                <legend><?= __('Add Report') ?></legend>
                <?php
                    echo $this->Form->control('report', ['class' => 'form-control', 'Placeholder' => 'Report*']);
                    echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                    echo $this->Form->control('playlist_users_id', ['type' => 'hidden', 'value' => $idplaylist]);
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
