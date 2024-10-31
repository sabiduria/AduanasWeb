<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Agency> $agencies
 */
?>
<div class="agencies index content">
    <?= $this->Html->link(__('New Agency'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agencies') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('agency type') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('created by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agencies as $agency): ?>
                <tr>
                    <td><?= $this->Number->format($agency->id) ?></td>
                    <td><?= h($agency->name) ?></td>
                    <td><?= h($agency->code) ?></td>
                    <td><?= h($agency->agencytype) ?></td>
                    <td><?= h($agency->address) ?></td>
                    <td><?= h($agency->country) ?></td>
                    <td><?= h($agency->reference) ?></td>
                    <td><?= h($agency->created) ?></td>
                    <td><?= h($agency->createdby) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agency->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agency->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id)]) ?>
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
