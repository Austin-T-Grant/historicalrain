<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Region Entity
 *
 * @property int $id
 * @property string $country
 * @property string $province
 * @property string $city
 * @property float $rain
 * @property \Cake\I18n\FrozenTime $created
 */
class Region extends Entity
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
        'country' => true,
        'province' => true,
        'city' => true,
        'rain' => true,
        'created' => true,
    ];
}
