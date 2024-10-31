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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agency->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agency->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Agencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agencies form content">
            <?= $this->Form->create($agency) ?>
            <fieldset>
                <legend><?= __('Edit Agency') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('code');
                    echo $this->Form->control('agencytype');
                    echo $this->Form->control('address');
                    echo $this->Form->control('country');
                    echo $this->Form->control('reference');
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
