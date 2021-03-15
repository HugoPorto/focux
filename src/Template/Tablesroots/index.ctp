<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Actions')?></li>
        <li><?=$this->Html->link(__('New Tablesroot'), ['action' => 'add'])?></li>
    </ul>
</nav>
<div class="tablesroots index large-9 medium-8 columns content">
    <h3><?=__('Tables of Root Users')?></h3>
    <table id="general" class="display" style="width:100%">
        <thead>
            <tr>
                <th><?=$this->Paginator->sort('id')?></th>
                <th><?=$this->Paginator->sort('title')?></th>
                <th><?=$this->Paginator->sort('text')?></th>
                <th><?=$this->Paginator->sort('link')?></th>
                <th><?=$this->Paginator->sort('created')?></th>
                <th><?=$this->Paginator->sort('modified')?></th>
                <th><?=__('Actions')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tablesroots as $tablesroot): ?>
                <tr>
                    <td><?=$this->Number->format($tablesroot->id)?></td>
                    <td><?=h($tablesroot->title)?></td>
                    <td><?=h($tablesroot->text)?></td>
                    <td><?=h($tablesroot->link)?></td>
                    <td><?=h($tablesroot->created)?></td>
                    <td><?=h($tablesroot->modified)?></td>
                    <td class="actions">
                        <?=$this->Html->link(__('View'), ['action' => 'view', $tablesroot->id])?>
                        <?=$this->Html->link(__('Edit'), ['action' => 'edit', $tablesroot->id])?>
                        <?=$this->Form->postLink(__('Delete'), ['action' => 'delete', $tablesroot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablesroot->id)])?>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <th><?=$this->Paginator->sort('id')?></th>
                <th><?=$this->Paginator->sort('title')?></th>
                <th><?=$this->Paginator->sort('text')?></th>
                <th><?=$this->Paginator->sort('link')?></th>
                <th><?=$this->Paginator->sort('created')?></th>
                <th><?=$this->Paginator->sort('modified')?></th>
                <th><?=__('Actions')?></th>
            </tr>
        </tfoot>
    </table>
    <br>
    <br>
</div>
