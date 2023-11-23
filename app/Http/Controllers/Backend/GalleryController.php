<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageGallery;
use App\Models\VideoGallery;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function tech_web_all_image()
    {
        $images = ImageGallery::latest('id', 'DESC')->get();
        return view('backend.gallery.all_image', compact('images'));
    } //end method --------------------------------

    public function tech_web_add_image()
    {
        return view('backend.gallery.add_image');
    } //end method---------------------------

    public function tech_web_image_store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/img_gallery/' . $image_name);
            $image_url = 'backend/img_gallery/' . $image_name;
        }
        ImageGallery::insert([
            'image' => $image_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Image inserted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.image')
            ->with($notification);
    } //end method------------------------

    public function tec_web_edit_image($id)
    {
        $edit_image = ImageGallery::findOrFail($id);
        return view('backend.gallery.edit_image', compact('edit_image'));
    } //end mehtod------------------------------

    public function tec_web_image_update(Request $request)
    {
        $id = $request->id;
        $image = ImageGallery::findOrFail($id);

        if ($request->hasFile('image')) {
            @unlink($image->image);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/img_gallery/' . $image_name);
            $image_url = 'backend/img_gallery/' . $image_name;

            ImageGallery::findOrFail($id)->update([
                'image' => $image_url,
                'updated_at' => Carbon::now(),
            ]);
            $notification = [
                'message' => 'Image Updated Successfully!',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.image')
                ->with($notification);
        } else {
            $notification = [
                'message' => 'You Do Not Update Image!',
                'alert-type' => 'error',
            ];
            return redirect()
                ->route('all.image')
                ->with($notification);
        }
    } //end method------------------------

    public function tec_web_delete_image($id)
    {
        $image = ImageGallery::find($id);
        $del_image = $image->image;

        @unlink($del_image);

        ImageGallery::find($id)->delete();
        $notification = [
            'message' => 'Image Deleted Successfully!',
            'alert-type' => 'errror',
        ];
        return redirect()
            ->back()
            ->with($notification);
    } //end method--------------------------------------

    // ImageGallery status active inactive method start ------------
    public function tec_web_image_inactive($id)
    {
        ImageGallery::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_image_active($id)
    {
        ImageGallery::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // ImageGallery status active inactive method end ------------

    // ============================video gallery =============================

    public function tech_web_all_video()
    {
        $videos = VideoGallery::latest('id', 'DESC')->get();
        return view('backend.gallery.all_video', compact('videos'));
    } //end method --------------------------------

    public function tech_web_add_video()
    {
        return view('backend.gallery.add_video');
    } //end method---------------------------

    public function tech_web_video_store(Request $request)
    {
        $url = $request->video_link;
        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $url, $matches);

        $videoId = isset($matches[1]) ? $matches[1] : null;

        VideoGallery::insert([
            'video_link' => $videoId,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Video inserted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.video')
            ->with($notification);
    } //end method------------------------

    public function tec_web_edit_video($id)
    {
        $edit_video = VideoGallery::findOrFail($id);
        return view('backend.gallery.edit_video', compact('edit_video'));
    } //end mehtod------------------------------

    public function tec_web_video_update(Request $request)
    {
        $id = $request->id;
        $url = $request->video_link;
        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $url, $matches);

        $videoId = isset($matches[1]) ? $matches[1] : null;

        VideoGallery::findOrFail($id)->update([
            'video_link' => $videoId,
            'updated_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Video Updated Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.video')
            ->with($notification);
    } //end method------------------------

    public function tec_web_delete_video($id)
    {
        VideoGallery::find($id)->delete();
        $notification = [
            'message' => 'Video Deleted Successfully!',
            'alert-type' => 'errror',
        ];
        return redirect()
            ->back()
            ->with($notification);
    } //end method--------------------------------------

    // VideoGallery status active inactive method start ------------
    public function tec_web_video_inactive($id)
    {
        VideoGallery::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_video_active($id)
    {
        VideoGallery::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // VideoGallery status active inactive method end ------------

    // frontend Gallery page+==============================================

    public function tech_web_image_gallery()
    {
        $images = ImageGallery::where('status', 1)
            ->latest('id', 'DESC')
            ->get();
        return view('frontend.image-gallery.index', compact('images'));
    }
    public function tech_web_video_gallery()
    {
        $videos = VideoGallery::where('status', 1)
            ->latest('id', 'DESC')
            ->get();
        return view('frontend.video-gellery.index', compact('videos'));
    }
}
