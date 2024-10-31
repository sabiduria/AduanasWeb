<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactiontypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactiontypesTable Test Case
 */
class TransactiontypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TransactiontypesTable
     */
    protected $Transactiontypes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Transactiontypes',
        'app.Transactions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Transactiontypes') ? [] : ['className' => TransactiontypesTable::class];
        $this->Transactiontypes = $this->getTableLocator()->get('Transactiontypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Transactiontypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TransactiontypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
