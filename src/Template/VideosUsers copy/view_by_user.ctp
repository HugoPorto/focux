<?php if($update !== null):?>
    <?php if(!sizeof($videosUser->toArray())):?>
        <div class="row">
            <div class="error-page">
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                    <p>
                        You do not have a videos, to add a new, click below.
                    </p>
                    <?= $this->Html->link(__('Add Videos'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
                </div>
            </div>
        </div>
    <?php else:?>
        <div class="row">
            <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                <?= $this->Html->link(__('Add Video'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
            </div>
        </div>
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Videos</h3>
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
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $vU->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vU->id, $username]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vU->id, $username], ['confirm' => __('Are you sure you want to delete # {0}?', $vU->id)]) ?>
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