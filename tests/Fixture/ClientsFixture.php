<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientsFixture
 */
class ClientsFixture extends TestFixture
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
                'mname' => 'Lorem ipsum dolor sit amet',
                'lname' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'gender' => 1,
                'phone_number' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'is_active' => 1,
                'last_visit' => '2025-07-22 09:17:23',
                'next_visit' => '2025-07-22 09:17:23',
                'created_on' => '2025-07-22 09:17:23',
                'modified_on' => '2025-07-22 09:17:23',
                'deleted_on' => '2025-07-22 09:17:23',
            ],
        ];
        parent::init();
    }
}
