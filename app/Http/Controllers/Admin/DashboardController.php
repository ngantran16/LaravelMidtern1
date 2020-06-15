<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\Http\Requests\CreateRequest;

class DashboardController extends Controller
{
    function create(){
        return view('admin.create');
    }

    function store(CreateRequest $request){

        $name = $request->name;
        $typeroom = $request->typeroom;
        $number = $request->number;
        $area = $request->area;
        $price =$request->price;
        $image = $request->file('image')->store('public');

        $request->validated();

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
