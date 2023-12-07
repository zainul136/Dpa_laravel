<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Traits\FlashMessage;
use App\Models\Property;
use App\Models\Property_Image;
use App\Models\Type;
use Illuminate\Http\Request;

class PropertyAgentController extends Controller
{
    use FlashMessage;
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
       
            $properties =  Property::with('images')->where('user_id',auth()->user()->id)->get();
            return view('agents.pages.property.index', compact('properties'));
            // dd($properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('agents.pages.property.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
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
        $property->no_beds = $request->no_beds;
        $property->no_baths = $request->no_baths;
        $property->no_kitchen = $request->no_kitchen;
        $property->no_store_room = $request->no_store;
        $property->type = $request->type;
        $property->floor_type = $request->floor_type;
        $property->land_area = $request->land_area;
        $property->unit = $request->unit;
        $property->corner_place = $request->corner_place;
        $property->commercial_area = $request->commercial_area;
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
     * @return
     */
    public function edit($id)
    {
        $property = Property::query()->with('types')->find($id);
        return view('agents.pages.property.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
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
        $property->no_beds = $request->no_beds;
        $property->no_baths = $request->no_baths;
        $property->no_kitchen = $request->no_kitchen;
        $property->no_store_room = $request->no_store;
        $property->type = $request->type;
        $property->floor_type = $request->floor_type;
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

        return redirect()->back()->with('success','Property Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        return  redirect()->back()->with('success','Property Delete Successfully');
    }

    public function details($id){
        $property = Property::find($id);
        return view('agents.pages.property.detail' ,compact('property'));
    }

}
