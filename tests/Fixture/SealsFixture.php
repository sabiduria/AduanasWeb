<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SealsFixture
 */
class SealsFixture extends TestFixture
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
                'reference' => 'Lorem ipsum dolor sit a',
                'barcode' => 'Lorem ipsum dolor sit amet',
                'sealstatus' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-10-31 16:16:52',
                'modified' => '2024-10-31 16:16:52',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
