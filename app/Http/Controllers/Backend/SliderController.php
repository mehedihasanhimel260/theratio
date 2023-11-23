<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function tech_web_slider_setting()
    {
        $sliders = Slider::latest('id', 'DESC')->get();
        return view('backend.slider.all_slider', compact('sliders'));
    } //end method----------------------------------------

    public function tech_web_add_slider()
    {
        return view('backend.slider.add_slider');
    } //end method----------------------------------------

    public function tech_web_slider_store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/slider/' . $image_name);
            $image_url = 'backend/slider/' . $image_name;
        }
        Slider::insert([
            'title_english' => $request->title_english,
            'title_bangla' => $request->title_bangla,
            'short_text_eng' => $request->short_text_eng,
            'short_text_bng' => $request->short_text_bng,
            'image' => $image_url ?? null,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Slider inserted Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.slider')
            ->with($notification);
    } //end method----------------------------------------

    public function tech_web_slider_edit($id)
    {
        $edit_slider = Slider::findOrFail($id);
        return view('backend.slider.edit_slider', compact('edit_slider'));
    } //end method------------------------------------------

    public function tech_web_slider_update(Request $request)
    {
        $id = $request->id;
        $image = Slider::findOrFail($id);
        $data = [];

        if ($request->hasFile('image')) {
            @unlink($image->image);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/slider/' . $image_name);
            $image_url = 'backend/slider/' . $image_name;
            $data['image'] = $image_url;
        }

        $data['title_english'] = $request->title_english;
        $data['title_bangla'] = $request->title_bangla;
        $data['short_text_eng'] = $request->short_text_eng;
        $data['short_text_bng'] = $request->short_text_bng;
        $data['updated_at'] = Carbon::now();

        Slider::findOrFail($id)->update($data);

        $notification = [
            'message' => 'Slider Updated Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.slider')
            ->with($notification);
    } //end method----------------------------------------

    public function tech_web_slider_delete($id)
    {
        $slider_image = Slider::findOrFail($id);
        @unlink($slider_image->image);

        Slider::findOrFail($id)->delete();
        $notification = [
            'message' => 'Slider Deleted Successfully!',
            'alert-type' => 'error',
        ];
        return redirect()
            ->back()
            ->with($notification);
    } //end method-------------------------------------------

    // Slider status active inactive method start ------------
    public function tec_web_slider_inactive($id)
    {
        Slider::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_slider_active($id)
    {
        Slider::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // Slider status active inactive method end ------------
}
