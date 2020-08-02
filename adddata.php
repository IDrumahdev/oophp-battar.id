<?php



public function Add(Request $request){
    $user = new user;
    $user->name     = $request->name;
    $user->email    = $request->email
    $user->save();   
}








public function Add(Request $request){
    $user = user::create([
        'name'  =>$request->name,
        'email' =>$request->email
    ]);
}
































