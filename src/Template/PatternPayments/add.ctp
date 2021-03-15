<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
            <?= $this->Form->create($patternPayment, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Attach your voucher') ?></legend>
                <?php
                    echo $this->Form->control('playlist_users_id', ['type' => 'hidden', 'value' => $playlistId]);
                    echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                    echo $this->Form->control('ownersid', ['type' => 'hidden', 'value' => $owner]);
                    echo $this->Form->control('photo[]', ['label' => 'Photo', 'type' => 'file', 'multiple' => 'true', 'class' => 'form-control']);
                    echo '<br>';
                    echo $this->Form->control('note', ['class' => 'form-control']);
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
