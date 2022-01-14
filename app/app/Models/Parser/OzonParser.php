<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Parser\ParserPage;

class OzonParser extends ParserPage
{
    use HasFactory;

    function parse_page($url, $id)
    {
        // TODO: Implement parse_page() method.
    }

    function parse_brand($url, $id)
    {
        // TODO: Implement parse_brand() method.
    }
}
