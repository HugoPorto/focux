<?php if($update !== null):?>
    <?php if(!sizeof($patternPayments->toArray())):?>
        <div class="row">
            <div class="error-page">
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                    <p>
                        You do not have received payments.
                    </p>
                </div>
            </div>
        </div>
    <?php else:?>
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Your Payments</h3>
            </div>
            <div class="box-body">
                <table id="schedules" class="table table-bordered table-hover">
                    <thead>
                        <tr>                        
                            <th scope="col"><?= $this->Paginator->sort('playlist_users_id') ?></th>                
                            <th scope="col"><?= $this->Paginator->sort('photo') ?></th>                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($patternPayments as $patternPayment): ?>
                        <tr>                        
                            <td><?= $patternPayment->has('playlist_user') ? $this->Html->link($patternPayment->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $patternPayment->playlist_user->id]) : '' ?></td>
                            <td><?= h($patternPayment->photo) ?></td>                        
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>                        
                            <th scope="col"><?= $this->Paginator->sort('playlist_users_id') ?></th>                 
                            <th scope="col"><?= $this->Paginator->sort('photo') ?></th>                       
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>    
    <?php endif;?> 
<?php else:?>
    <div class="row">
        <div class="error-page">
            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                <p>
                    This feature is in the testing phase.
                </p>
            </div>
        </div>
    </div>
<?php endif;?> 