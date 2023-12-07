<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect(Request $request)
    {
        
        if (Auth::id()) {
            if (Auth::user()->user_type == 'admin') {
                $property = Property::count();
                $users = User::where('user_type', 'users')->count();
                $agents = User::where('user_type', 'agents')->count();

                return view('admin.index', compact('property', 'users', 'agents'));

            } else if (Auth::user()->user_type == 'agents') {
                $property = Property::query()->where('user_id','=',\auth()->user()->id)->count();
                return view('agents.index',compact('property'));
            } else 
            {
                $properties = Property::query()->get();
                $sales = Property::where('status', 'sale')->get();
                $rents = Property::where('status', 'rent')->get();
                $wanted = Property::query()->where('status', 'wanted')->take(1)->get();
                return view('users.index', compact('properties', 'wanted', 'sales', 'rents'));
            }
        } else {
            return redirect()->with('alert', 'Updated!');
            }
        
    }


    public function index()
    {

        $properties = Property::query()->latest()->take(2)->with('images')->get();
        $images = $properties->map(function ($name, $key) {
            return $name->images->map(function ($c_name, $c_key) {
                return json_decode($c_name->image_name);
            });

        });
        // $images = (isset($images) && count($images) > 0) ? Arr::flatten($images[0], 1) : false;
        
        
        



        $sales = Property::query()->where('status', 'sale')->with('images')->get();
       
        


        $rents = Property::query()->where('status', 'rent')->with('images')->get();
       
        

        $wanted = Property::query()->where('status', 'wanted')->take(1)->get();
        return view('users.index', compact('properties', 'sales', 'rents', 'wanted'));
    }
}

?>