<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index(){
        $url_data = [
            array(
                'title' =>'Тут какой-то адрес',
                'url' => 'http://ya.ru'
            ),
            array(
                'title' =>'Тут какой-то адрес 2',
                'url' => 'http://yandex.ru'
            )
        ];
        return view('test', ['url_data'=>$url_data]);
    }
    function ajax (){
        $url_data = [
            array(
                'title' =>'Тут какой-то адрес',
                'url' => 'http://ya.ru'
            ),
            array(
                'title' =>'Тут какой-то адрес 2',
                'url' => 'http://yandex.ru'
            )
        ];
        return $url_data;
    }
}
