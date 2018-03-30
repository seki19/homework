<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GameScoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GameScoresTable Test Case
 */
class GameScoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GameScoresTable
     */
    public $GameScores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.game_scores',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GameScores') ? [] : ['className' => GameScoresTable::class];
        $this->GameScores = TableRegistry::get('GameScores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GameScores);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
