<section class="content">
<div class="row">
    <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
        <?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->id, $username], ['class' => 'btn btn-danger']) ?>
        <?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->id, $username], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id), 'class' => 'btn btn-danger']) ?>
    </div>

    <div class="col-md-12">
        <p><?= __($schedule->schedule) ?></p>
        <?= $schedule->embed; ?>
    </div>
</div>
</section>