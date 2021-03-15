<div id="modal" v-if="openModal">
    <div class="wrap">
        <div class="col-md-12" style="padding: 0px;text-align: center"  @click="closePoup()">
            <h3 style="">Clique na imagem abaixo para assistir o video</h3>
            <?php echo $this->Html->image($video->photo, ['class' => 'img-responsive']) ?>
        </div>
    </div>
</div>