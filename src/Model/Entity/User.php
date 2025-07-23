<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property bool $is_active
 * @property \Cake\I18n\DateTime $created_on
 * @property \Cake\I18n\DateTime $modified_on
 * @property \Cake\I18n\DateTime|null $deleted_on
 *
 * @property \App\Model\Entity\PersonalToken[] $personal_tokens
 */
class User extends Entity
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
        'username' => true,
        'email' => true,
        'password' => true,
        'is_active' => true,
        'created_on' => true,
        'modified_on' => true,
        'deleted_on' => true,
        'personal_tokens' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    // Hash password automatically
    protected function _setPassword(string $password): ?string {
    if (strlen($password) > 0) {
        return password_hash($password, PASSWORD_ARGON2ID);
        }
        return null;
    }
}
