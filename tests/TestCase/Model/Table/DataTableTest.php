<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DataTable Test Case
 */
class DataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DataTable
     */
    protected $Data;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Data',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Data') ? [] : ['className' => DataTable::class];
        $this->Data = $this->getTableLocator()->get('Data', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Data);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
