<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PetOwnersFixture
 */
class PetOwnersFixture extends TestFixture
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
                'pet_id' => 1,
                'client_id' => 1,
                'is_active' => 1,
                'created_by' => 1,
                'created_on' => '2025-08-05 03:07:29',
                'modified_on' => '2025-08-05 03:07:29',
                'deleted_by' => 1,
                'deleted_on' => '2025-08-05 03:07:29',
                'is_deleted' => 1,
            ],
        ];
        parent::init();
    }
}
