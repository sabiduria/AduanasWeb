<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seal Entity
 *
 * @property int $id
 * @property string|null $reference
 * @property string|null $barcode
 * @property string|null $sealstatus
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $createdby
 * @property string|null $modifiedby
 * @property int|null $deleted
 *
 * @property \App\Model\Entity\Itinerary[] $itineraries
 * @property \App\Model\Entity\Movement[] $movements
 */
class Seal extends Entity
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
        'reference' => true,
        'barcode' => true,
        'sealstatus' => true,
        'created' => true,
        'modified' => true,
        'createdby' => true,
        'modifiedby' => true,
        'deleted' => true,
        'itineraries' => true,
        'movements' => true,
    ];
}
