<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Assignment Entity
 *
 * @property int $id
 * @property int $itinerary_id
 * @property int $agency_id
 * @property int $seal_id
 * @property string|null $vehicleplate
 * @property string|null $vehicletype
 * @property string|null $driver
 * @property string|null $phone
 * @property \Cake\I18n\DateTime|null $exitdate
 * @property string|null $goodnature
 * @property string|null $currentlocation
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $createdby
 * @property string|null $modifiedby
 * @property int|null $deleted
 *
 * @property \App\Model\Entity\Itinerary $itinerary
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\Seal $seal
 */
class Assignment extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'itinerary_id' => true,
        'agency_id' => true,
        'seal_id' => true,
        'vehicleplate' => true,
        'vehicletype' => true,
        'driver' => true,
        'phone' => true,
        'exitdate' => true,
        'goodnature' => true,
        'currentlocation' => true,
        'created' => true,
        'modified' => true,
        'createdby' => true,
        'modifiedby' => true,
        'deleted' => true,
        'itinerary' => true,
        'agency' => true,
        'seal' => true,
    ];
}
