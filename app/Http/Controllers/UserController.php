<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Ramsey\Uuid\v1;
use function Symfony\Component\String\u;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $users = User::where('user_type', 'users')->get();
        return view('admin.pages.user.index', compact('users'));
    }

    public function agents()
    {
        $agents = User::where('user_type','agents')->get();
        return view('admin.pages.agent.index',compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.agent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $agents = new User();
        $agents->name = $request->name;
        $agents->phone = $request->phone;
        $agents->email = $request->email;
        $agents->address = $request->address;
        $agents->website = $request->website;
        $agents->description = $request->description;
        $agents->user_type = 'agents';
        $file= $request->file('profile_photo_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('assets/property-images'), $filename);
        $agents->profile_photo_path = $filename;
        $agents->password = Hash::make($request->password);
        $agents->save();
        return redirect()->back()->with('success','Agents Are Added');
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.pages.user.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Agents Are deleted');
    }

    public function update_status($id){
        if (auth()->user()->user_type == 'admin') {
            $user = User::where('id', $id)->first();
            $status = $user->status;
            if ($user->status == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            $user->status = $status;
            if ($user->save()) {
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return $this->error([], 'Sorry you are not allowed to view this page.', 403);
        }
    }

    public function update_agents_status($id){

        if (auth()->user()->user_type == 'admin') {
            $user = User::where('id', $id)->first();
            $status = $user->status;
            if ($user->status == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            $user->status = $status;
            if ($user->save()) {
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return $this->error([], 'Sorry you are not allowed to view this page.', 403);
        }


    }


    }


