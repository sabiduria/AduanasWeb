<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SealsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SealsTable Test Case
 */
class SealsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SealsTable
     */
    protected $Seals;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Seals',
        'app.Itineraries',
        'app.Movements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Seals') ? [] : ['className' => SealsTable::class];
        $this->Seals = $this->getTableLocator()->get('Seals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Seals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SealsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
