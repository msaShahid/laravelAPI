<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class APIController extends Controller
{
    // GET API
    public function getUsers($id=null){
        if(empty($id)){
            // if ID is empty then this will run and Return All Data
            $users = User::get();
            //  return $users;
            return response()->json(["users"=>$users]); 
        }else{
            // if ID found then this will run and Return Single Data 
            $users = User::find($id);
            return response()->json(["user"=>$users]);
        }
    }

    // POST API
    public function addUsers(Request $request){
        if($request->isMethod('post')){
            $userData = $request->input();
            echo "<pre>"; print_r($userData); die;
        }
    }


}
