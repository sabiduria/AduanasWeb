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
            <?= $this->Html->link(__('List Seals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="seals form content">
            <?= $this->Form->create($seal) ?>
            <fieldset>
                <legend><?= __('Add Seal') ?></legend>
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
