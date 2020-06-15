<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    function index(){
        $rooms = Room::all();
        return view('rooms',["rooms"=>$rooms]);
    }
}
