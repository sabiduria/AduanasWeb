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
            <?= $this->Html->link(__('List Transactiontypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transactiontypes form content">
            <?= $this->Form->create($transactiontype) ?>
            <fieldset>
                <legend><?= __('Add Transaction type') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
