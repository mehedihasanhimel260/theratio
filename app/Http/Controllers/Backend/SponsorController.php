<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class SponsorController extends Controller
{
    public function tech_web_all_sponsor(){
        $sponsors = Sponsor::latest('id','DESC')->get();
        return view('backend.sponsor.all_sponsor',compact('sponsors'));
    }//end method ------------------------------------

    public function tech_web_add_sponsor(){
        return view('backend.sponsor.add_sponsor');
    }//endm method---------------------------

    public function tech_web_sponsor_store(Request $request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('backend/sponsor/'.$image_name);
            $image_url = 'backend/sponsor/'.$image_name;
        }
        Sponsor::insert([
            'title_english' => $request->title_english,
            'title_bangla' => $request->title_bangla,
            'image' => $image_url??null,
            'created_at'=> Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Sponsor inserted Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.sponsor')->with($notification);
    }//end method------------------------------------------

    public function tech_web_sponsor_edit($id){
        $edit_sponsor = Sponsor::findOrFail($id);
        return view('backend.sponsor.edit_sponsor',compact('edit_sponsor'));
    }//end mehtod---------------------------------

    public function tech_web_sponsor_update(Request $request){
        $id = $request->id;
        $image = Sponsor::find($id);
        $del_image = $image->image;

        if($request->hasFile('image')){
            @unlink($del_image);//image delete from local folder backend/sponsor/ path;
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('backend/sponsor/'.$image_name);
            $image_url = 'backend/sponsor/'.$image_name;

            Sponsor::findOrFail($id)->update([
                'title_english' => $request->title_english,
                'title_bangla' => $request->title_bangla,
                'image' => $image_url,
                'updated_at'=> Carbon::now(),
            ]);
        }else{
            Sponsor::findOrFail($id)->update([
                'title_english' => $request->title_english,
                'title_bangla' => $request->title_bangla,                
                'updated_at'=> Carbon::now(),
            ]);
        }      

        $notification = array(
            'message' => 'Sponsor Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.sponsor')->with($notification);
    }//end method-------------------------------

    public function tech_web_sponsor_delete($id){
        $image = Sponsor::findOrFail($id);  
        @unlink($image->image);//delete image from local path_folder        
        Sponsor::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Sponsor Data Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }//end method-------------------------------------------

    // Sponsor status active inactive method start ------------
    public function tec_web_sponsor_inactive($id){
        Sponsor::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_sponsor_active($id){
        Sponsor::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // Sponsor status active inactive method end ------------
}
