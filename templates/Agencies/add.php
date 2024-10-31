<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agency $agency
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Agencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agencies form content">
            <?= $this->Form->create($agency) ?>
            <fieldset>
                <legend><?= __('Add Agency') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('code');
                    echo $this->Form->control('agencytype', ['label'=>'Agency Type', 'options'=>['Warehouse'=>'Warehouse', 'Agency'=>'Agency']]);
                    echo $this->Form->control('address');
                    echo $this->Form->control('country');
                    echo $this->Form->control('reference');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
