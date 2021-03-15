<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewsAnime Entity
 *
 * @property int $id
 * @property int $animes_id
 * @property int $number_view
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Anime $anime
 */
class ViewsAnime extends Entity
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
        'animes_id' => true,
        'number_view' => true,
        'created' => true,
        'modified' => true,
        'anime' => true
    ];
}