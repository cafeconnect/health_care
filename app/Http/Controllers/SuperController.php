<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class SuperController extends Controller
{
  public function super(){
      return view('backend.super');
  }
  public function showU(){
    $users=User::all();
    return view('backend.super.showUser',compact('users'));
 }
 public function editU( $id ){
    $raw=User::find( $id );
    return view('backend.super.editUsers',compact('raw'));
 }
 public function updateU(Request $request, $id){
    $this->validate($request,
    [
       'name' => 'required',
       'usertype' => 'required',
        ]);
         //update user
         $raw=User::find($id);
         $raw->name=$request->input('name');
         $raw->usertype=$request->input('usertype');
         $raw->update();
         return redirect('showUser')->with('status','User Updated Successfully');
     }
     public function userDelete($id){
        $raw = User::findOrFail($id);
        $raw->delete();
        return redirect('showUser')->with('status','User Deleted');
    
  }

}
