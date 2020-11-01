<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $query = Restaurant::query();

        if($name){
            $query->where('name', 'like', '%' . $name . '%');
        }
        if($category){
            $query->whereHas('Category', function($q) use ($category){
                $q->where('name', 'like', '%' . $category . '%');
            });
        }
        $restaurants = $query->simplepaginate(10);
        $restaurants->appends(compact('name', 'category'));
        return view('restaurants.index', compact('restaurants'));

    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.show', compact('restaurant'));
    }
}
