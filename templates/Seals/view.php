<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seal $seal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Seal'), ['action' => 'edit', $seal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Seal'), ['action' => 'delete', $seal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Seals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Seal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="seals view content">
            <h3><?= h($seal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($seal->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Barcode') ?></th>
                    <td><?= h($seal->barcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sealstatus') ?></th>
                    <td><?= h($seal->sealstatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($seal->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($seal->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($seal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $seal->deleted === null ? '' : $this->Number->format($seal->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($seal->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($seal->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Assignments') ?></h4>
                <?php if (!empty($seal->assignments)) : ?>
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
                        <?php foreach ($seal->assignments as $assignment) : ?>
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
            <div class="related">
                <h4><?= __('Related Movements') ?></h4>
                <?php if (!empty($seal->movements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Transaction Id') ?></th>
                            <th><?= __('Seal Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($seal->movements as $movement) : ?>
                        <tr>
                            <td><?= h($movement->id) ?></td>
                            <td><?= h($movement->transaction_id) ?></td>
                            <td><?= h($movement->seal_id) ?></td>
                            <td><?= h($movement->created) ?></td>
                            <td><?= h($movement->modified) ?></td>
                            <td><?= h($movement->createdby) ?></td>
                            <td><?= h($movement->modifiedby) ?></td>
                            <td><?= h($movement->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Movements', 'action' => 'view', $movement->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Movements', 'action' => 'edit', $movement->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movements', 'action' => 'delete', $movement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movement->id)]) ?>
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