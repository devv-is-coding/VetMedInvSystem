<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'fname' => 'Lorem ipsum dolor sit amet',
                'lname' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'role' => 1,
                'has_pic' => 1,
                'is_active' => 1,
                'created_on' => '2025-07-25 03:16:19',
                'modified_on' => '2025-07-25 03:16:19',
                'deleted_on' => '2025-07-25 03:16:19',
            ],
        ];
        parent::init();
    }
}
