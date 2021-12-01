<?php

namespace App\Tests\UnitTests;

use PHPUnit\Framework\TestCase;

class NullTest extends TestCase
{
    public function testNothing(): void
    {
        $this->assertNull(null);
    }
}
