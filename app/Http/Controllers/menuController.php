<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class menuController extends Controller
{
    //create
    public function createmenu(Request $request)
    {
        $menu = menu::create([
             'title'     => $request->title,
             'description'    => $request->description,
             'photo' => $request->photo,
         ]);
        
        return $menu; 
    }

    //showall
    public function showallmenu()
    {
        $menu = menu::all();
        return $menu;
    }

    //showperdata
    public function showdetailmenu($id)
    {
        $menu = menu::find($id);
        return $menu;
    }

    //update
    public function updatemenu(Request $request, $id)
    {
        $menu = menu::findOrFail($id);
        $menu->update($request->all());

        return $menu;
    }

    //delete
    public function deletemenu($id)
    {
        $menu = menu::find($id);
        $menu->delete();

        return "succesfull delete";
    }
}
