<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItinerariesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItinerariesTable Test Case
 */
class ItinerariesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ItinerariesTable
     */
    protected $Itineraries;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Itineraries',
        'app.Seals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Itineraries') ? [] : ['className' => ItinerariesTable::class];
        $this->Itineraries = $this->getTableLocator()->get('Itineraries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Itineraries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ItinerariesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ItinerariesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
