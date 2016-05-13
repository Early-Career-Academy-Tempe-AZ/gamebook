<?php

namespace rvilbrandt\gamebook;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-04 at 09:48:30.
 */
class ParserTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Parser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Parser(new Loader\JsonFile(__DIR__ . "/../data/gamebook_valid.json"));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers rvilbrandt\gamebook\Parser::setStateList
     */
    public function testSetStateList() {
        $this->assertNull($this->object->setStateList(new Model\StateList()));
    }

    /**
     * @covers rvilbrandt\gamebook\Parser::setInventory
     */
    public function testSetInventory() {
        $this->assertNull($this->object->setInventory(new Model\Inventory()));
    }

    /**
     * @covers rvilbrandt\gamebook\Parser::setCurrentSceneId
     */
    public function testSetCurrentSceneId() {
        $this->assertNull($this->object->setCurrentSceneId("test"));
    }

    /**
     * @covers rvilbrandt\gamebook\Parser::run
     */
    public function testRun() {
        
        $gameState = $this->object->run();
        
        $this->assertInstanceOf("\\rvilbrandt\\gamebook\\Model\\GameState", $gameState);
        $this->assertInstanceOf("\\rvilbrandt\\gamebook\\Model\\Inventory", $gameState->inventory);
        $this->assertInstanceOf("\\rvilbrandt\\gamebook\\Model\\StateList", $gameState->stateList);
        $this->assertInstanceOf("\\rvilbrandt\\gamebook\\Model\\Gamebook\\Scene", $gameState->scene);
    }

}