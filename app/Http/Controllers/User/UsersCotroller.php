<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Property;
use App\Models\User;
use App\Models\User_Agent;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UsersCotroller extends Controller
{

    public function rateProperty(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('users.pages.rate_property');
    }


    public function searchProperty()
    {
        return view('users.pages.nearby_search');
    }

    public function propertyDetails($id)
    {
        $property = Property::with('images')->where('id', $id)->first();
        $images = $property->images->map(function ($name, $key) {
            return json_decode($name->image_name);
        });
        $images = $images ? Arr::flatten($images) : $images;
        $agents = User::query()->where('user_type', 'agents')->first();
        return view('users.pages.property_details', compact('property', 'images', 'agents'));
    }


    public function agentDetails($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $properties = Property::query()->latest()->take(3)->with('images')->get();
        $images = $properties->map(function ($name, $key) {
            return $name->images->map(function ($c_name, $c_key) {
                return json_decode($c_name->image_name);
            });
        });
        $images = $images ? Arr::flatten($images[0], 1) : $images;

        $agents = User::query()->where('user_type', 'agents')->find($id);
        return view('users.pages.agent_details', compact('agents', 'images', 'properties'));
    }

    public function userHome()
    {
        $agents = User::query()->where('user_type', '=', 'agents')->take(2)->get();
        $properties = Property::query()->with('images')->where('status', '=', 'sale')->take(3)->get();
        $images = $properties->map(function ($name, $key) {
            return $name->images->map(function ($c_name, $c_key) {
                return json_decode($c_name->image_name);
            });
        });
        $images = $images ? Arr::flatten($images[0], 1) : $images;
        return view('users.pages.home', compact('agents', 'properties', 'images'));
    }

    public function userPlot()
    {
        $agents = User::query()->where('user_type', '=', 'agents')->take('2')->get();
        $plots = Property::query()->with('images')->where('type', '=', 'plot')->get();
        $images = $plots->map(function ($name, $key) {
            return $name->images->map(function ($c_name, $c_key) {
                return json_decode($c_name->image_name);
            });
        });
        $images = $images ? Arr::flatten($images[0], 1) : $images;

        return view('users.pages.plot', compact('agents', 'images', 'plots'));
    }


    public function contactForm(Request $request)
    {
        $contacts = new Message();
        $contacts->sender_name = $request->sender_name;
        $contacts->sender_email = $request->sender_email;
        $contacts->message = $request->message;
        $contacts->contact_no = $request->contact_no;
        $contacts->save();

        return redirect('/');
    }

    public function propertySearch(Request $request): View|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $properties = Property::query();
        if ($request->input('location') != null) {
            $properties->Where('location', 'LIKE', "%$request->location%");
        }
        if ($request->input('min_price') != null || $request->input('max_price') != null) {
            $properties->WhereBetween('price', [$request->min_price, $request->max_price]);
        }
        $properties = $properties->where('status', $request->input('status'))->with('images')->get();
        $images = $properties->map(function ($name, $key) {
            return $name->images->map(function ($c_name, $c_key) {
                return json_decode($c_name->image_name);
            });

        });
        // $images = $images ? Arr::flatten($images[0], 1) : $images;
        $sales = Property::query()->where('status', '=', 'status')->get();
        $wanted = Property::query()->where('status', '=', 'wanted')->get();
        $rents = Property::query()->where('status', '=', 'rents')->get();
        return view('users.pages.search', compact('properties', 'sales', 'images', 'wanted', 'rents'));
    }

    public function propertySearchAdvance(Request $request): View|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $property = Property::query();

        if ($request->input('type') != null) {
            $property->Where('type', 'LIKE', "%$request->type%");
        }

        if ($request->input('min_price') != null || $request->input('max_price') != null) {
            $property->WhereBetween('price', [$request->min_price, $request->max_price]);
        }
        if ($request->input('unit') != null) {
            $property->Where('unit', 'LIKE', "%$request->unit%");
        }
        if ($request->input('land_area"') != null) {
            $property->Where('land_area', 'LIKE', "%$request->land_area%");
        }
        $properties = $property->with('images')->get();
        $images = $properties->map(function ($name, $key) {
            return $name->images->map(function ($c_name, $c_key) {
                return json_decode($c_name->image_name);
            });
        });
        $images = $images ? Arr::flatten($images[0], 1) : $images;

        $agents = User::query()->where('user_type', 'agents')->take(2)->get();
        return view('users.pages.home', compact('properties', 'images', 'agents'));
    }


    public function aboutUs()
    {
        return view('users.pages.about');
    }

//    meet our team
    public function meetTeam()
    {
        return view('users.pages.team');
    }

    public function contact()
    {
        return view('users.pages.contact');
    }

//logout
    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function userRegister(Request $request)
    {
        $new_users = new User();
        $new_users->user_type = $request->user_type;
        $new_users->email = $request->email;
        $new_users->name = $request->name;
        $new_users->phone = $request->phone;
        $new_users->address = $request->address;
        $new_users->password = Hash::make($request->password);
        $new_users->confirm_password = Hash::make($request->passeord);
        if ($new_users->save()) {
            $agents = new  User_Agent();
            $agents->user_id = $new_users->id;
            $agents->agency_name = $request->agency_name;
            $agents->agency_website = $request->agency_website;
            $agents->agency_address = $request->agency_address;
            $agents->agency_location = $request->agency_location;
            $agents->agency_city = $request->agency_city;
            $agents->agency_description = $request->agency_description;
            $agents->created_at = Carbon::now();
        //    $image_path = $request->file('agency_logo')->store('image', 'public');
        //    $agents->agency_logo =$image_path;
            $agents->save();
        }
        return redirect('/users/property-rate')->with('alert', 'Register successfully!');

    }
}


