<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;

class BookController extends Controller
{
    function index(){
        return view('rooms');
    }
    function create(){
        return view('admin.create');
    }

    function store(Request $request){

        $name = $request->name;
        $typeroom = $request->typeroom;
        $number = $request->number;
        $area = $request->area;
        $price =$request->price;
        $image = $request->file('image')->store('public');

        $room = new Room;
        $room->name = $name;
        $room->image = $image;
        $room->typeroom = $typeroom;
        $room->number = $number;
        $room->area = $area;
        $room->price = $price;
        $room->save();
        redirect("/rooms");

    }
}
