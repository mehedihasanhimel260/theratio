<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectsData = Project::get();
        return view('backend.project.index', compact('projectsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        Project::insert([
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
            ->route('project.index')
            ->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit_service = Project::findOrFail($id);
        return view('backend.project.edit', compact('edit_service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id = $request->id;
        $old_image = Project::find($id);
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

        Project::findOrFail($id)->update($data);

        $notification = [
            'message' => 'Project Updated Successfully!',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('project.index')
            ->with($notification);
    }

    public function tec_web_project_inactive($id)
    {
        Project::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_project_active($id)
    {
        Project::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service_image = Project::findOrFail($id);
        // $image = $service_image->banner_image;
        @unlink($service_image->main_image);
        @unlink($service_image->banner_image);
        @unlink($service_image->detais_image_1);
        @unlink($service_image->detais_image_2);
        @unlink($service_image->detais_image_3); 

        Project::findOrFail($id)->delete();
        $notification = [
            'message' => 'Project Data Deleted!',
            'alert-type' => 'error',
        ];
        return redirect()
            ->back()
            ->with($notification);
    }

    public function tech_web_project_details($id)
    {
        $blog_details = Project::findOrFail($id);
        $blogs = Project::get();
        return view('frontend.project.index', compact('blog_details', 'blogs'));
    }
}
