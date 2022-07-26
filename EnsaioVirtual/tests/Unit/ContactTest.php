<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Contact;

class ContactTest extends TestCase
{
    /** @test */
    public function check_if_contact_column_is_correct()
    {
        $Contact = new Contact;

        $expected = [
            'name',
            'email',
            'tel',
            'messageClient',
        ];

        $arrayCompared = array_diff($expected, $Contact->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
