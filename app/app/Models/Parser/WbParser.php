<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Parser\ParserPage;

class WbParser extends ParserPage
{
    use HasFactory;

    public function parse_page($url)
    {

    }

    function parse_brand($url)
    {
        // TODO: Implement parse_brand() method.
    }
}
