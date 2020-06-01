<?php

namespace Tests\Feature;

//==========ここから追加==========
use App\Article;
use App\User;
//==========ここまで追加==========
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
//
class ArticlaeTest extends TestCase
{
    //==========ここから追加==========
    use RefreshDatabase;

    public function testIsLikedByNull()
    {
        $article = factory(Article::class)->create();

        $result = $article->isLikedBy(null);

        $this->assertFalse($result);
    }

}