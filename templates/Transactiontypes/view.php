<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactiontype $transactiontype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transactiontype'), ['action' => 'edit', $transactiontype->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transactiontype'), ['action' => 'delete', $transactiontype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactiontype->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transactiontypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transactiontype'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transactiontypes view content">
            <h3><?= h($transactiontype->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($transactiontype->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($transactiontype->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($transactiontype->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transactiontype->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $transactiontype->deleted === null ? '' : $this->Number->format($transactiontype->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($transactiontype->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($transactiontype->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Transactions') ?></h4>
                <?php if (!empty($transactiontype->transactions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sender') ?></th>
                            <th><?= __('Receiver') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('User') ?></th>
                            <th><?= __('Transaction type') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Created by') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transactiontype->transactions as $transaction) : ?>
                        <tr>
                            <td><?= h($transaction->id) ?></td>
                            <td><?= h($transaction->sender_id) ?></td>
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
