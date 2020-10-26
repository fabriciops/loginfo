<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $units
 * @property float $quantity
 * @property float $price
 * @property \Cake\I18n\FrozenDate|null $expiration_date
 * @property \Cake\I18n\FrozenDate|null $Date_manufacturing
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Product extends Entity
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
        'name' => true,
        'units' => true,
        'quantity' => true,
        'price' => true,
        'expiration_date' => true,
        'Date_manufacturing' => true,
        'created' => true,
        'modified' => true,
    ];
}