<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Jobs\List\addList;
use App\Models\Lists\WatchLists;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobControllers extends Controller
{
    public function  addList(Request $request){

        $data = [
            'title'=>$request->title,
            'list'=>json_encode($request->link),
            'users_id'=>Auth::user()->id,
            'active'=>1
            ];
        $watchList = WatchLists::create($data);
        if (!emptyArray($watchList->id))
        {
            App\Jobs\List\addList::dispatch($watchList->id);



        }

    }
}
