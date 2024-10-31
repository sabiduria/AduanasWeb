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
                    echo $this->Form->control('itinerary_id', ['options' => $itineraries, 'label'=>'Itinerary']);
                    echo $this->Form->control('agency_id', ['options' => $agencies, 'label'=>'Agency Sender']);
                    echo $this->Form->control('seal_id', ['options' => $seals, 'label'=>'Seal']);
                    echo $this->Form->control('vehicleplate', ['label'=>'Vehicle Plate']);
                    echo $this->Form->control('vehicletype', ['label'=>'Vehicle Type']);
                    echo $this->Form->control('driver');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('exitdate', ['empty' => true, 'label'=>'Exit Date']);
                    echo $this->Form->control('goodnature', ['label'=>'Good Nature']);
                    echo $this->Form->control('currentlocation', ['label'=>'Current Location']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
