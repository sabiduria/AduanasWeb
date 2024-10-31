<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seal $seal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Seals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="seals form content">
            <?= $this->Form->create($seal) ?>
            <fieldset>
                <legend><?= __('Edit Seal') ?></legend>
                <?php
                    echo $this->Form->control('reference');
                    echo $this->Form->control('barcode');
                    echo $this->Form->control('sealstatus');
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