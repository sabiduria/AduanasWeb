<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assignment $assignment
 * @var \Cake\Collection\CollectionInterface|string[] $itineraries
 * @var \Cake\Collection\CollectionInterface|string[] $agencies
 * @var \Cake\Collection\CollectionInterface|string[] $seals
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Assignments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="assignments form content">
            <?= $this->Form->create($assignment) ?>
            <fieldset>
                <legend><?= __('Add Assignment') ?></legend>
                <?php
                    echo $this->Form->control('itinerary_id', ['options' => $itineraries]);
                    echo $this->Form->control('agency_id', ['options' => $agencies]);
                    echo $this->Form->control('seal_id', ['options' => $seals]);
                    echo $this->Form->control('vehicleplate');
                    echo $this->Form->control('vehicletype');
                    echo $this->Form->control('driver');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('exitdate', ['empty' => true]);
                    echo $this->Form->control('goodnature');
                    echo $this->Form->control('currentlocation');
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