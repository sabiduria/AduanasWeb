<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assignment $assignment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assignment'), ['action' => 'edit', $assignment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assignment'), ['action' => 'delete', $assignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assignment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assignments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assignment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="assignments view content">
            <h3><?= h($assignment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Itinerary') ?></th>
                    <td><?= $assignment->hasValue('itinerary') ? $this->Html->link($assignment->itinerary->name, ['controller' => 'Itineraries', 'action' => 'view', $assignment->itinerary->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Agency') ?></th>
                    <td><?= $assignment->hasValue('agency') ? $this->Html->link($assignment->agency->name, ['controller' => 'Agencies', 'action' => 'view', $assignment->agency->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Seal') ?></th>
                    <td><?= $assignment->hasValue('seal') ? $this->Html->link($assignment->seal->id, ['controller' => 'Seals', 'action' => 'view', $assignment->seal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vehicleplate') ?></th>
                    <td><?= h($assignment->vehicleplate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vehicletype') ?></th>
                    <td><?= h($assignment->vehicletype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Driver') ?></th>
                    <td><?= h($assignment->driver) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($assignment->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Goodnature') ?></th>
                    <td><?= h($assignment->goodnature) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($assignment->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($assignment->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assignment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $assignment->deleted === null ? '' : $this->Number->format($assignment->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exitdate') ?></th>
                    <td><?= h($assignment->exitdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($assignment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($assignment->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Currentlocation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($assignment->currentlocation)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>