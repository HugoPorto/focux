<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series $series
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Series'), ['action' => 'edit', $series->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Series'), ['action' => 'delete', $series->id], ['confirm' => __('Are you sure you want to delete # {0}?', $series->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Series'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Series'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genreseries'), ['controller' => 'Genreseries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genreseries'), ['controller' => 'Genreseries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seanseries'), ['controller' => 'Seanseries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seanseries'), ['controller' => 'Seanseries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videosseries'), ['controller' => 'Videosseries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videosseries'), ['controller' => 'Videosseries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="series view large-9 medium-8 columns content">
    <h3><?= h($series->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($series->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Launch') ?></th>
            <td><?= h($series->launch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($series->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($series->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Award') ?></th>
            <td><?= h($series->award) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Audio') ?></th>
            <td><?= h($series->audio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($series->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quality') ?></th>
            <td><?= h($series->quality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genreseries') ?></th>
            <td><?= $series->has('genreseries') ? $this->Html->link($series->genreseries->name, ['controller' => 'Genreseries', 'action' => 'view', $series->genreseries->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($series->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Views') ?></th>
            <td><?= $this->Number->format($series->views) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($series->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($series->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trend') ?></th>
            <td><?= $series->trend ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $series->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Linkimage') ?></h4>
        <?= $this->Text->autoParagraph(h($series->linkimage)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($series->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Trailer') ?></h4>
        <?= $this->Text->autoParagraph(h($series->trailer)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($series->link)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Seanseries') ?></h4>
        <?php if (!empty($series->seanseries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Series Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($series->seanseries as $seanseries): ?>
            <tr>
                <td><?= h($seanseries->id) ?></td>
                <td><?= h($seanseries->name) ?></td>
                <td><?= h($seanseries->series_id) ?></td>
                <td><?= h($seanseries->created) ?></td>
                <td><?= h($seanseries->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Seanseries', 'action' => 'view', $seanseries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Seanseries', 'action' => 'edit', $seanseries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seanseries', 'action' => 'delete', $seanseries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seanseries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Videosseries') ?></h4>
        <?php if (!empty($series->videosseries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Episode') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Thumb') ?></th>
                <th scope="col"><?= __('Numepisode') ?></th>
                <th scope="col"><?= __('Embed') ?></th>
                <th scope="col"><?= __('Embeddubbed') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Trend') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Series Id') ?></th>
                <th scope="col"><?= __('Seanseries Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($series->videosseries as $videosseries): ?>
            <tr>
                <td><?= h($videosseries->id) ?></td>
                <td><?= h($videosseries->episode) ?></td>
                <td><?= h($videosseries->description) ?></td>
                <td><?= h($videosseries->thumb) ?></td>
                <td><?= h($videosseries->numepisode) ?></td>
                <td><?= h($videosseries->embed) ?></td>
                <td><?= h($videosseries->embeddubbed) ?></td>
                <td><?= h($videosseries->link) ?></td>
                <td><?= h($videosseries->trend) ?></td>
                <td><?= h($videosseries->status) ?></td>
                <td><?= h($videosseries->series_id) ?></td>
                <td><?= h($videosseries->seanseries_id) ?></td>
                <td><?= h($videosseries->created) ?></td>
                <td><?= h($videosseries->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Videosseries', 'action' => 'view', $videosseries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Videosseries', 'action' => 'edit', $videosseries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Videosseries', 'action' => 'delete', $videosseries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosseries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
