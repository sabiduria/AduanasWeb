<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Movement> $movements
 */
?>
<div class="movements index content">
    <?= $this->Html->link(__('New Movement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('transaction') ?></th>
                    <th><?= $this->Paginator->sort('seal') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('created by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movements as $movement): ?>
                <tr>
                    <td><?= $this->Number->format($movement->id) ?></td>
                    <td><?= $movement->hasValue('transaction') ? $this->Html->link($movement->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $movement->transaction->id]) : '' ?></td>
                    <td><?= $movement->hasValue('seal') ? $this->Html->link($movement->seal->id, ['controller' => 'Seals', 'action' => 'view', $movement->seal->id]) : '' ?></td>
                    <td><?= h($movement->created) ?></td>
                    <td><?= h($movement->createdby) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movement->id)]) ?>
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
