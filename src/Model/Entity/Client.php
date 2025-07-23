<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $fname
 * @property string|null $mname
 * @property string $lname
 * @property int $age
 * @property int $gender
 * @property int $phone_number
 * @property string $email
 * @property bool $is_active
 * @property \Cake\I18n\DateTime|null $last_visit
 * @property \Cake\I18n\DateTime|null $next_visit
 * @property \Cake\I18n\DateTime $created_on
 * @property \Cake\I18n\DateTime $modified_on
 * @property \Cake\I18n\DateTime|null $deleted_on
 */
class Client extends Entity
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
        'fname' => true,
        'mname' => true,
        'lname' => true,
        'age' => true,
        'gender' => true,
        'phone_number' => true,
        'email' => true,
        'is_active' => true,
        'last_visit' => true,
        'next_visit' => true,
        'created_on' => true,
        'modified_on' => true,
        'deleted_on' => true,
    ];
}
