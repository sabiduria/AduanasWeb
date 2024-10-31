<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssignmentsFixture
 */
class AssignmentsFixture extends TestFixture
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
                'itinerary_id' => 1,
                'agency_id' => 1,
                'seal_id' => 1,
                'vehicleplate' => 'Lorem ipsum dolor sit amet',
                'vehicletype' => 'Lorem ipsum dolor sit amet',
                'driver' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum d',
                'exitdate' => '2024-10-31 16:16:51',
                'goodnature' => 'Lorem ipsum dolor sit amet',
                'currentlocation' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2024-10-31 16:16:51',
                'modified' => '2024-10-31 16:16:51',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
