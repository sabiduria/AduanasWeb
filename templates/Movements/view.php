<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movement $movement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Movement'), ['action' => 'edit', $movement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movement'), ['action' => 'delete', $movement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="movements view content">
            <h3><?= h($movement->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Transaction') ?></th>
                    <td><?= $movement->hasValue('transaction') ? $this->Html->link($movement->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $movement->transaction->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Seal') ?></th>
                    <td><?= $movement->hasValue('seal') ? $this->Html->link($movement->seal->id, ['controller' => 'Seals', 'action' => 'view', $movement->seal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($movement->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($movement->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($movement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $movement->deleted === null ? '' : $this->Number->format($movement->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($movement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($movement->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>