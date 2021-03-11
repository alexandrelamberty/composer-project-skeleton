<?php
namespace Eevos;
use PHPUnit\Framework\TestCase;
use Eevos\Library;

class LibraryTest extends TestCase
{
    public function testTrueAssetsToTrue()
    {
        $condition = true;
        $this->assertTrue($condition);
    }
}
?>