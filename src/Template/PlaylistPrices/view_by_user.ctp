<?php if($update !== null):?>
    <?php if(!sizeof($playlistPrices->toArray())):?>
        <div class="row">
            <div class="error-page">
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                    <p>
                        You do not have prices, to add a new, click below.
                    </p>
                    <?= $this->Html->link(__('Add price in one playlist'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
                </div>
            </div>
        </div>
    <?php else:?>
        <div class="row">
            <?php if($usernameEdit == true):?>
                <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                    <?= $this->Html->link(__('Add Playlist'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
                </div>
            <?php endif;?>
        </div>
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Playlists</h3>
            </div>
            <div class="box-body">
                <table id="schedules" class="table table-bordered table-hover">
                    <thead>
                        <tr>                    
                            <th scope="col"><?= $this->Paginator->sort('playlist_users_id') ?></th>
                            
                            <th scope="col"><?= $this->Paginator->sort('price') ?></th>                      
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($playlistPrices as $playlistPrice): ?>
                    <tr>                    
                    <td><?= $playlistPrice->has('playlist_user') ? $this->Html->link($playlistPrice->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $playlistPrice->playlist_user->id, $username]) : '' ?></td>
                        
                        <td><?= $this->Number->format($playlistPrice->price) ?></td>
                    
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playlistPrice->id, $username]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playlistPrice->id, $username], ['confirm' => __('Are you sure you want to delete # {0}?', $playlistPrice->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>                        
                            <th scope="col"><?= $this->Paginator->sort('playlist_users_id') ?></th>
                            
                            <th scope="col"><?= $this->Paginator->sort('price') ?></th>               
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
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