<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\BannerAndTitle;
use  App\Models\Logo;
use  App\Models\WebsiteLink;
use  App\Models\WebsiteBanner;
use  App\Models\Footer;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class GeneralController extends Controller
{
    public  function tech_web_general_settings()
    {
        $banner_info = BannerAndTitle::latest('id', 'DESC')->get();
        return view('backend.general.general_setting_page', compact('banner_info'));
    } //end method------------------------------------------

    public function tech_web_banner_title_store(Request $request)
    {

        $image = $request->file('banner_image');
        $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save('backend/banner_image/' . $image_gen);
        $save_url = 'backend/banner_image/' . $image_gen;

        BannerAndTitle::insert([
            'banner_image' => $save_url,
            'title_english' => $request->title_english,
            'title_bangla' => $request->title_bangla,
            'page' => $request->page,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'Banner And Titel inserted!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //end method---------------------------------------

    public function tech_web_edit_banner_title($id)
    {
        $edit_banner_title = BannerAndTitle::findOrFail($id);
        return view('backend.general.edit_banner_title', compact('edit_banner_title'));
    } //end method------------------------------------------

    public function tech_web_banner_title_update(Request $request)
    {
        $id = $request->id;
        $old_banner_img = BannerAndTitle::find($id);
        $image = $old_banner_img->banner_image;
        // dd($image);

        if ($request->file('banner_image')) {
            @unlink($image);
            $image = $request->file('banner_image');
            $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/banner_image/' . $image_gen);
            $save_url = 'backend/banner_image/' . $image_gen;

            BannerAndTitle::findOrFail($id)->update([
                'banner_image' => $save_url,
                'title_english' => $request->title_english,
                'title_bangla' => $request->title_bangla,
                'page' => $request->page,
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Banner And Title Updated!',
                'alert-type' => 'success'
            );
            return redirect()->route('general.setting')->with($notification);
        } else {
            BannerAndTitle::findOrFail($id)->update([
                'title_english' => $request->title_english,
                'title_bangla' => $request->title_bangla,
                'page' => $request->page,
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Banner And Title Updated!',
                'alert-type' => 'success'
            );
            return redirect()->route('general.setting')->with($notification);
        } //end if else
    } //end method---------------------------------------

    // bnner and title status active inactive method start ------------
    public function tec_web_banner_title_inactive($id)
    {
        BannerAndTitle::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_banner_title_active($id)
    {
        BannerAndTitle::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // bnner and title status active inactive method end ------------

    public function tech_web_delete_banner_title($id)
    {
        $banner_image = BannerAndTitle::findOrFail($id);
        $image = $banner_image->banner_image;
        @unlink($image); //delete banner_image from local path_folder
        BannerAndTitle::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Banner And Title Deleted!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    } //end method-------------------------------------------


    // ======================Logo setting all method ==========================

    public function tec_web_logo_store(Request $request)
    {
        $logo = Logo::latest()->first();

        if ($logo) {
            $logo_img = Logo::latest()->first();
            $id = $logo_img->id;   
                   
            $data = array();
            $data['site_name_english'] = $request->site_name_english;
            $data['site_name_bangla'] = $request->site_name_bangla;
            $data['updated_at'] = Carbon::now();

            if ($request->file('admin_logo_image')) {
                @unlink($logo_img->admin_logo_image);
                $admin_logo_img = $request->file('admin_logo_image');
                $admin_logo_Name = hexdec(uniqid()) . '.' . $admin_logo_img->getClientOriginalExtension();
                Image::make($admin_logo_img)->save('backend/logo/' . $admin_logo_Name);
                $admin_logo_save = 'backend/logo/' . $admin_logo_Name; //image save into db
                $data['admin_logo_image'] = $admin_logo_save;
            }

            if ($request->file('frontend_logo_image')) {
                @unlink($logo_img->frontend_logo_image);
                $frontend_logo_img = $request->file('frontend_logo_image');
                $frontend_logo_Name = hexdec(uniqid()) . '.' . $frontend_logo_img->getClientOriginalExtension();
                Image::make($frontend_logo_img)->save('backend/logo/' . $frontend_logo_Name);
                $frontend_logo_save = 'backend/logo/' . $frontend_logo_Name; //image save into db;
                $data['frontend_logo_image'] = $frontend_logo_save;
            }

            if ($request->file('frontend_footer_image')) {
                @unlink($logo_img->frontend_footer_image);
                $frontend_footer_img = $request->file('frontend_footer_image');
                $frontend_footer_Name = hexdec(uniqid()) . '.' . $frontend_footer_img->getClientOriginalExtension();
                Image::make($frontend_footer_img)->save('backend/logo/' . $frontend_footer_Name);
                $frontend_footer_save = 'backend/logo/' . $frontend_footer_Name; //image save into db;
                $data['frontend_footer_image'] = $frontend_footer_save;
            }

            if ($request->file('favicon_image')) {
                @unlink($logo_img->favicon_image);
                $favicon_img = $request->file('favicon_image');
                $favicon_Name = hexdec(uniqid()) . '.' . $favicon_img->getClientOriginalExtension();
                Image::make($favicon_img)->save('backend/logo/' . $favicon_Name);
                $favicon_save = 'backend/logo/' . $favicon_Name; //image save into db;
                $data['favicon_image'] = $favicon_save;
            }

            Logo::findOrFail($id)->update($data);
            $notification = array(
                'message' => 'Logo Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            //
            $admin_logo_img = $request->file('admin_logo_image');
            $admin_logo_Name = hexdec(uniqid()) . '.' . $admin_logo_img->getClientOriginalExtension();
            Image::make($admin_logo_img)->save('backend/logo/' . $admin_logo_Name);
            $admin_logo_save = 'backend/logo/' . $admin_logo_Name; //image save into db;

            $frontend_logo_img = $request->file('frontend_logo_image');
            $frontend_logo_Name = hexdec(uniqid()) . '.' . $frontend_logo_img->getClientOriginalExtension();
            Image::make($frontend_logo_img)->save('backend/logo/' . $frontend_logo_Name);
            $frontend_logo_save = 'backend/logo/' . $frontend_logo_Name; //image save into db;

            $frontend_footer_img = $request->file('frontend_footer_image');
            $frontend_footer_Name = hexdec(uniqid()) . '.' . $frontend_footer_img->getClientOriginalExtension();
            Image::make($frontend_footer_img)->save('backend/logo/' . $frontend_footer_Name);
            $frontend_footer_save = 'backend/logo/' . $frontend_footer_Name; //image save into db;

            $favicon_img = $request->file('favicon_image');
            $favicon_Name = hexdec(uniqid()) . '.' . $favicon_img->getClientOriginalExtension();
            Image::make($favicon_img)->save('backend/logo/' . $favicon_Name);
            $favicon_save = 'backend/logo/' . $favicon_Name; //image save into db;

            Logo::insert([
                'admin_logo_image' => $admin_logo_save,
                'frontend_logo_image' => $frontend_logo_save,
                'frontend_footer_image' => $frontend_footer_save,
                'favicon_image' => $favicon_save,
                'site_name_english' => $request->site_name_english,
                'site_name_bangla' => $request->site_name_bangla,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Logo Inserted Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    } //end method----------------------------------------------------

    // =========================== websitelink all method==================
    public function tec_web_websitelink_store(Request $request)
    {
        $website = WebsiteLink::latest()->first();
        if ($website) {
            $website = WebsiteLink::latest()->first();
            $id = $website->id;
            WebsiteLink::findOrFail($id)->update([
                'email' => $request->email,
                'phone' => $request->phone,
                'address_english' => $request->address_english,
                'address_bangla' => $request->address_bangla,
                'website_link' => $request->website_link,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'linkedIn' => $request->linkedIn,
                'twitter' => $request->twitter,
                'telegram' => $request->telegram,
                'youtube' => $request->youtube,
                'map_link' => $request->map_link,
                'phone' => $request->phone,
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Website Link Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            WebsiteLink::insert([
                'email' => $request->email,
                'phone' => $request->phone,
                'address_english' => $request->address_english,
                'address_bangla' => $request->address_bangla,
                'website_link' => $request->website_link,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'linkedIn' => $request->linkedIn,
                'twitter' => $request->twitter,
                'telegram' => $request->telegram,
                'youtube' => $request->youtube,
                'map_link' => $request->map_link,
                'phone' => $request->phone,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Website Link Inserted Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    } //end method----------------------------------------------

    // ============================website banner all method======================
    public function tec_web_website_banner_store(Request $request)
    {
        $image = $request->file('banner_image');
        $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save('backend/website_banner/' . $image_gen);
        $save_url = 'backend/website_banner/' . $image_gen;

        WebsiteBanner::insert([
            'title_english' => $request->title_english,
            'title_bangla' => $request->title_bangla,
            'short_details_eng' => $request->short_details_eng,
            'short_details_bng' => $request->short_details_bng,
            'banner_image' => $save_url,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'Website Banner inserted!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //end method------------------------------------

    public function tec_web_edit_website_banner($id)
    {
        $edit_webiste_banner = WebsiteBanner::find($id);
        return view('backend.general.edit_website_bnner', compact('edit_webiste_banner'));
    } //end method-------------------------------------------

    public function tec_web_website_banner_update(Request $request)
    {
        $id = $request->id;
        $image = WebsiteBanner::find($id);
        $banner_image = $image->banner_image;
        if ($request->file('banner_image')) {
            @unlink($banner_image);
            $image = $request->file('banner_image');
            $image_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/website_banner/' . $image_gen);
            $save_url = 'backend/website_banner/' . $image_gen;

            WebsiteBanner::findOrFail($id)->update([
                'title_english' => $request->title_english,
                'title_bangla' => $request->title_bangla,
                'short_details_eng' => $request->short_details_eng,
                'short_details_bng' => $request->short_details_bng,
                'banner_image' => $save_url,
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Website Banner Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('general.setting')->with($notification);
        } else {
            WebsiteBanner::findOrFail($id)->update([
                'title_english' => $request->title_english,
                'title_bangla' => $request->title_bangla,
                'short_details_eng' => $request->short_details_eng,
                'short_details_bng' => $request->short_details_bng,
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Website Banner Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('general.setting')->with($notification);
        }
    } //end method---------------------------------------------

    public function tec_web_website_banner_delete($id)
    {
        $image =  WebsiteBanner::find($id);
        $banner_image = $image->banner_image;
        @unlink($banner_image); //image delete from the local folder path;
        WebsiteBanner::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Website Banner Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    } //end method----------------------------------------

    // website bnner status active inactive method start ------------
    public function tec_web_website_banner_inactive($id)
    {
        WebsiteBanner::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_website_banner_active($id)
    {
        WebsiteBanner::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // website bnner status active inactive method end ------------

    // ========================== footer all method =======================
    public function tec_web_footer_store(Request $request)
    {
        $footer = Footer::latest()->first();
        if ($footer) {
            $footer = Footer::latest()->first();
            $id = $footer->id;
            Footer::findOrFail($id)->update([
                'footer_details_eng' => $request->footer_details_eng,
                'footer_details_bng' => $request->footer_details_bng,
                'copy_right_text' => $request->copy_right_text,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Footer Data Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            Footer::insert([
                'footer_details_eng' => $request->footer_details_eng,
                'footer_details_bng' => $request->footer_details_bng,
                'copy_right_text' => $request->copy_right_text,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Footer Data inserted Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } //end if else
    } //end method----------------------------------------------


}
