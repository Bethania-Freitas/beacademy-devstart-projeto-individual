<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Rehearsal;

class RehearsalTest extends TestCase
{
    /** @test */
    public function check_if_rehearsals_column_is_correct()
    {
        $Rehearsal = new Rehearsal;

        $expected = [
            'Data',
            'Hora',
            'Local',
            'Custo',
        ];

        $arrayCompared = array_diff($expected, $Rehearsal->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
