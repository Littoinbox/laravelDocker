<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParserPage extends Model
{
    use HasFactory;

    abstract function parse_page($url, $id);
    abstract function parse_brand($url, $id);

    public function parseAllapp(){

    }

}
