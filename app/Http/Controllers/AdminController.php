<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Has

use App\disease;
use App\herb;
use App\User;
use App\contact;
use Alert;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function admin(){
        return view('backend.admin');
    }
    public function addD(){
        return view('backend.admin.addDisease');
    }
    public function showD(){
        $diseases=disease::all();
        return view('backend.admin.showDisease',compact('diseases'));
     }
    public function store(Request $request){
        $this->validate($request,
        [
            'name' => 'required',
            'cause' => 'required',
             'signs' => 'required',
             'type' => 'required',
             'treatment' => 'required',
             'image' => 'image|nullable'
            ]);
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                //file store
                $fileNameToStore=$filename.'_'.time().'_'.$extension;
                //upload image
                $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            }
            else{
                $fileNameToStore = 'noimage.jpg';
            }
            //create disease
            $diseases=new disease;
            $diseases->name=$request->input('name');
            $diseases->cause=$request->input('cause');
            $diseases->signs=$request->input('signs');
            $diseases->type=$request->input('type');
            $diseases->treatment=$request->input('treatment');
            $diseases->image=$fileNameToStore;
            $diseases->save();
            Alert::success('Success', ' Disease Created');
            return redirect('showDiseases');
     }

     public function editD( $id ){
        $raw=disease::find($id);
        return view('backend.admin.editDisease',compact('raw'));
    }
    public function updateD(Request $request, $id){
        $this->validate($request,
        [
            'name' => 'required',
            'cause' => 'required',
            'signs' => 'required',
            'type' => 'required',
            'treatment' => 'required',
            'image' => 'image|nullable'
            ]);
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                //file store
                $fileNameToStore=$filename.'_'.time().'_'.$extension;
                //upload image
                $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            }
        
            //update disease
            $raw=Disease::find($id);
            $raw->name=$request->input('name');
            $raw->cause=$request->input('cause');
            $raw->signs=$request->input('signs');
            $raw->type=$request->input('type');
            $raw->treatment=$request->input('treatment');
            $raw->image=$fileNameToStore;
            $raw->update();
        
            return redirect('showDiseases')->with('status','Disease Updated Successfully');
        }
        public function diseaseDelete($id){
        $raw = Disease::findOrFail($id);
        $raw->delete();
        Alert::success('Success', ' Disease Deleted');
         return redirect('showDiseases');
      
    }
   





  public function addH(){
        return view('backend.admin.addHerb');
    }
    public function herbPost(Request $request){
          $this->validate($request,
        [
            'lname' => 'required',
            'sname' => 'required',
             'description' => 'required',
             'type' => 'required',
             'image' => 'image|nullable'
            ]);
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                //file store
                $fileNameToStore=$filename.'_'.time().'_'.$extension;
                //upload image
                $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            }
            else{
                $fileNameToStore = 'noimage.jpg';
            }
            //create herb
            $herbs=new herb;
            $herbs->lname=$request->input('lname');
            $herbs->sname=$request->input('sname');
            $herbs->description=$request->input('description');
            $herbs->type=$request->input('type');
            $herbs->image=$fileNameToStore;
            $herbs->save();
            Alert::success('Success', ' Herb Created');
        
            return redirect('showHerbs');
     }
     public function showH(){
        $herbs=herb::all();
        return view('backend.admin.showHerbs',compact('herbs'));
    }
//edit herbs
    public function editH( $id ){
        $raw=herb::find( $id );
        return view('backend.admin.editHerbs',compact('raw'));
    }
    public function updateH(Request $request, $id){
        $this->validate($request,
        [
            'lname' => 'required',
            'sname' => 'required',
             'description' => 'required',
             'type' => 'required',
             'image' => 'image|nullable'
            ]);
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                //file store
                $fileNameToStore=$filename.'_'.time().'_'.$extension;
                //upload image
                $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
            }
        
            //update herb
            $raw=herb::findOrFail($id);
            $raw->lname=$request->input('lname');
            $raw->sname=$request->input('sname');
            $raw->description=$request->input('description');
            $raw->type=$request->input('type');
            $raw->image=$fileNameToStore;
            $raw->update();
        
            return redirect('showHerbs')->with('status','Herb Updated Successfully');
     }
     public function herbDelete($id){
         $raw = herb::findOrFail($id);
         $raw->delete();
         Alert::success('Success', ' Herb Deleted');
          return redirect('showHerbs');
       
     }
    



       
     
    
   
    




     public function contact(){
        return view('frontend.contact');
    }
     public function contactPost(Request $request){
        $this->validate($request,
        [
            'name' => 'required',
            'email' => 'required',
             'phone' => 'required',
             'message' => 'required'
            ]);
           
            //create contact
            $contacts=new contact;
            $contacts->name=$request->input('name');
            $contacts->email=$request->input('email');
            $contacts->phone=$request->input('phone');
            $contacts->message=$request->input('message');
            $contacts->save();
            Alert::success('Success', ' Contact Created');
            return redirect('/');
        
        
     }
             public function showC(){
                $contacts=contact::all();
                return view('backend.admin.showContacts',compact('contacts'));
    }
    public function contactDelete($id){
        $raw = contact::findOrFail($id);
        $raw->delete();
        Alert::success('Success', ' Contact Deleted');
         return redirect('showContacts');
      
    }

 
}
