<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\ConfigModule\Entities\Config;
use Illuminate\Support\Facades\View;
use Modules\BlogModule\Entities\Blog;
use Modules\ServiceModule\Entities\ServiceCategory\ServiceCategory;
use Modules\ServiceModule\Entities\ServiceMod\Service;
use Modules\TripModule\Entities\Destination;
use Modules\TripModule\Entities\Trip;
use Modules\VideoModule\Entities\Video;
use Modules\WidgetsModule\Entities\acheive;
use Modules\WidgetsModule\Entities\Contactus;
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
        $categories = ServiceCategory::with(['translations','service','categories'])->where('parent_id',null)->get();
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
        $our_ways = OurWay::with(['translations'])->take(3)->get();
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
    public function questions()
    {
        $questions = acheive::query()->paginate(9);
        return view('frontmodule::questions',compact('questions'));
    }

    public function question($id,$title)
    {
        $question = acheive::find($id);
        return view('frontmodule::question',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function shares()
    {
        $shares = Testimonial::query()->paginate(9);
        return view('frontmodule::shares',compact('shares'));
    }

    public function share($id,$title)
    {
        $share = Testimonial::find($id);
        return view('frontmodule::share',compact('share'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function contact_post(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ],[],[]);

        if ($validate->fails()) {
            return \response()->json(['data' => '','message' => $validate->errors()->first(),'status' => false]);
        }
        $contact = Contactus::create($request->except('_token'));
        return \response()->json(['data' => $contact,'message' => '','status' => true]);
    }

    public function serviceCategory($id,$title)
    {
        $category = ServiceCategory::find($id);
        return view('frontmodule::category',compact('category'));
    }

    public function service($id,$title)
    {
        $service = Service::find($id);
        $services = Service::query()->get();
        $recent_blogs = Blog::with(['translations','admin'])->skip(2)->take(2)->get();
        return view('frontmodule::service',compact('service','services','recent_blogs'));
    }

    public function scientists()
    {
        $scientists = Team::all();
        return view('frontmodule::scientists',compact('scientists'));
    }

    public function scholar($id,$title)
    {
        $scientist = Team::find($id);
        $scientists = Team::all();
        return view('frontmodule::scholar',compact('scientist'));
    }

    public function blog($id,$title)
    {
        $blog = Blog::find($id);
        return view('frontmodule::blog',compact('blog'));
    }
}
