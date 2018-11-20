<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class PostTest extends TestCase
{

    /**
    * @group formatted-date
     */
    use DatabaseMigrations;
    public function testCanGetCreatedAtFormattedDate() {
        // arrange

        $post = Post::create([
            'title' => 'A simple title',
            'body'  => 'A simple body',
        ]);

        // create a post

        // act

        // get the value by calling the method
        $formattedDate = $post->createdAt();

        // assert

        // assert that returned value is as we expect

        $this->assertEquals($post->created_at->toFOrmattedDateString(),$formattedDate);
    }
}
