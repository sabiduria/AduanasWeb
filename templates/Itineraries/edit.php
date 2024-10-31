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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itinerary->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itinerary->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Itineraries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="itineraries form content">
            <?= $this->Form->create($itinerary) ?>
            <fieldset>
                <legend><?= __('Edit Itinerary') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('gpscoordinates');
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
