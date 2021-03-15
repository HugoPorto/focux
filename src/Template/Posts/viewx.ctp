<div class="row">
    <div class=col-md-8>
        <div class="box box-danger">
            <div class="box-header with-border">
                <p style="font-size: 12px" class="box-title"><b><?= h($post->title) ?></b></p>
            </div>    
            <div class="box-body">
                <div class="col-md-12" style="padding: 0px">
                    <?php echo $this->Html->image($post->photo, ['class' => 'img-responsive']) ?>
                    <br>
                    <p><?= h($post->post); ?></p>
                </div>            
            </div>
        </div>
    </div>
</div>