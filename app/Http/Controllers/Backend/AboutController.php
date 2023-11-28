<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Team;
use App\Models\CounterIcon;
use App\Models\Testimonial2;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function tech_web_about_setting()
    {
        $about = About::latest()->first();
        return view('backend.about.about_setting', compact('about'));
    } //end mehtod----------------------------------

    public function tech_web_about_store_and_update(Request $request)
    {
        $about = About::latest()->first();

        if ($about) {
            $about = About::latest()->first();
            $id = $about->id;
            // dd($id);

            $data = [];
            $data['title_english'] = $request->title_english;
            $data['title_bangla'] = $request->title_bangla;
            $data['details_1_eng'] = $request->details_1_eng;
            $data['details_1_bng'] = $request->details_1_bng;
            $data['details_2_eng'] = $request->details_2_eng;
            $data['details_2_bng'] = $request->details_2_bng;
            $data['updated_at'] = Carbon::now();

            if ($request->file('main_image')) {
                @unlink($about->main_image);
                $about_main_image = $request->file('main_image');
                $about_main_image_name = hexdec(uniqid()) . '.' . $about_main_image->getClientOriginalExtension();
                Image::make($about_main_image)->save('backend/about/' . $about_main_image_name);
                $about_image_save = 'backend/about/' . $about_main_image_name; //image save into db
                $data['main_image'] = $about_image_save;
            }

            if ($request->file('banner_image')) {
                @unlink($about->banner_image);
                $banner_image = $request->file('banner_image');
                $banner_image_Name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
                Image::make($banner_image)->save('backend/about/' . $banner_image_Name);
                $banner_image_save = 'backend/about/' . $banner_image_Name; //image save into db;
                $data['banner_image'] = $banner_image_save;
            }

            About::findOrFail($id)->update($data);

            $notification = [
                'message' => 'About Data Updated Successfully!',
                'alert-type' => 'success',
            ];
            return redirect()
                ->back()
                ->with($notification);
        } else {
            //

            $about_main_image = $request->file('main_image');
            $about_main_image_name = hexdec(uniqid()) . '.' . $about_main_image->getClientOriginalExtension();
            Image::make($about_main_image)->save('backend/about/' . $about_main_image_name);
            $about_image_save = 'backend/about/' . $about_main_image_name; //image save into db

            $banner_image = $request->file('banner_image');
            $banner_image_Name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->save('backend/about/' . $banner_image_Name);
            $banner_image_save = 'backend/about/' . $banner_image_Name; //image save into db;

            About::insert([
                'title_english' => $request->title_english,
                'title_bangla' => $request->title_bangla,
                'details_1_eng' => $request->details_1_eng,
                'details_1_bng' => $request->details_1_bng,
                'details_2_eng' => $request->details_2_eng,
                'details_2_bng' => $request->details_2_bng,
                'main_image' => $about_image_save,
                'banner_image' => $banner_image_save,
                'created_at' => Carbon::now(),
            ]);
            $notification = [
                'message' => 'About Dataa Inserted Successfully!',
                'alert-type' => 'success',
            ];
            return redirect()
                ->back()
                ->with($notification);
        }
    } //end method----------------------------------------------------

    public function tech_web_about_details()
    {
        $about = About::first();
        $teams = Team::inRandomOrder()
            ->limit(4)
            ->get();
        $testimonials = Testimonial2::where('status', 1)
            ->latest()
            ->limit(5)
            ->get();
        $projects_don = CounterIcon::latest()->first();
        return view('frontend.about.index', compact('about', 'teams', 'testimonials', 'projects_don'));
    }
}
