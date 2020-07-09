<?php

namespace Modules\WidgetsModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\OfficeRepository;
use File;


class OfficeController extends Controller
{

    use UploaderHelper;
    private $officeRepo;

    public function __construct(OfficeRepository $officeRepo)
    {
        $this->officeRepo = $officeRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $offices = $this->officeRepo->findAll();

        return view('widgetsmodule::office.index', ['offices' => $offices]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::office.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $officeData = $request->except( 'photo');


        if($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'offices');
            $officeData['photo'] = $imageName;
        }

        $this->officeRepo->save($officeData);

        return redirect('admin-panel/widgets/office/')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $office = $this->officeRepo->find($id);

        return view('widgetsmodule::office.edit', ['office' => $office]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {/* dd($request->all()); */
        $officePic = $this->officeRepo->find($id);
        $office = $request->except('_method', '_token', 'photo', 'ar', 'en');
        $officeTrans = $request->only('ar', 'en');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/offices/' . $officePic->icon;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'offices');
            $office['photo'] = $imageName;
        }

        $this->officeRepo->update($id, $office, $officeTrans);

        return redirect('admin-panel/widgets/office')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
       $office = $this->officeRepo->find($id);
       $this->officeRepo->delete($office);

       return redirect()->back();
    }
}
