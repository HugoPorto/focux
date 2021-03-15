<div class="paymentMethods view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Method:') ?></th>
            <td><?= h($paymentMethod->method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email:') ?></th>
            <td><?= h($paymentMethod->email) ?></td>
        </tr>
        <tr>
            <th scope="row" style="padding-right: 10px"><?= __('Method Ref:') ?></th>
            <td><?= h($paymentMethod->method_topayment->method);?></td>
        </tr>
    </table>
    <div class="row">
        <?= $this->Text->autoParagraph(h($paymentMethod->extra)); ?>
    </div>
</div>
