<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Lists\WatchLists;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index(){
        $user = \Auth::user();
        $data = WatchLists::where('users_id', $user->id)->get();

        return view('main.dashboard', ['user'=>$user, 'data'=>$data]);
    }
}
