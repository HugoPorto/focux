<?php if($update !== null):?>
    <?php if(!sizeof($purchasedPlaylists->toArray())):?>
        <div class="row">
            <div class="error-page">
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                    <p>
                        Você não possui itens registrados.
                    </p>
                </div>
            </div>
        </div>
    <?php else:?>
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Playlists</h3>
            </div>
            <div class="box-body">
                <table id="schedules" class="table table-bordered table-hover">
                    <thead>
                        <tr>                        
                            <th scope="col"><?= $this->Paginator->sort('playlist_users_id') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($purchasedPlaylists as $purchasedPlaylist): ?>
                            <tr>                        
                                <td><?= $purchasedPlaylist->has('playlist_user') ? $this->Html->link($purchasedPlaylist->playlist_user->title, ['controller' => 'PlaylistUsers', 'action' => 'view', $purchasedPlaylist->playlist_user->id, $owner, $purchasedPlaylist->id]) : '' ?></td>                            
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('playlist_users_id') ?></th>
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