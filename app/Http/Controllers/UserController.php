<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return User::all();
    }

    public function show($id){
        return User::find($id);
    }

    public function store(Request $request){
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return response($user, Response::HTTP_CREATED);
    }

    public function update(Request $request,$id){
    $user = User::find($id);
    // return[
    //     'name' => $request->input('name'),
    //     'email' => $request->input('email'),
    //     'password' => Hash::make($request->input('password')),
    // ];
    $user->update([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'password' => Hash::make($request->input('password')),
]);
return response($user, response::HTTP_ACCEPTED);
}

    public function destroy($id){
        User::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }


}
