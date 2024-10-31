<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Transactiontype> $transactiontypes
 */
?>
<div class="transactiontypes index content">
    <?= $this->Html->link(__('New Transactiontype'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transaction Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('created by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactiontypes as $transactiontype): ?>
                <tr>
                    <td><?= $this->Number->format($transactiontype->id) ?></td>
                    <td><?= h($transactiontype->name) ?></td>
                    <td><?= h($transactiontype->created) ?></td>
                    <td><?= h($transactiontype->createdby) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transactiontype->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactiontype->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactiontype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactiontype->id)]) ?>
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
