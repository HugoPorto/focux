<?php if($update !== null):?>
    <?php if(!sizeof($playlistUser->toArray())):?>
        <div class="row">
            <div class="error-page">
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                    <p>
                        You do not have a Playlist, to add a new, click below.
                    </p>
                    <?= $this->Html->link(__('Add Playlist'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
                </div>
            </div>
        </div>
    <?php else:?>
        <div class="row">
            <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                <?= $this->Html->link(__('Add Playlist'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
            </div>
        </div>
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Playlists</h3>
            </div>
            <div class="box-body">
                <table id="schedules" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($playlistUser as $pU): ?>
                            <tr>
                                <td><?= $this->Number->format($pU->id) ?></td>
                                <td><?= h($pU->title) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $pU->id, $username]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pU->id, $username]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('title') ?></th>
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