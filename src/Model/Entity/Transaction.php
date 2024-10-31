<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $sender_id
 * @property int|null $receiver_id
 * @property int $status_id
 * @property int $user_id
 * @property int $transactiontype_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $createdby
 * @property string|null $modifiedby
 * @property int|null $deleted
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Transactiontype $transactiontype
 * @property \App\Model\Entity\Movement[] $movements
 */
class Transaction extends Entity
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
        'sender_id' => true,
        'receiver_id' => true,
        'status_id' => true,
        'user_id' => true,
        'transactiontype_id' => true,
        'created' => true,
        'modified' => true,
        'createdby' => true,
        'modifiedby' => true,
        'deleted' => true,
        'agency' => true,
        'status' => true,
        'user' => true,
        'transactiontype' => true,
        'movements' => true,
    ];
}
