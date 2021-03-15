<div class="row">
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-body">
                <?= $this->Form->create($paymentMethod) ?>
                <fieldset>
                    <legend><?= __('Edit Payment Method') ?></legend>
                    <?php
                        echo $this->Form->control('method', ['class' => 'form-control', 'Placeholder' => 'Method']);
                        echo $this->Form->control('email', ['class' => 'form-control', 'Placeholder' => 'E-mail']);
                        echo $this->Form->control('extra', ['class' => 'form-control', 'Placeholder' => 'Extra']);
                        echo $this->Form->control('users_id', ['type' => 'hidden', 'value' => $user->id]);
                        echo $this->Form->control('method_topayments_id', ['options' => $methodTopayments, 'class' => 'form-control']);
                    
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-danger btn-block btn-flat']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

