<?php
/**
 * Tests for smartQuake
 */

use PHPUnit\Framework\TestCase;
use Smartquake\Smartquake;

class SmartquakeTest extends TestCase {
    private Smartquake $instance;

    protected function setUp(): void {
        $this->instance = new Smartquake(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartquake::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
