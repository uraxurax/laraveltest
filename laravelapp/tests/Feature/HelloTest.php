<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Person;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class HelloTest extends TestCase
{
    use DatabaseMigrations;

    public function testHello()
    {
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);

        factory(Person::class)->create([
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => '123',
        ]);
        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.com',
            'age' => '123',
        ]);
    }

}
