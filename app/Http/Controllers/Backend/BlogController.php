<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function tech_web_all_blogs()
    {
        $blogs = Blog::latest('id', 'DESC')->get();
        return view('backend.blog.all_blog', compact('blogs'));
    } //end method---------------------------------------

    public function tech_web_add_blogs()
    {
        return view('backend.blog.add_blog');
    } //end method------------------------------------

    public function tech_web_blogs_store(Request $request)
    {
        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image');
            $main_image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            Image::make($main_image)->save('backend/blogs/main_image/' . $main_image_name);
            $main_image_url = 'backend/blogs/main_image/' . $main_image_name;
        }
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $banner_image_name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->save('backend/blogs/banner_image/' . $banner_image_name);
            $banner_image_url = 'backend/blogs/banner_image/' . $banner_image_name;
        }
        if ($request->hasFile('details_image1')) {
            $details_image1 = $request->file('details_image1');
            $details_image1_name = hexdec(uniqid()) . '.' . $details_image1->getClientOriginalExtension();
            Image::make($details_image1)->save('backend/blogs/details_images/' . $details_image1_name);
            $details_image1_url = 'backend/blogs/details_images/' . $details_image1_name;
        }
        if ($request->hasFile('details_image2')) {
            $details_image2 = $request->file('details_image2');
            $details_image2_name = hexdec(uniqid()) . '.' . $details_image2->getClientOriginalExtension();
            Image::make($details_image2)->save('backend/blogs/details_images/' . $details_image2_name);
            $details_image2_url = 'backend/blogs/details_images/' . $details_image2_name;
        }
        if ($request->hasFile('details_image3')) {
            $details_image3 = $request->file('details_image3');
            $details_image3_name = hexdec(uniqid()) . '.' . $details_image3->getClientOriginalExtension();
            Image::make($details_image3)->save('backend/blogs/details_images/' . $details_image3_name);
            $details_image3_url = 'backend/blogs/details_images/' . $details_image3_name;
        }

        Blog::insert([
            'title_english' => $request->title_english,
            'title_bangla' => $request->title_bangla,

            'short_des_eng' => $request->short_des_eng,
            'short_des_bng' => $request->short_des_bng,
            'long_des1_eng' => $request->long_des1_eng,
            'long_des1_bng' => $request->long_des1_bng,
            'long_des2_eng' => $request->long_des2_eng,
            'long_des2_bng' => $request->long_des2_bng,
            'long_des3_eng' => $request->long_des3_eng,
            'long_des3_bng' => $request->long_des3_bng,

            'main_image' => $main_image_url ?? null,
            'banner_image' => $banner_image_url ?? null,
            'details_image1' => $details_image1_url ?? null,
            'details_image2' => $details_image2_url ?? null,
            'details_image3' => $details_image3_url ?? null,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Blogs inserted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.blogs')
            ->with($notification);
    } //end method---------------------------------------------

    public function tec_web_edit_blogs($id)
    {
        $edit_blog = Blog::findOrFail($id);
        return view('backend.blog.edit_blog', compact('edit_blog'));
    } //end method------------------------------------------

    public function tec_web_update_blogs(Request $request)
    {
        $id = $request->id;
        $image = Blog::findOrFail($id);
        $data = [];

        if ($request->hasFile('main_image')) {
            @unlink($image->main_image);
            $main_image = $request->file('main_image');
            $main_image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            Image::make($main_image)->save('backend/blogs/main_image/' . $main_image_name);
            $main_image_url = 'backend/blogs/main_image/' . $main_image_name;
            $data['main_image'] = $main_image_url;
        }
        if ($request->hasFile('banner_image')) {
            @unlink($image->banner_image);
            $banner_image = $request->file('banner_image');
            $banner_image_name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->save('backend/blogs/banner_image/' . $banner_image_name);
            $banner_image_url = 'backend/blogs/banner_image/' . $banner_image_name;
            $data['banner_image'] = $banner_image_url;
        }
        if ($request->hasFile('details_image1')) {
            @unlink($image->details_image1);
            $details_image1 = $request->file('details_image1');
            $details_image1_name = hexdec(uniqid()) . '.' . $details_image1->getClientOriginalExtension();
            Image::make($details_image1)->save('backend/blogs/details_images/' . $details_image1_name);
            $details_image1_url = 'backend/blogs/details_images/' . $details_image1_name;
            $data['details_image1'] = $details_image1_url;
        }
        if ($request->hasFile('details_image2')) {
            @unlink($image->details_image2);
            $details_image2 = $request->file('details_image2');
            $details_image2_name = hexdec(uniqid()) . '.' . $details_image2->getClientOriginalExtension();
            Image::make($details_image2)->save('backend/blogs/details_images/' . $details_image2_name);
            $details_image2_url = 'backend/blogs/details_images/' . $details_image2_name;
            $data['details_image2'] = $details_image2_url;
        }
        if ($request->hasFile('details_image3')) {
            @unlink($image->details_image3);
            $details_image3 = $request->file('details_image3');
            $details_image3_name = hexdec(uniqid()) . '.' . $details_image3->getClientOriginalExtension();
            Image::make($details_image3)->save('backend/blogs/details_images/' . $details_image3_name);
            $details_image3_url = 'backend/blogs/details_images/' . $details_image3_name;
            $data['details_image3'] = $details_image3_url;
        }

        $data['title_english'] = $request->title_english;
        $data['title_bangla'] = $request->title_bangla;
        $data['short_des_eng'] = $request->short_des_eng;
        $data['short_des_bng'] = $request->short_des_bng;
        $data['long_des1_eng'] = $request->long_des1_eng;
        $data['long_des1_bng'] = $request->long_des1_bng;
        $data['long_des2_eng'] = $request->long_des2_eng;
        $data['long_des2_bng'] = $request->long_des2_bng;
        $data['long_des3_eng'] = $request->long_des3_eng;
        $data['long_des3_bng'] = $request->long_des3_bng;
        $data['updated_at'] = Carbon::now();

        Blog::findOrFail($id)->update($data);

        $notification = [
            'message' => 'Blogs Updated Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.blogs')
            ->with($notification);
    } //end method------------------------------

    public function tec_web_delete_blogs($id)
    {
        $blog_image = Blog::findOrFail($id);
        // $image = $service_image->banner_image;
        @unlink($blog_image->main_image);
        @unlink($blog_image->banner_image);
        @unlink($blog_image->details_image1);
        @unlink($blog_image->details_image2);
        @unlink($blog_image->details_image3); //delete banner_image from local path_folder

        Blog::findOrFail($id)->delete();
        $notification = [
            'message' => 'Blog Data Deleted Successfully!',
            'alert-type' => 'error',
        ];
        return redirect()
            ->back()
            ->with($notification);
    } //end method-------------------------------------------

    // service status active inactive method start ------------
    public function tec_web_blogs_inactive($id)
    {
        Blog::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_blogs_active($id)
    {
        Blog::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // service status active inactive method end ------------

    // Blog Frontend site===================================================
    public function tech_web_all_blogs_list()
    {
        $blogs = Blog::where('status', 1)->paginate(6);
        return view('frontend.blog.index', compact('blogs'));
    } //end method ------------------------------------------

    public function tech_web_blog_details($id)
    {
        $blogs = Blog::where('status', 1)->get();
        $blog_details = Blog::find($id);
        $previousPost = Blog::where('id', '<', $blog_details->id)
            ->orderBy('id', 'desc')
            ->first();
        $nextPost = Blog::where('id', '>', $blog_details->id)
            ->orderBy('id', 'asc')
            ->first();
        return view('frontend.blog.blog-single', compact('blog_details', 'blogs', 'previousPost', 'nextPost'));
    }
}
