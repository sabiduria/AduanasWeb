<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Itinerary> $itineraries
 */
?>
<div class="itineraries index content">
    <?= $this->Html->link(__('New Itinerary'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Itineraries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('gps coordinates') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('created by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itineraries as $itinerary): ?>
                <tr>
                    <td><?= $this->Number->format($itinerary->id) ?></td>
                    <td><?= h($itinerary->name) ?></td>
                    <td><?= h($itinerary->gpscoordinates) ?></td>
                    <td><?= h($itinerary->created) ?></td>
                    <td><?= h($itinerary->createdby) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $itinerary->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itinerary->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itinerary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itinerary->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
