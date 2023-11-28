<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function tech_web_all_services()
    {
        $services = Service::latest('id', 'DESC')->get();
        return view('backend.service.all_service', compact('services'));
    } //end method-------------------------------------

    public function tech_web_add_services()
    {
        return view('backend.service.add_service');
    } //end method-------------------------------------

    public function tech_web_service_store(Request $request)
    {
        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image');
            $main_image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            Image::make($main_image)->save('backend/service/main_image/' . $main_image_name);
            $main_image_url = 'backend/service/main_image/' . $main_image_name;
        }
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $banner_image_name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->save('backend/service/banner_image/' . $banner_image_name);
            $banner_image_url = 'backend/service/banner_image/' . $banner_image_name;
        }
        if ($request->hasFile('detais_image_1')) {
            $detais_image_1 = $request->file('detais_image_1');
            $detais_image_1_name = hexdec(uniqid()) . '.' . $detais_image_1->getClientOriginalExtension();
            Image::make($detais_image_1)->save('backend/service/details_images/' . $detais_image_1_name);
            $detais_image_1_url = 'backend/service/details_images/' . $detais_image_1_name;
        }
        if ($request->hasFile('detais_image_2')) {
            $detais_image_2 = $request->file('detais_image_2');
            $detais_image_2_name = hexdec(uniqid()) . '.' . $detais_image_2->getClientOriginalExtension();
            Image::make($detais_image_2)->save('backend/service/details_images/' . $detais_image_2_name);
            $detais_image_2_url = 'backend/service/details_images/' . $detais_image_2_name;
        }
        if ($request->hasFile('detais_image_3')) {
            $detais_image_3 = $request->file('detais_image_3');
            $detais_image_3_name = hexdec(uniqid()) . '.' . $detais_image_3->getClientOriginalExtension();
            Image::make($detais_image_3)->save('backend/service/details_images/' . $detais_image_3_name);
            $detais_image_3_url = 'backend/service/details_images/' . $detais_image_3_name;
        }

        Service::insert([
            'title_english' => $request->title_english,
            'title_bangla' => $request->title_bangla,
            'price' => $request->price,
            'des_sm_eng' => $request->des_sm_eng,
            'des_sm_bng' => $request->des_sm_bng,
            'long_des1_eng' => $request->long_des1_eng,
            'long_des1_bng' => $request->long_des1_bng,
            'long_des2_eng' => $request->long_des2_eng,
            'long_des2_bng' => $request->long_des2_bng,
            'long_des3_eng' => $request->long_des3_eng,
            'long_des3_bng' => $request->long_des3_bng,

            'main_image' => $main_image_url ?? null,
            'banner_image' => $banner_image_url ?? null,
            'detais_image_1' => $detais_image_1_url ?? null,
            'detais_image_2' => $detais_image_2_url ?? null,
            'detais_image_3' => $detais_image_3_url ?? null,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Services inserted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.services')
            ->with($notification);
    } //end method---------------------------------------------------

    public function tec_web_edit_service($id)
    {
        $edit_service = Service::findOrFail($id);
        return view('backend.service.edit_service', compact('edit_service'));
    } //end method------------------------------------------

    public function tec_web_update_store(Request $request)
    {
        $id = $request->id;
        $old_image = Service::find($id);
        $del_main_image = $old_image->main_image;
        $del_banner_image = $old_image->banner_image;
        $del_details_image1 = $old_image->detais_image_1;
        $del_details_image2 = $old_image->detais_image_2;
        $del_details_image3 = $old_image->detais_image_3;

        $data = [];
        $data['title_english'] = $request->title_english;
        $data['title_bangla'] = $request->title_bangla;
        $data['price'] = $request->price;
        $data['des_sm_eng'] = $request->des_sm_eng;
        $data['des_sm_bng'] = $request->des_sm_bng;
        $data['long_des1_eng'] = $request->long_des1_eng;
        $data['long_des1_bng'] = $request->long_des1_bng;
        $data['long_des2_eng'] = $request->long_des2_eng;
        $data['long_des2_bng'] = $request->long_des2_bng;
        $data['long_des3_eng'] = $request->long_des3_eng;
        $data['long_des3_bng'] = $request->long_des3_bng;

        if ($request->hasFile('main_image')) {
            @unlink($del_main_image);
            $main_image = $request->file('main_image');
            $main_image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            Image::make($main_image)->save('backend/service/main_image/' . $main_image_name);
            $main_image_url = 'backend/service/main_image/' . $main_image_name;
            $data['main_image'] = $main_image_url;
        }

        if ($request->hasFile('banner_image')) {
            @unlink($del_banner_image);
            $banner_image = $request->file('banner_image');
            $banner_image_name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->save('backend/service/banner_image/' . $banner_image_name);
            $banner_image_url = 'backend/service/banner_image/' . $banner_image_name;
            $data['banner_image'] = $banner_image_url;
        }

        if ($request->hasFile('detais_image_1')) {
            @unlink($del_details_image1);
            $detais_image_1 = $request->file('detais_image_1');
            $detais_image_1_name = hexdec(uniqid()) . '.' . $detais_image_1->getClientOriginalExtension();
            Image::make($detais_image_1)->save('backend/service/details_images/' . $detais_image_1_name);
            $detais_image_1_url = 'backend/service/details_images/' . $detais_image_1_name;
            $data['detais_image_1'] = $detais_image_1_url;
        }
        if ($request->hasFile('detais_image_2')) {
            @unlink($del_details_image2);
            $detais_image_2 = $request->file('detais_image_2');
            $detais_image_2_name = hexdec(uniqid()) . '.' . $detais_image_2->getClientOriginalExtension();
            Image::make($detais_image_2)->save('backend/service/details_images/' . $detais_image_2_name);
            $detais_image_2_url = 'backend/service/details_images/' . $detais_image_2_name;
            $data['detais_image_2'] = $detais_image_2_url;
        }
        if ($request->hasFile('detais_image_3')) {
            @unlink($del_details_image3);
            $detais_image_3 = $request->file('detais_image_3');
            $detais_image_3_name = hexdec(uniqid()) . '.' . $detais_image_3->getClientOriginalExtension();
            Image::make($detais_image_3)->save('backend/service/details_images/' . $detais_image_3_name);
            $detais_image_3_url = 'backend/service/details_images/' . $detais_image_3_name;
            $data['detais_image_3'] = $detais_image_3_url;
        }

        Service::findOrFail($id)->update($data);

        $notification = [
            'message' => 'Services Updated Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.services')
            ->with($notification);
    } //end method-----------------------------------------------

    public function tec_web_delete_service($id)
    {
        $service_image = Service::findOrFail($id);
        // $image = $service_image->banner_image;
        @unlink($service_image->main_image);
        @unlink($service_image->banner_image);
        @unlink($service_image->detais_image_1);
        @unlink($service_image->detais_image_2);
        @unlink($service_image->detais_image_3); //delete banner_image from local path_folder

        Service::findOrFail($id)->delete();
        $notification = [
            'message' => 'Servicenner Data Deleted!',
            'alert-type' => 'error',
        ];
        return redirect()
            ->back()
            ->with($notification);
    } //end method-------------------------------------------

    // service status active inactive method start ------------
    public function tec_web_service_inactive($id)
    {
        Service::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_service_active($id)
    {
        Service::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // service status active inactive method end ------------

    // basic package active inactive method start ------------
    public function tec_web_basic_inactive($id)
    {
        Service::findOrFail($id)->update(['basic' => '0']);
        return redirect()->back();
    }
    public function tec_web_basic_active($id)
    {
        Service::findOrFail($id)->update(['basic' => '1']);
        return redirect()->back();
    }
    // basic package active inactive method end ------------

    // premium package active inactive method start ------------
    public function tec_web_premium_inactive($id)
    {
        Service::findOrFail($id)->update(['premium' => '0']);
        return redirect()->back();
    }
    public function tec_web_premium_active($id)
    {
        Service::findOrFail($id)->update(['premium' => '1']);
        return redirect()->back();
    }
    // premium package active inactive method end ------------

    // luxury package active inactive method start ------------
    public function tec_web_luxury_inactive($id)
    {
        Service::findOrFail($id)->update(['luxury' => '0']);
        return redirect()->back();
    }
    public function tec_web_luxury_active($id)
    {
        Service::findOrFail($id)->update(['luxury' => '1']);
        return redirect()->back();
    }
    // luxury package active inactive method end ------------

    // frontend service method========================================

    public function tech_web_service_details($id)
    {
        $blog_details = Service::findOrFail($id);
        $blogs = Service::get();
        $previousPost = Service::where('id', '<', $blog_details->id)
            ->orderBy('id', 'desc')
            ->first();
        $nextPost = Service::where('id', '>', $blog_details->id)
            ->orderBy('id', 'asc')
            ->first();
        return view('frontend.service.index', compact('blog_details', 'blogs', 'nextPost', 'previousPost'));
    } //end method---------------------------------------------

    public function tech_web_all_fservices()
    {
        $services = Service::all();
        return view('frontend.service.all_services', compact('services'));
    } //

    public function tech_web_all_service_price()
    {
        $services = Service::all();
        return view('frontend.service.all_service_price', compact('services'));
    } //end method ---------------------------------------

    public function tech_web_packages()
    {
        $basic = Service::where('basic', 1)
            ->where('status', 1)
            ->get();
        $premium = Service::where('premium', 1)
            ->where('status', 1)
            ->get();
        $luxury = Service::where('luxury', 1)
            ->where('status', 1)
            ->get();
        return view('frontend.service.package', compact('basic', 'premium', 'luxury'));
    }
}
