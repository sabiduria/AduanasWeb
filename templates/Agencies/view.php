<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agency'), ['action' => 'edit', $agency->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agency'), ['action' => 'delete', $agency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agency'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agencies view content">
            <h3><?= h($agency->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($agency->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($agency->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agencytype') ?></th>
                    <td><?= h($agency->agencytype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($agency->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($agency->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($agency->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created by') ?></th>
                    <td><?= h($agency->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified by') ?></th>
                    <td><?= h($agency->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agency->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $agency->deleted === null ? '' : $this->Number->format($agency->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($agency->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($agency->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Assignments') ?></h4>
                <?php if (!empty($agency->assignments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Itinerary') ?></th>
                            <th><?= __('Agency') ?></th>
                            <th><?= __('Seal') ?></th>
                            <th><?= __('Vehicle plate') ?></th>
                            <th><?= __('Vehicle type') ?></th>
                            <th><?= __('Driver') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Exit date') ?></th>
                            <th><?= __('Good nature') ?></th>
                            <th><?= __('Current location') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Created by') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($agency->assignments as $assignment) : ?>
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
                             <td><?= h($assignment->createdby) ?></td>
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
                <h4><?= __('Related Transactions') ?></h4>
                <?php if (!empty($agency->transactions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Agency') ?></th>
                            <th><?= __('Receiver') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('User') ?></th>
                            <th><?= __('Transaction type') ?></th>
                            <th><?= __('Created') ?></th>
                             <th><?= __('Created by') ?></th>
                             <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($agency->transactions as $transaction) : ?>
                        <tr>
                            <td><?= h($transaction->id) ?></td>
                            <td><?= h($transaction->agency_id) ?></td>
                            <td><?= h($transaction->receiver_id) ?></td>
                            <td><?= h($transaction->status_id) ?></td>
                            <td><?= h($transaction->user_id) ?></td>
                            <td><?= h($transaction->transactiontype_id) ?></td>
                            <td><?= h($transaction->created) ?></td>
                             <td><?= h($transaction->createdby) ?></td>
                              <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transaction->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transaction->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?>
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
