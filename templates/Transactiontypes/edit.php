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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transactiontype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transactiontype->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transactiontypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transactiontypes form content">
            <?= $this->Form->create($transactiontype) ?>
            <fieldset>
                <legend><?= __('Edit Transactiontype') ?></legend>
                <?php
                    echo $this->Form->control('name');
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
