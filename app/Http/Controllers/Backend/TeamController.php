<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Team;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    public function tech_web_all_team()
    {
        $teams = Team::latest('id', 'DESC')->get();
        return view('backend.team.all_team', compact('teams'));
    } //end method--------------------------------------------




    public function tech_web_add_team()
    {
        return view('backend.team.add_team');
    } //end method---------------------------------------

    public function tech_web_team_store(Request $request)
    {

        $image = $request->file('image');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save('backend/team/' . $image_name);
        $image_url = 'backend/team/' . $image_name;

        $data = array();
        $data['image'] = $image_url;
        $data['name_english'] = $request->name_english;
        $data['name_bangla'] = $request->name_bangla;
        $data['desig_english'] = $request->desig_english;
        $data['desig_bangla'] = $request->desig_bangla;
        $data['email'] = $request->email;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        $data['twitter'] = $request->twitter;
        $data['linkedin'] = $request->linkedin;
        $data['telegram'] = $request->telegram;
        $data['youtube'] = $request->youtube;
        $data['committee'] = $request->committee;
        $data['created_at'] = Carbon::now();
        Team::insert($data);

        $notification = array(
            'message' => 'Team Data Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.team')->with($notification);
    } //end method-----------------------------------------

    public function tec_web_edit_team($id)
    {
        $edit_team = Team::findOrFail($id);
        return view('backend.team.edit_team', compact('edit_team'));
    } //end method---------------------------------------

    public function tec_web_update_team(Request $request)
    {
        $data = array();

        $id = $request->id;
        $image = Team::findOrFail($id);
        $del_image = $image->image;

        if ($request->file('image')) {
            @unlink($del_image); //image delete form the local folder backend/team/ path
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/team/' . $image_name);
            $image_url = 'backend/team/' . $image_name;

            $data['image'] = $image_url;
            $data['name_english'] = $request->name_english;
            $data['name_bangla'] = $request->name_bangla;
            $data['desig_english'] = $request->desig_english;
            $data['desig_bangla'] = $request->desig_bangla;
            $data['email'] = $request->email;
            $data['facebook'] = $request->facebook;
            $data['instagram'] = $request->instagram;
            $data['twitter'] = $request->twitter;
            $data['linkedin'] = $request->linkedin;
            $data['telegram'] = $request->telegram;
            $data['youtube'] = $request->youtube;
            $data['committee'] = $request->committee;
            $data['updated_at'] = Carbon::now();

            Team::findOrFail($id)->update($data);
        } else {
            $data['name_english'] = $request->name_english;
            $data['name_bangla'] = $request->name_bangla;
            $data['desig_english'] = $request->desig_english;
            $data['desig_bangla'] = $request->desig_bangla;
            $data['email'] = $request->email;
            $data['facebook'] = $request->facebook;
            $data['instagram'] = $request->instagram;
            $data['twitter'] = $request->twitter;
            $data['linkedin'] = $request->linkedin;
            $data['telegram'] = $request->telegram;
            $data['youtube'] = $request->youtube;
            $data['committee'] = $request->committee;
            $data['updated_at'] = Carbon::now();

            Team::findOrFail($id)->update($data);
        }

        $notification = array(
            'message' => 'Team Data Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.team')->with($notification);
    } //end method---------------------------------------

    public function tec_web_delete_team($id)
    {
        $image = Team::findOrFail($id);
        @unlink($image->image); //delete banner_image from local path_folder

        Team::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Team Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    } //end method-------------------------------------------



    // team status active inactive method start ------------
    public function tec_web_team_inactive($id)
    {
        Team::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_team_active($id)
    {
        Team::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    


}
