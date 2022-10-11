<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index(){
        return User::all();
    }

    public function show($id){
        return User::find($id);
    }

    public function store(Request $request){
        $user = User::create($request->all());
        return response($user, Response::HTTP_CREATED);
    }

    public function update($id){
        return User::find($id);
    }

    public function delete($id){
        return User::find($id);
    }


}
