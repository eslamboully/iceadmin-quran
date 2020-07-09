<?php

namespace Modules\WidgetsModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Entities\OurWay;

class OurWayController extends Controller
{
    use UploaderHelper;


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $our_way = OurWay::with(['translations'])->get();

        return view('widgetsmodule::our_way.index', ['our_way' => $our_way]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::our_way.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $page_data = $request->except(['_token', 'photo']);

        if($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'our_ways');
            $page_data['photo'] = $imageName;
        }

        $ourway = OurWay::create($page_data);

        return redirect('admin-panel/widgets/our_ways/')->with('success', 'success');
    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $page = OurWay::find($id);

        return view('widgetsmodule::our_way.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $pagePic = OurWay::find($id);
        $page = $request->except('_method', '_token', 'photo', 'ar', 'en');
        $pageTrans = $request->only('ar', 'en');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/our_ways/' . $pagePic->photo;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'our_ways');
            $page['photo'] = $imageName;
        }

        $our_way = OurWay::find($id);
        $our_way->update($page);

        foreach (\LanguageHelper::getLang() as $lang) {

            if ($our_way->hasTranslation('' . $lang->lang)) {
            } else {
                $our_way->translateOrNew('' . $lang->lang);
            }

            $our_way->translate('' . $lang->lang)->title = $pageTrans[$lang->lang]['title'];
            $our_way->translate('' . $lang->lang)->content = $pageTrans[$lang->lang]['content'];
            $our_way->translate('' . $lang->lang)->meta_desc = $pageTrans[$lang->lang]['meta_desc'];
            $our_way->translate('' . $lang->lang)->meta_keywords = $pageTrans[$lang->lang]['meta_keywords'];
            $our_way->translate('' . $lang->lang)->slug = $pageTrans[$lang->lang]['slug'];
            $our_way->translate('' . $lang->lang)->meta_title = $pageTrans[$lang->lang]['meta_title'];

            $our_way->save();
        }

        return redirect('admin-panel/widgets/our_ways')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $page = OurWay::find($id);
        $page->delete();

        return redirect()->back();
    }
}
