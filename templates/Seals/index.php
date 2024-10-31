<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Seal> $seals
 */
?>
<div class="seals index content">
    <?= $this->Html->link(__('New Seal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Seals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('barcode') ?></th>
                    <th><?= $this->Paginator->sort('sealstatus') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($seals as $seal): ?>
                <tr>
                    <td><?= $this->Number->format($seal->id) ?></td>
                    <td><?= h($seal->reference) ?></td>
                    <td><?= h($seal->barcode) ?></td>
                    <td><?= h($seal->sealstatus) ?></td>
                    <td><?= h($seal->created) ?></td>
                    <td><?= h($seal->modified) ?></td>
                    <td><?= h($seal->createdby) ?></td>
                    <td><?= h($seal->modifiedby) ?></td>
                    <td><?= $seal->deleted === null ? '' : $this->Number->format($seal->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $seal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seal->id)]) ?>
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