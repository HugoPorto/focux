<section class="invoice">
<div class="row">
    <?php if($role == 'root'):?>
        <div class="col-md-12" style="margin-top: 0px; margin-bottom: 10px">
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $about->id], ['class' => 'btn btn-danger']) ?> 
        </div>                         
    <?php endif;?>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header with-border">
            <h3><?= $about->title ?></h3>
            </div>
            <div class="box-body">                
                <?= $about->text; ?>
            </div>
        </div>
    </div>
</div>
</section>