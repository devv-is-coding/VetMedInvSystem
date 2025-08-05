<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BreedsFixture
 */
class BreedsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'is_active' => 1,
                'is_cat' => 1,
                'created_by' => 1,
                'created_on' => '2025-08-01 02:11:21',
                'modified_on' => '2025-08-01 02:11:21',
                'is_deleted' => 1,
                'deleted_by' => 1,
                'deleted_on' => '2025-08-01 02:11:21',
            ],
        ];
        parent::init();
    }
}
