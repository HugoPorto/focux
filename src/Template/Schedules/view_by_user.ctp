<section class="content">
<?php if(!sizeof($schedules->toArray())):?>
    <div class="row">
        <div class="error-page">
            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                <p>
                    You do not have a calendar, to add a new, click below.
                </p>
                <?= $this->Html->link(__('Add Schedule'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
            </div>
        </div>
    </div>
<?php else:?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <?= $this->Html->link(__('Add Schedule'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
        </div>
    </div>
    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title">Schedules</h3>
        </div>
        <div class="box-body">
            <table id="schedules" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('schedule') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schedules as $schedule): ?>
                        <tr>
                            <td><?= $this->Number->format($schedule->id) ?></td>
                            <td><?= h($schedule->schedule) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $schedule->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedule->id, $username]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedule->id, $username], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('schedule') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>    
<?php endif;?> 
</section>