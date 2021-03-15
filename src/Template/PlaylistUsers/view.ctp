<div class="row">
    <?php if($usernameEdit == true):?>
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <?= $this->Html->link(__('Edit Playlist'), ['action' => 'edit', $playlistUser->id, $username], ['class' => 'btn btn-danger']) ?>
        </div>
    <?php endif;?>
    

    <div class="col-md-7">
        <h3 style="margin-top: 0px"><?= h($playlistUser->title) ?></h3>        
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($playlistUser->description)); ?>
    </div>
    <div class="col-md-5">
        <h3 style="margin-top: 0px">Paying for a playlist</h3>
        You must first send the playlist value to the registered payment account. 
        Then submit the voucher by clicking on Buy playlist.
    </div>
</div>

<?php if(!sizeof($videosUser->toArray())):?>
    <div class="row">
        <div class="error-page">
            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                <p>
                    You do not have a videos, to add a new, click below.
                </p>
                <?= $this->Html->link(__('Add Videos'), ['controller' => 'videosUsers', 'action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
            </div>
        </div>
    </div>
<?php else:?>
    <div class="row">
        <?php if($usernameEdit == true):?>
            <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                <?= $this->Html->link(__('Add Video'), ['controller' => 'videosUsers', 'action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
            </div>
<?php endif;?>        
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="box box-danger">
                <div class="box-header">
                    <?= $this->Html->link(__('Send Receipt'), ['controller' => 'patternPayments', 'action' => 'add', $username, $playlistUser->id, $playlistUser->users_id], ['class' => 'btn btn-danger']) ?>
                    <?= $this->Html->link(__('Report playlist'), ['controller' => 'playlistReports', 'action' => 'add', $username, $playlistUser->id], ['class' => 'btn btn-danger pull-right right-space']) ?>
                </div>
                <div class="box-body">
                    <table id="schedules" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('link_share') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($videosUser as $vU): ?>
                                <tr>
                                    <td><?= $this->Number->format($vU->id) ?></td>
                                    <td><?= h($vU->title) ?></td>
                                    <td><?php echo $this->Html->image('galerys/3/' . $vU->photo, ['class' => 'img-responsive']) ?></td>
                                    <td><?= h($vU->description) ?></td>
                                    <td><?= h($vU->link_share) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'videosUsers', 'action' => 'view', $vU->id]) ?>
                                        <?php if($usernameEdit == true):?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'videosUsers', 'action' => 'edit', $vU->id, $username]) ?>
                                        <?php endif;?>                                     
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('link_share') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <?php if(!sizeof($paymentMethods->toArray())):?>
        <?php else:?>
            <div class="col-md-5">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Payment Methods</h3>
                    </div>
                    <div class="box-body">
                        <table id="pay" class="table table-bordered table-hover">
                            <thead>
                                <tr>                    
                                    <th scope="col"><?= $this->Paginator->sort('method') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('email to pay') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('extra') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($paymentMethods as $pM): ?>
                                    <tr>                                    
                                        <td><?= h($pM->method) ?></td>                                    
                                        <td><?= h($pM->email) ?></td>                                    
                                        <td><?= h($pM->extra) ?></td>                                    
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'PaymentMethods', 'action' => 'view', $pM->id, $username]) ?>
                                            <?php if($usernameEdit == true):?>
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'PaymentMethods', 'action' => 'edit', $pM->id, $username]) ?>
                                            <?php endif;?>                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('method') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('extra') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif;?>
    </div>
<?php endif;?> 
