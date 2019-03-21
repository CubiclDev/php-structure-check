<?php

namespace Cubicl\StructureCheck\Test\Integration\Type;

use PHPUnit\Framework\TestCase;
use Cubicl\StructureCheck\Checker;
use Cubicl\StructureCheck\CheckerInterface;
use Cubicl\StructureCheck\Type\AnyType;
use Cubicl\StructureCheck\Type\ObjectType;
use Cubicl\StructureCheck\Type\OptionalType;

/**
 * Class ObjectTypeTest
 * @package Cubicl\StructureCheck\Test\Integration\Type
 * @author Christian Blank <christian@cubicl.de>
 */
class ObjectTypeTest extends TestCase
{
    /**
     * @var CheckerInterface
     */
    private $checker;

    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();
        $this->checker = new Checker();
    }

    /**
     * @test
     */
    public function itShouldHandleAbsenceOfOptionalDeclaredType()
    {
        $structure = new ObjectType([
            'opt' => new OptionalType(new AnyType())
        ]);

        $actual = $structure->check([]);

        $this->assertSame(true, $actual->isValid());
    }
}