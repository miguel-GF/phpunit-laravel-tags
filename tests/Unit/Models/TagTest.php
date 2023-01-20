<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Tag;

class TagTest extends TestCase
{
    public function testSlug()
    {
        $tag = new Tag;
        $tag->name = 'Proyecto PHP / xd - hola =)';

        $this->assertEquals('proyecto-php-/-xd---hola-=)', $tag->slug);
    }
}
