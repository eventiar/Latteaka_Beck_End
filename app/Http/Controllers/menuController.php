<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class menuController extends Controller
{
    //
    public function createmenu(Request $request)
    {
        $menu = menu::create([
             'title'     => $request->title,
             'description'    => $request->description,
             'photo' => $request->photo,
         ]);
        
        return $menu; 
    }

    public function showallmenu()
    {
        $menu = menu::all();
        return $menu;
    }

    public function showdetailmenu($id)
    {
        $menu = menu::find($id);
        return $menu;
    }

    public function updatemenu(Request $request, $id)
    {
        $menu = menu::findOrFail($id);
        $menu->update($request->all());

        return $menu;
    }

    public function deletemenu($id)
    {
        $menu = menu::find($id);
        $menu->delete();

        return "succesfull delete";
    }
}
