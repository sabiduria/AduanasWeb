<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Assignment> $assignments
 */
?>
<div class="assignments index content">
    <?= $this->Html->link(__('New Assignment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Assignments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('itinerary_id') ?></th>
                    <th><?= $this->Paginator->sort('agency_id') ?></th>
                    <th><?= $this->Paginator->sort('seal_id') ?></th>
                    <th><?= $this->Paginator->sort('vehicleplate') ?></th>
                    <th><?= $this->Paginator->sort('vehicletype') ?></th>
                    <th><?= $this->Paginator->sort('driver') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('exitdate') ?></th>
                    <th><?= $this->Paginator->sort('goodnature') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assignments as $assignment): ?>
                <tr>
                    <td><?= $this->Number->format($assignment->id) ?></td>
                    <td><?= $assignment->hasValue('itinerary') ? $this->Html->link($assignment->itinerary->name, ['controller' => 'Itineraries', 'action' => 'view', $assignment->itinerary->id]) : '' ?></td>
                    <td><?= $assignment->hasValue('agency') ? $this->Html->link($assignment->agency->name, ['controller' => 'Agencies', 'action' => 'view', $assignment->agency->id]) : '' ?></td>
                    <td><?= $assignment->hasValue('seal') ? $this->Html->link($assignment->seal->id, ['controller' => 'Seals', 'action' => 'view', $assignment->seal->id]) : '' ?></td>
                    <td><?= h($assignment->vehicleplate) ?></td>
                    <td><?= h($assignment->vehicletype) ?></td>
                    <td><?= h($assignment->driver) ?></td>
                    <td><?= h($assignment->phone) ?></td>
                    <td><?= h($assignment->exitdate) ?></td>
                    <td><?= h($assignment->goodnature) ?></td>
                    <td><?= h($assignment->created) ?></td>
                    <td><?= h($assignment->modified) ?></td>
                    <td><?= h($assignment->createdby) ?></td>
                    <td><?= h($assignment->modifiedby) ?></td>
                    <td><?= $assignment->deleted === null ? '' : $this->Number->format($assignment->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $assignment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assignment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->id)]) ?>
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