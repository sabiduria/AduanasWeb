<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Itinerary $itinerary
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Itinerary'), ['action' => 'edit', $itinerary->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Itinerary'), ['action' => 'delete', $itinerary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itinerary->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Itineraries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Itinerary'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="itineraries view content">
            <h3><?= h($itinerary->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($itinerary->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gpscoordinates') ?></th>
                    <td><?= h($itinerary->gpscoordinates) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($itinerary->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($itinerary->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($itinerary->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $itinerary->deleted === null ? '' : $this->Number->format($itinerary->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($itinerary->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($itinerary->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Assignments') ?></h4>
                <?php if (!empty($itinerary->assignments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Itinerary Id') ?></th>
                            <th><?= __('Agency Id') ?></th>
                            <th><?= __('Seal Id') ?></th>
                            <th><?= __('Vehicleplate') ?></th>
                            <th><?= __('Vehicletype') ?></th>
                            <th><?= __('Driver') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Exitdate') ?></th>
                            <th><?= __('Goodnature') ?></th>
                            <th><?= __('Currentlocation') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($itinerary->assignments as $assignment) : ?>
                        <tr>
                            <td><?= h($assignment->id) ?></td>
                            <td><?= h($assignment->itinerary_id) ?></td>
                            <td><?= h($assignment->agency_id) ?></td>
                            <td><?= h($assignment->seal_id) ?></td>
                            <td><?= h($assignment->vehicleplate) ?></td>
                            <td><?= h($assignment->vehicletype) ?></td>
                            <td><?= h($assignment->driver) ?></td>
                            <td><?= h($assignment->phone) ?></td>
                            <td><?= h($assignment->exitdate) ?></td>
                            <td><?= h($assignment->goodnature) ?></td>
                            <td><?= h($assignment->currentlocation) ?></td>
                            <td><?= h($assignment->created) ?></td>
                            <td><?= h($assignment->modified) ?></td>
                            <td><?= h($assignment->createdby) ?></td>
                            <td><?= h($assignment->modifiedby) ?></td>
                            <td><?= h($assignment->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Assignments', 'action' => 'view', $assignment->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Assignments', 'action' => 'edit', $assignment->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assignments', 'action' => 'delete', $assignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>