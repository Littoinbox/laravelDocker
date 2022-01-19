<?php

namespace App\Http\Controllers;

use App\Models\Parser\WbParser;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index(){
        $a = WbParser::parse_brand('https://www.wildberries.ru/brands/podarok52-112777', 1);
        //$a = WbParser::parse_brand('https://www.ten-prom.ru/', 1);
        $sort = WbParser::findNewItem($a);
        echo "<pre>";
        print_R($sort);
        echo "</pre>";

    }
    function ajax (Request $request){
       $a = $request->link;
       print_R($a);

    }
}
