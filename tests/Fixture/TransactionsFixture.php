<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransactionsFixture
 */
class TransactionsFixture extends TestFixture
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
                'agency_id' => 1,
                'receiver_id' => 1,
                'status_id' => 1,
                'user_id' => 1,
                'transactiontype_id' => 1,
                'created' => '2024-10-31 18:00:11',
                'modified' => '2024-10-31 18:00:11',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
