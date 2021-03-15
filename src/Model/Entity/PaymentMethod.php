<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PaymentMethod Entity
 *
 * @property int $id
 * @property string $method
 * @property string $email
 * @property string $extra
 * @property int $users_id
 * @property int $method_topayments_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\MethodTopayment $method_topayment
 */
class PaymentMethod extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'method' => true,
        'email' => true,
        'extra' => true,
        'users_id' => true,
        'method_topayments_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'method_topayment' => true
    ];
}
