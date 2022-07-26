<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Setlist;

class SetlistTest extends TestCase
{
    /** @test */
    public function check_if_setlist_column_is_correct()
    {
        $Setlist = new Setlist;

        $expected = [
            'Musica',
            'Interprete',
            'Link',
        ];

        $arrayCompared = array_diff($expected, $Setlist->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
