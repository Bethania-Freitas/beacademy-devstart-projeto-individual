<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /** @test */
    public function check_if_users_column_is_correct()
    {
        $User = new User;

        $expected = [
            'name',
            'email',
            'password'
        ];

        $arrayCompared = array_diff($expected, $User->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
