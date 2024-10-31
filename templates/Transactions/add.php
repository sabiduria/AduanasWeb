<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaction $transaction
 * @var \Cake\Collection\CollectionInterface|string[] $agencies
 * @var \Cake\Collection\CollectionInterface|string[] $statuses
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $transactiontypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Transactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transactions form content">
            <?= $this->Form->create($transaction) ?>
            <fieldset>
                <legend><?= __('Add Transaction') ?></legend>
                <?php
                echo $this->Form->control('agency_id', ['options' => $agencies, 'label'=>'Agency Sender']);
                echo $this->Form->control('receiver_id', ['options' => $agencies, 'label'=>'Agency Sender']);
                echo $this->Form->control('status_id', ['options' => $statuses]);
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('transactiontype_id', ['options' => $transactiontypes, 'label'=>'Transaction Type']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
