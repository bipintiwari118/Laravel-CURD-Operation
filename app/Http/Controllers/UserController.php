<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users= DB::table('users')
        // ->orderBy('age','asc')
        
        ->Paginate(3);
        // return $users;
        return view('allusers',['data'=>$users]);
    }
    public function singleUser(string $id){
        $users= DB::table('users')->where('id',$id)->get();
        return view('user',['data'=>$users]);
        // return view('allusers',['data'=>$users]);
    }
    public function addUser(Request $req){
        $users=DB::table('users')
        ->insert(
            [    
                'name'=>$req->username,
                'age'=>$req->userage,
                'email'=>$req->useremail,
                'address'=>$req->useraddress,
            
              
        
                ]
        );
    
        if($users){
            return redirect()->route('home');

    }else{
        echo "<h1>Email id already taken.</h1>";
    }
}
 public function updatepage(string $id){

    $users= DB::table('users')->find($id);
    return view('updateuser',['data'=>$users]);

 }






public function updateUser(Request $req,$id){
    
    $users=DB::table('users')
                ->where('id',$id)
                ->update([
                     
                'name'=>$req->username,
                'age'=>$req->userage,
                'email'=>$req->useremail,
                'address'=>$req->useraddress,

                ]);

 
 if($users){
 return redirect()->route('home');
        
}else{
    echo "<h1>Does not update</h1>";
}

     
}



public function deleteUser(string $id){

    $users=DB::table('users')->where('id',$id)->delete();

    if($users){
        return redirect()->route('home');
    }else{
        echo "<h1> Error:data does not delete</h1>";
    }
}





}
