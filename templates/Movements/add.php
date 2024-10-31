<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movement $movement
 * @var \Cake\Collection\CollectionInterface|string[] $transactions
 * @var \Cake\Collection\CollectionInterface|string[] $seals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Movements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="movements form content">
            <?= $this->Form->create($movement) ?>
            <fieldset>
                <legend><?= __('Add Movement') ?></legend>
                <?php
                    echo $this->Form->control('transaction_id', ['options' => $transactions]);
                    echo $this->Form->control('seal_id', ['options' => $seals]);
                    echo $this->Form->control('createdby');
                    echo $this->Form->control('modifiedby');
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
