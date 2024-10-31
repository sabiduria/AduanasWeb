<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Itinerary $itinerary
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Itineraries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="itineraries form content">
            <?= $this->Form->create($itinerary) ?>
            <fieldset>
                <legend><?= __('Add Itinerary') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('gpscoordinates', ['label'=>'GPS Coordinates']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
