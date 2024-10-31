<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Transaction> $transactions
 */
?>
<div class="transactions index content">
    <?= $this->Html->link(__('New Transaction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transactions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sender') ?></th>
                    <th><?= $this->Paginator->sort('receiver') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('user') ?></th>
                    <th><?= $this->Paginator->sort('transaction type') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('created by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?= $this->Number->format($transaction->id) ?></td>
                    <td><?= $transaction->hasValue('agency') ? $this->Html->link($transaction->agency->name, ['controller' => 'Agencies', 'action' => 'view', $transaction->agency->id]) : '' ?></td>
                    <td><?= $transaction->receiver_id === null ? '' : $this->Number->format($transaction->receiver_id) ?></td>
                    <td><?= $transaction->hasValue('status') ? $this->Html->link($transaction->status->name, ['controller' => 'Statuses', 'action' => 'view', $transaction->status->id]) : '' ?></td>
                    <td><?= $transaction->hasValue('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
                    <td><?= $transaction->hasValue('transactiontype') ? $this->Html->link($transaction->transactiontype->name, ['controller' => 'Transactiontypes', 'action' => 'view', $transaction->transactiontype->id]) : '' ?></td>
                    <td><?= h($transaction->created) ?></td>
                    <td><?= h($transaction->createdby) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?>
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
