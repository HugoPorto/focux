<?php if(!sizeof($paymentMethods->toArray())):?>
    <div class="row">
        <div class="error-page">
            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i>Oops!</h3>
                <p>
                    You do not have a payment methods, to add a new, click below.
                </p>
                <?= $this->Html->link(__('Add Payment Method'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?> 
            </div>
        </div>
    </div>
<?php else:?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <?= $this->Html->link(__('Add Payment Method'), ['action' => 'add', $username], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title">Payment Methods</h3>
        </div>
        <div class="box-body">
            <table id="schedules" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('method') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('e-mail') ?></th>
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
                                <?= $this->Html->link(__('View'), ['action' => 'view', $pM->id, $username]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pM->id, $username]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('method') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('e-mail') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('extra') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>    
<?php endif;?> 