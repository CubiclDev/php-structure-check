<?php

namespace Cubicl\StructureCheck\Test\Integration\Type;

use PHPUnit\Framework\TestCase;
use Cubicl\StructureCheck\Type\AnyType;
use Cubicl\StructureCheck\Type\ObjectType;
use Cubicl\StructureCheck\Type\OptionalType;

class ObjectTypeTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldHandleAbsenceOfOptionalDeclaredType(): void
    {
        $structure = new ObjectType([
            'opt' => new OptionalType(new AnyType())
        ]);

        $actual = $structure->check([]);

        $this->assertTrue($actual->isValid());
    }
}
