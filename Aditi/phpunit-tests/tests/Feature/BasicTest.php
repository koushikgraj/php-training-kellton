<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Box;
# test/Feature/BasicTest.php
# Import Box class


class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBoxContents()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);
        $this->assertTrue($box->has('toy1'),'there are some values'); //here if we write false instead of true here if we change anything then it shows some error
        $this->assertFalse($box->has('ball')); //then it shows Tests: 7, Assertions: 17, Failures: 1.
    }


    public function testTakeOneFromTheBox()
    {
        $box = new Box(['torch']);
        $this->assertEquals('torch', $box->takeOne());

        // Null, now the box is empty
        $this->assertNull($box->takeOne());
    }


    public function testStartsWithALetter()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);

        $results = $box->startsWith('t');

        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        // Empty array if passed even
        $this->assertEmpty($box->startsWith('s'));
    }
}
