<?php

namespace StructureCheck\Test\Integration\Type;

use PHPUnit\Framework\TestCase;
use StructureCheck\Checker;
use StructureCheck\CheckerInterface;
use StructureCheck\Type\AnyType;
use StructureCheck\Type\ObjectType;
use StructureCheck\Type\OptionalType;

/**
 * Class ObjectTypeTest
 * @package StructureCheck\Test\Integration\Type
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