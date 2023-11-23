<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Testimonial2;
use Carbon\Carbon;

use Intervention\Image\Facades\Image;


class TestimonialController extends Controller
{
    public function tech_web_all_testimonial()
    {
        $testimonials = Testimonial::latest('id', 'DESC')->get();
        return view('backend.testimonial.all_testimonial', compact('testimonials'));
    } //end method-----------------------------------

    public function tech_web_add_testimonial()
    {
        return view('backend.testimonial.add_testimonial');
    } //end method-----------------------------------

    public function tech_web_testimonial_store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/testimonial/' . $image_name);
            $image_url = 'backend/testimonial/' . $image_name;
        }

        Testimonial::insert([
            'name_english' => $request->name_english,
            'name_bangla' => $request->name_bangla,
            'desig_eng' => $request->desig_eng,
            'desig_bng' => $request->desig_bng,
            'review_eng' => $request->review_eng,
            'review_bng' => $request->review_bng,
            'star' => $request->star,
            'image' =>  $image_url ?? null,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Testimonial inserted Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.testimonial_1')->with($notification);
    } //end method-----------------------------------

    public function tec_web_edit_testimonial($id)
    {
        $edit_testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit_testimonial', compact('edit_testimonial'));
    } //end mehtod------------------------------

    public function tec_web_testimonial_update(Request $request)
    {
        $id = $request->id;
        $image = Testimonial::find($id);

        if ($request->hasFile('image')) {
            @unlink($image->image);

            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/testimonial/' . $image_name);
            $image_url = 'backend/testimonial/' . $image_name;

            Testimonial::findOrFail($id)->update([
                'name_english' => $request->name_english,
                'name_bangla' => $request->name_bangla,
                'desig_eng' => $request->desig_eng,
                'desig_bng' => $request->desig_bng,
                'review_eng' => $request->review_eng,
                'review_bng' => $request->review_bng,
                'star' => $request->star,
                'image' =>  $image_url ?? null,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            Testimonial::findOrFail($id)->update([
                'name_english' => $request->name_english,
                'name_bangla' => $request->name_bangla,
                'desig_eng' => $request->desig_eng,
                'desig_bng' => $request->desig_bng,
                'review_eng' => $request->review_eng,
                'review_bng' => $request->review_bng,
                'star' => $request->star,
                'updated_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Testimonial Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.testimonial_1')->with($notification);
    } //end method------------------------------------------------

    public function tec_web_delete_testimonial($id)
    {
        $image = Testimonial::find($id);
        $del_image = $image->image;
        @unlink($del_image);
        Testimonial::find($id)->delete();
        $notification = array(
            'message' => 'Testimonial Deleted Successfully!',
            'alert-type' => 'errror'
        );
        return redirect()->back()->with($notification);
    }

    // Testimonial status active inactive method start ------------
    public function tec_web_testimonial_inactive($id)
    {
        Testimonial::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_testimonial_active($id)
    {
        Testimonial::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }

    // testimonial 2 all mehtods=========================================

    public function tech_web_all_testimonial_2()
    {
        $testimonials = Testimonial2::latest('id', 'DESC')->get();
        return view('backend.testimonial.all_testimonial_2', compact('testimonials'));
    } //end method-----------------------------------

    public function tech_web_add_testimonial_2()
    {
        return view('backend.testimonial.add_testimonial_2');
    } //end method-----------------------------------

    public function tech_web_testimonial_2_store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/testimonial_2/' . $image_name);
            $image_url = 'backend/testimonial_2/' . $image_name;
        }

        Testimonial2::insert([
            'name_english' => $request->name_english,
            'name_bangla' => $request->name_bangla,
            'desig_eng' => $request->desig_eng,
            'desig_bng' => $request->desig_bng,
            'review_eng' => $request->review_eng,
            'review_bng' => $request->review_bng,
            'star' => $request->star,
            'image' =>  $image_url ?? null,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Testimonial inserted Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.testimonial_2')->with($notification);
    } //end method-----------------------------------

    public function tec_web_edit_testimonial_2($id)
    {
        $edit_testimonial = Testimonial2::findOrFail($id);
        return view('backend.testimonial.edit_testimonial_2', compact('edit_testimonial'));
    } //end mehtod------------------------------

    public function tec_web_testimonial_2_update(Request $request)
    {
        $id = $request->id;
        $image = Testimonial2::find($id);

        if ($request->hasFile('image')) {
            @unlink($image->image);

            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('backend/testimonial_2/' . $image_name);
            $image_url = 'backend/testimonial_2/' . $image_name;

            Testimonial2::findOrFail($id)->update([
                'name_english' => $request->name_english,
                'name_bangla' => $request->name_bangla,
                'desig_eng' => $request->desig_eng,
                'desig_bng' => $request->desig_bng,
                'review_eng' => $request->review_eng,
                'review_bng' => $request->review_bng,
                'star' => $request->star,
                'image' =>  $image_url ?? null,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            Testimonial2::findOrFail($id)->update([
                'name_english' => $request->name_english,
                'name_bangla' => $request->name_bangla,
                'desig_eng' => $request->desig_eng,
                'desig_bng' => $request->desig_bng,
                'review_eng' => $request->review_eng,
                'review_bng' => $request->review_bng,
                'star' => $request->star,
                'updated_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Testimonial Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.testimonial_2')->with($notification);
    } //end method------------------------------------------------

    public function tec_web_delete_testimonial_2($id)
    {
        $image = Testimonial2::find($id);
        $del_image = $image->image;
        @unlink($del_image);
        Testimonial2::find($id)->delete();
        $notification = array(
            'message' => 'Testimonial Deleted Successfully!',
            'alert-type' => 'errror'
        );
        return redirect()->back()->with($notification);
    }

    // Testimonial status active inactive method start ------------
    public function tec_web_testimonial_2_inactive($id)
    {
        Testimonial2::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_testimonial_2_active($id)
    {
        Testimonial2::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
}
