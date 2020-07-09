<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ConfigModule\Entities\Config;
use Illuminate\Support\Facades\View;
use Modules\BlogModule\Entities\Blog;
use Modules\ServiceModule\Entities\ServiceCategory\ServiceCategory;
use Modules\TripModule\Entities\Destination;
use Modules\TripModule\Entities\Trip;
use Modules\VideoModule\Entities\Video;
use Modules\WidgetsModule\Entities\acheive;
use Modules\WidgetsModule\Entities\OurWay;
use Modules\WidgetsModule\Entities\Partner;
use Modules\WidgetsModule\Entities\Slider\Slider;
use Modules\WidgetsModule\Entities\Team\Team;
use Modules\WidgetsModule\Entities\Testimonial;
use Modules\WidgetsModule\Entities\WhyUs;

class FrontModuleController extends Controller
{
    public function __construct()
    {
        $categories = ServiceCategory::with(['translations','service'])->get();
        $blogs = Blog::with(['translations','admin'])->take(2)->get();
        View::share(['categories' => $categories,'blogs' => $blogs]);
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $sliders = Slider::with(['translations'])->get();
        $our_ways = OurWay::with(['translations'])->take(4)->get();
        $secondBlogs = Blog::with(['translations','admin'])->skip(2)->take(2)->get();
        $teams = Team::with(['translations'])->take(4)->get();

        return view('frontmodule::index',compact('teams','sliders','our_ways','secondBlogs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function religious_link()
    {
        $recent_blogs = Blog::with(['translations','admin'])->skip(2)->take(2)->get();
        $religious_link = Config::with(['translations'])->where('var','religious_links')->first();
        return view('frontmodule::religious_links',compact('religious_link','recent_blogs'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function contact()
    {
        return view('frontmodule::contact');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function about_us()
    {
        $our_ways = OurWay::with(['translations'])->take(4)->get();
        $teams = Team::with(['translations'])->take(4)->get();
        $testimonials = Testimonial::query()->get();
        return view('frontmodule::about',compact('our_ways','teams','testimonials'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('frontmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
