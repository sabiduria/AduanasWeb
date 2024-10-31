<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction $transaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transactions view content">
            <h3><?= h($transaction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Agency') ?></th>
                    <td><?= $transaction->hasValue('agency') ? $this->Html->link($transaction->agency->name, ['controller' => 'Agencies', 'action' => 'view', $transaction->agency->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $transaction->hasValue('status') ? $this->Html->link($transaction->status->name, ['controller' => 'Statuses', 'action' => 'view', $transaction->status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $transaction->hasValue('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Transactiontype') ?></th>
                    <td><?= $transaction->hasValue('transactiontype') ? $this->Html->link($transaction->transactiontype->name, ['controller' => 'Transactiontypes', 'action' => 'view', $transaction->transactiontype->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($transaction->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($transaction->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receiver Id') ?></th>
                    <td><?= $transaction->receiver_id === null ? '' : $this->Number->format($transaction->receiver_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $transaction->deleted === null ? '' : $this->Number->format($transaction->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($transaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($transaction->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Movements') ?></h4>
                <?php if (!empty($transaction->movements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Transaction') ?></th>
                            <th><?= __('Seal') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Created by') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transaction->movements as $movement) : ?>
                        <tr>
                            <td><?= h($movement->id) ?></td>
                            <td><?= h($movement->transaction_id) ?></td>
                            <td><?= h($movement->seal_id) ?></td>
                            <td><?= h($movement->created) ?></td>
                            <td><?= h($movement->createdby) ?></td>
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
