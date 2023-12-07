<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use App\Models\Property_Image;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Traits\FlashMessage;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;


class PropertyController extends Controller

{
    use FlashMessage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $properties =  Property::with('images')->get();
        return view('admin.pages.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.pages.property.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        
        $property = new Property();
        $property->user_id = auth()->user()->id;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->city = $request->city;
        $property->latitude = $request->latitude;
        $property->longitude = $request->longitude;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->land_area = $request->land_area;
        $property->unit = $request->unit;
        $property->corner_place = $request->corner_place;
        $property->commercial_area = $request->commercial_area;
        $property->built_status = $request->built_status;
        $property->no_beds = $request->no_beds;
        $property->no_baths = $request->no_baths;
        $property->no_kitchen = $request->no_kitchen;
        $property->no_store_room = $request->no_store;
        $property->floor_type = $request->floor_type;
        $property->type = $request->type;
        $property->upload_time = now();
        $property->status = $request->status;
        if($request->hasfile('property_img'))
        {

            foreach($request->file('property_img') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/property-images/', $name);
                $data[] = $name;
            }
        }
        if($property->save()) {
            $form = new Property_Image();
            $form->property_id = $property->id;
            $form->image_name = json_encode($data);
            $form->save();
        }
        if($property->save()) {
            $property_type = new  Type();
            $property_type->property_id = $property->id;
            $property_type->category = $request->category;
            $property_type->type = $request->property_type;
            $property_type->save();
        }

        return redirect()->back()->with('success','Property Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $property = Property::query()->with('types')->find($id);
        return view('admin.pages.property.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->title = $request->title;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->city = $request->city;
        $property->latitude = $request->latitude;
        $property->longitude = $request->longitude;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->land_area = $request->land_area;
        $property->unit = $request->unit;
        $property->corner_place = $request->corner_place;
        $property->commercial_area = $request->commercial_area;
        $property->status = $request->status;
        if($property->save()) {
            $property_type = Type::where('property_id',$property->id)->first();
            $property_type->property_id = $property->id;
            $property_type->type = $request->property_type;
            $property_type->save();
        }

//        $file= $request->file('property_img');
//        $filename= date('YmdHi').$file->getClientOriginalName();
//        $file-> move(public_path('assets/property-images'), $filename);
//        if($property->save()) {
//            $image = new  Property_Image();
//            $image->property_id = $property->id;
//            $image->image_name = $filename;
//            $image->save();
//        }

        $property->save();
        return redirect()->back()->with('success','Property Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        return  redirect()->back();
    }

    public function details($id){
        $property = Property::with('images')->where('id',$id)->first();
        $images = $property->images->map(function($name, $value) {
            return json_decode($name->image_name);
        });
        $images = $images ? Arr::flatten($images) : $images;

        return view('admin.pages.property.detail' ,compact('property','images'));
    }
}
