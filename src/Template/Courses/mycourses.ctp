<section class="content-header">
    <h1>
        Courses
        <small>All courses</small>
    </h1>
</section>

<section class="content">
    <?php if ($role == 'admin' || $role == 'root'): ?>
        <div class="row">
            <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
                <?=$this->Html->link(__('Add Courses'), ['action' => 'add'], ['class' => 'btn btn-danger'])?>
            </div>
        </div>
    <?php endif;?>
    <div class="row">
        <?php foreach ($myCourses as $mycourse): ?>
            <?php if ($mycourse->course->course !== 'UNDEFINED'): ?>            
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= h($mycourse->course->course) ?></h3>
                        <p><?= h($mycourse->course->description) ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <?=$this->Html->link('<i class="fa  fa-cubes"></i><span> View</span>', ['action' => 'view', $mycourse->course->id], ['escape' => false, 'class' => 'small-box-footer']) ?>
                    </div>
                    <?php if ($role == 'admin' || $role == 'root'): ?>
                        <?=$this->Html->link(__('Edit Course'), ['action' => 'edit', $mycourse->course->id], ['class' => 'btn btn-danger'])?>
                    <?php endif;?>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?=$this->Paginator->first('<< ' . __('first'))?>
            <?=$this->Paginator->prev('< ' . __('previous'))?>
            <?=$this->Paginator->numbers()?>
            <?=$this->Paginator->next(__('next') . ' >')?>
            <?=$this->Paginator->last(__('last') . ' >>')?>
        </ul>
        <p><?=$this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')])?></p>
    </div>
</div>
