<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use App\Models\Service;
// use App\Models\Testimonial;
use App\Models\About;
use App\Models\Blog;
use App\Models\CounterIcon;
use App\Models\ImageGallery;
use App\Models\Project;
use App\Models\Sponsor;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Testimonial2;

class WebViewHomePageController extends Controller
{
    public function tech_web_home_index()
    {
        $images = ImageGallery::where('status', 1)
            ->latest('id', 'DESC')
            ->limit(3)
            ->get();
        $testimonials = Testimonial2::where('status', 1)
            ->latest()
            ->limit(5)
            ->get();
        $services = Service::latest()
            ->limit(3)
            ->get();
        $blogs = Blog::latest()
            ->limit(3)
            ->get();
        $about = About::latest()->first();
        $brands = Sponsor::all();
        $teams = Team::latest()
            ->limit(6)
            ->get();
        $slider = Slider::where('status', '1')
            ->latest()
            ->limit(3)
            ->get();
        $projects_don = CounterIcon::latest()->first();
        $projects = Project::where('status', 1)
            ->limit(6)
            ->get();
        return view('frontend.home.index', compact('testimonials', 'services', 'about', 'blogs', 'brands', 'teams', 'slider', 'projects_don', 'projects', 'images'));
    }
}
