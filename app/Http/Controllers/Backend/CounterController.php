<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CounterIcon;
use App\Models\CounterImage;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class CounterController extends Controller
{
    public function tech_web_counter_icon(){
        $counter_icon = CounterIcon::latest()->first(); 
        return view('backend.counter.counter_icon',compact('counter_icon'));
    }//end method---------------------------------

    public function tech_web_counter_icon_store(Request $request){
        $icon = CounterIcon::latest()->first();

        if($icon){
            $icon = CounterIcon::latest()->first();
            $id = $icon->id;

            CounterIcon::findOrFail($id)->update([
                'title_english_1' => $request->title_english_1,
                'title_english_2' => $request->title_english_2,
                'title_english_3' => $request->title_english_3,
                'title_english_4' => $request->title_english_4,

                'title_bangla_1' => $request->title_bangla_1,
                'title_bangla_2' => $request->title_bangla_2,
                'title_bangla_3' => $request->title_bangla_3,
                'title_bangla_4' => $request->title_bangla_4,

                'value_1' => $request->value_1,
                'value_2' => $request->value_2,
                'value_3' => $request->value_3,
                'value_4' => $request->value_4,

                'incon_1' => $request->incon_1,
                'incon_2' => $request->incon_2,
                'incon_3' => $request->incon_3,
                'incon_4' => $request->incon_4,
                
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Counter Icon Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('counter.icon')->with($notification);

        }else{
            CounterIcon::insert([
                'title_english_1' => $request->title_english_1,
                'title_english_2' => $request->title_english_2,
                'title_english_3' => $request->title_english_3,
                'title_english_4' => $request->title_english_4,

                'title_bangla_1' => $request->title_bangla_1,
                'title_bangla_2' => $request->title_bangla_2,
                'title_bangla_3' => $request->title_bangla_3,
                'title_bangla_4' => $request->title_bangla_4,

                'value_1' => $request->value_1,
                'value_2' => $request->value_2,
                'value_3' => $request->value_3,
                'value_4' => $request->value_4,

                'incon_1' => $request->incon_1,
                'incon_2' => $request->incon_2,
                'incon_3' => $request->incon_3,
                'incon_4' => $request->incon_4,
                
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Counter Icon Inserted Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('counter.icon')->with($notification);
        }
    }//end mehtod-------------------------------------------------


    public function tech_web_counter_image(){
        $counter_image = CounterImage::latest()->first(); 
        return view('backend.counter.counter_image',compact('counter_image'));
    }//end method---------------------------------

    public function tech_web_counter_image_store(Request $request){
        $counter_image = CounterImage::latest()->first();

        if($counter_image){
            $counter_image = CounterImage::latest()->first();
            $id = $counter_image->id;

            $data = array();

            $data['title_english_1'] = $request->title_english_1;
            $data['title_english_2'] = $request->title_english_2;
            $data['title_english_3'] = $request->title_english_3;
            $data['title_english_4'] = $request->title_english_4;

            $data['title_bangla_1'] = $request->title_bangla_1;
            $data['title_bangla_2'] = $request->title_bangla_2;
            $data['title_bangla_3'] = $request->title_bangla_3;
            $data['title_bangla_4'] = $request->title_bangla_4;

            $data['value_1'] = $request->value_1;
            $data['value_2'] = $request->value_2;
            $data['value_3'] = $request->value_3;
            $data['value_4'] = $request->value_4;
            $data['updated_at'] = Carbon::now();

            if($request->file('image_1')){
                @unlink($counter_image->image_1);
                $image_1 = $request->file('image_1');
                $image_1_Name = hexdec(uniqid()).'.'.$image_1->getClientOriginalExtension();
                Image::make($image_1)->save('backend/counter_image/'.$image_1_Name); 
                $image_1_save = 'backend/counter_image/'.$image_1_Name;//image save into db
                $data['image_1'] = $image_1_save;
            }
            if($request->file('image_2')){
                @unlink($counter_image->image_2);
                $image_2 = $request->file('image_2');
                $image_2_Name = hexdec(uniqid()).'.'.$image_2->getClientOriginalExtension();
                Image::make($image_2)->save('backend/counter_image/'.$image_2_Name); 
                $image_2_save = 'backend/counter_image/'.$image_2_Name;//image save into db
                $data['image_2'] = $image_2_save;
            }
            if($request->file('image_3')){
                @unlink($counter_image->image_3);
                $image_3 = $request->file('image_3');
                $image_3_Name = hexdec(uniqid()).'.'.$image_3->getClientOriginalExtension();
                Image::make($image_3)->save('backend/counter_image/'.$image_3_Name); 
                $image_3_save = 'backend/counter_image/'.$image_3_Name;//image save into db
                $data['image_3'] = $image_3_save;
            }
            if($request->file('image_4')){
                @unlink($counter_image->image_4);
                $image_4 = $request->file('image_4');
                $image_4_Name = hexdec(uniqid()).'.'.$image_4->getClientOriginalExtension();
                Image::make($image_4)->save('backend/counter_image/'.$image_4_Name); 
                $image_4_save = 'backend/counter_image/'.$image_4_Name;//image save into db
                $data['image_4'] = $image_4_save;
            }

            CounterImage::findOrFail($id)->update($data);
            $notification = array(
                'message' => 'Counter Image Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('counter.image')->with($notification);
        }
        else{

            if($request->file('image_1')){
               
                $image_1 = $request->file('image_1');
                $image_1_Name = hexdec(uniqid()).'.'.$image_1->getClientOriginalExtension();
                Image::make($image_1)->save('backend/counter_image/'.$image_1_Name); 
                $image_1_save = 'backend/counter_image/'.$image_1_Name;//image save into db
               
            }
            if($request->file('image_2')){
                
                $image_2 = $request->file('image_2');
                $image_2_Name = hexdec(uniqid()).'.'.$image_2->getClientOriginalExtension();
                Image::make($image_2)->save('backend/counter_image/'.$image_2_Name); 
                $image_2_save = 'backend/counter_image/'.$image_2_Name;//image save into db
               
            }
            if($request->file('image_3')){
                
                $image_3 = $request->file('image_3');
                $image_3_Name = hexdec(uniqid()).'.'.$image_3->getClientOriginalExtension();
                Image::make($image_3)->save('backend/counter_image/'.$image_3_Name); 
                $image_3_save = 'backend/counter_image/'.$image_3_Name;//image save into db
                
            }
            if($request->file('image_4')){
                
                $image_4 = $request->file('image_4');
                $image_4_Name = hexdec(uniqid()).'.'.$image_4->getClientOriginalExtension();
                Image::make($image_4)->save('backend/counter_image/'.$image_4_Name); 
                $image_4_save = 'backend/counter_image/'.$image_4_Name;//image save into db
               
            }

            CounterImage::insert([
                'title_english_1' => $request->title_english_1,
                'title_english_2' => $request->title_english_2,
                'title_english_3' => $request->title_english_3,
                'title_english_4' => $request->title_english_4,

                'title_bangla_1' => $request->title_bangla_1,
                'title_bangla_2' => $request->title_bangla_2,
                'title_bangla_3' => $request->title_bangla_3,
                'title_bangla_4' => $request->title_bangla_4,

                'value_1' => $request->value_1,
                'value_2' => $request->value_2,
                'value_3' => $request->value_3,
                'value_4' => $request->value_4,

                'image_1' => $image_1_save,
                'image_2' => $image_2_save,
                'image_3' => $image_3_save,
                'image_4' => $image_4_save,
                
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Counter Image Inserted Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('counter.image')->with($notification);
        }
    }//end method--------------------------------------
}
