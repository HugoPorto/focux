<section class="invoice">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"><?=$this->Paginator->sort('menu')?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($videos as $video): ?>
                <tr>
                    <td><?=h($video->title)?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</section>