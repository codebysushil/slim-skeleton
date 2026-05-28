<?php

declare(strict_types=1);

namespace Slim\Tests;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function test_both_same()
    {
        $this->assertSame(3, 2 + 1);
    }
}
