<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Show;

class ShowTest extends TestCase
{
    /** @test */
    public function check_if_show_column_is_correct()
    {
        $Show = new show;

        $expected = [
            'Data',
            'Local',
            'Formato',
            'Cidade',
            'Cachê'
        ];

        $arrayCompared = array_diff($expected, $Show->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
