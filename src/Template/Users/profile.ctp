<section class="content">
<div class="row">
    <?php if($usernameEdit == true):?>
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <?= $this->Html->link(__('Edit Profile'), ['action' => 'editcommon', $user->id], ['class' => 'btn btn-danger']) ?> 
            <?= $this->Html->link(__('Update Photo'), ['action' => 'updatePhoto', $imageProfile->id, $username], ['class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Edit Password'), ['action' => 'updatePassword', $user->id], ['class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Payout Settings'), ['controller' => 'PaymentMethods', 'action' => 'viewByUser', $username], ['class' => 'btn btn-danger']) ?>
        </div>
    <?php endif;?>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="box box-widget widget-user">
            <div class="widget-user-header bg-red">
                <h3 class="widget-user-username"> Name: <?= h($user->name) ?></h3>
                <h5 class="widget-user-desc">Username: <?= h($user->username) ?></h5>
            </div>
            <div class="widget-user-image">
                <?php 
                    echo $this->Html->image('galerys/' . $imageProfile->galerys_id . '/' . $imageProfile->image, ['class' => 'img-circle', 'alt' => 'User Avatar']);
                ?>
            </div>
            <div class="box-footer">
                <ul class="nav nav-stacked">
                    <li>E-mail: <span class="pull-right badge bg-blue"><?= h($user->email) ?></span></li>
                </ul>
                <?php
                // <div class="row">
                //     <div class="col-sm-4 border-right">
                //         <div class="description-block">
                //         <h5 class="description-header">3,200</h5>
                //         <span class="description-text">SALES</span>
                //         </div>
                //     </div>
                //     <div class="col-sm-4 border-right">
                //         <div class="description-block">
                //         <h5 class="description-header">13,000</h5>
                //         <span class="description-text">FOLLOWERS</span>
                //         </div>
                //     </div>
                //     <div class="col-sm-4">
                //         <div class="description-block">
                //         <h5 class="description-header">35</h5>
                //         <span class="description-text">PRODUCTS</span>
                //         </div>
                //     </div>
                // </div>
                ?>
            </div>
        </div>
    </div>
</div>
</section>