<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function admin_destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    //end method------------------------------------

    public function tec_web_admin_profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
    }//end method --------------------------------------

    public function tec_web_admin_profile_update(Request $request){
        $id = Auth::user()->id;
        $old_image = User::find($id);

        if($request->file('photo')){
            @unlink('upload/admin_image/'.$old_image->photo);

            $file = $request->file('photo');
            $fileName = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            Image::make($file)->save('upload/admin_image/'.$fileName);
            $save_db = $fileName;

            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,                
                'photo' => $save_db,
                'updated_at' => Carbon::now(),
            ]);

        }else{
            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,              
                'updated_at' => Carbon::now(),
            ]);
            
        }
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
      
    }//end method---------------------------

    public function tec_web_admin_change_password(){
        return view('admin.canage_password');
    }//end method----------------------------------

    public function tec_web_admin_password_update(Request $request){
        $request->validate([
            'old_password'=> 'required',
            'new_password' => 'required|confirmed',
        ]);

        // check passord match or not
        if(!Hash::check($request->old_password, auth()->user()->password)){
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }
        
        // update password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);
        $notification = array(
            'message' => 'Password Changed Successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification); 
    }
    
}
