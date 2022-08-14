<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        $users = UserResource::collection(ModelsUser::all());
        return response($users, '200');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $validated = $request->validate([
            
    //         'first_name' => 'required|string',
    //         'last_name' => 'required|string',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8',
    //         'password_confirmation' => 'required|same:password',

    //     ]);

    //     $validated['password'] = Hash::make(request('password'));
    //     $validated['activate'] = $request->activate?true:false;
    //     $validated['role'] = $request->role?'admin':'user';
    //     $validated['date_of_birth'] = $request->dateOfBirth;

    //     if ($request->file('photo')) {
            
    //         $file = $request->file('photo');
    //         $fileName = 'user-'.time().'.'.$file->getClientOriginalExtension();
    //         $path = $file->storeAs('imgUser', $fileName, 'public');
    //         $validated['photo'] = $path;
    //     }
    // //    dd($validated);

    //     $userRegister = User::create($validated);

    //     if ($userRegister) {
    //         return  redirect()->route('login')->with(["alertSuccess"=>"registration completed successfully, you can login!"]);
        
    //      }else{
    //          return back()->with("errorRegister","registration failed")->withInput();
    //         }
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
        //
    }
}
