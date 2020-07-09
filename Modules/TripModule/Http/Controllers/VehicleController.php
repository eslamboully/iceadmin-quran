<?php

namespace Modules\TripModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\TripModule\Repository\VehicleRepository;

class VehicleController extends Controller {
	use UploaderHelper;

	private $vehicleRepo;

	public function __construct(VehicleRepository $vehicleRepo) {
		$this->vehicleRepo = $vehicleRepo;
	}

	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index() {
		$vehicles = $this->vehicleRepo->findAll();

		return view('tripmodule::vehicle.index', ['vehicles' => $vehicles]);
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create() {
		$vehicles = $this->vehicleRepo->findAll();

		return view('tripmodule::vehicle.create', ['vehicles' => $vehicles]);
	}

	/**
	 * Store a newly created resource in storage.
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request) {
		$data = $request->except('_token');

		if ($request->hasFile('photo')) {
			$image = $request->file('photo');
			$imageName = $this->uploadWithResize($image, 'vehicle', 800, 960);
			$data['photo'] = $imageName;
		}

		$this->vehicleRepo->save($data);

		return redirect('/admin-panel/vehicle')->with('success', 'success');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param int $id
	 * @return Response
	 */
	public function edit($id) {
		$vehicle = $this->vehicleRepo->find($id);
		$vehicles = $this->vehicleRepo->findAll($id);

		return view('tripmodule::vehicle.edit', ['vehicle' => $vehicle, 'vehicles' => $vehicles]);
	}

	/**
	 * Update the specified resource in storage.
	 * @param Request $request
	 * @param int $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		$vehiclePic = $this->vehicleRepo->find($id);
		$vehicleData = $request->except('_token', '_method', 'photo', 'it', 'fr', 'ru', 'en');

		$activeLangCode = \LanguageHelper::getDynamicLangCode();
		$vehicleTrans = $request->only($activeLangCode);

		if ($request->hasFile('photo')) {
			// Delete old image first.
			$thumbnail_path = public_path() . '/images/vehicle/' . $vehiclePic->photo;
			File::delete([$thumbnail_path]);

			// Save the new one.
			$image = $request->file('photo');
			$imageName = $this->uploadWithResize($image, 'vehicle', 800, 960);
			$vehicleData['photo'] = $imageName;
		}

		$this->vehicleRepo->update($id, $vehicleData, $vehicleTrans);

		return redirect('admin-panel/vehicle')->with('updated', 'updated');
	}

	/**
	 * Remove the specified resource from storage.
	 * @param int $id
	 * @return Response
	 */
	public function destroy($id) {
		$vehicle = $this->vehicleRepo->find($id);
		$this->vehicleRepo->delete($vehicle);

		return redirect()->back();
	}
}
