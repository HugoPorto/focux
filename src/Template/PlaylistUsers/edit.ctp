<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
        <?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $playlistUser->id, $username], ['confirm' => __('Are you sure you want to delete # {0}?', $playlistUser->id), 'class' => 'btn btn-danger']) ?>
    </div>
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
                <?= $this->Form->create($playlistUser) ?>
                <fieldset>
                    <legend><?= __('Edit Playlist') ?></legend>
                     <?php
                        echo $this->Form->control('title', ['class' => 'form-control', 'Placeholder' => 'Title']);
                        echo $this->Form->control('description', ['class' => 'form-control', 'Placeholder' => 'Description']);
                        echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

