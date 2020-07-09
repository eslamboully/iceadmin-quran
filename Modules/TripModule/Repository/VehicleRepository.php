<?php

namespace Modules\TripModule\Repository;

use File;
use Modules\TripModule\Entities\Vehicle;

class VehicleRepository {
	public function findAll($id = '') {
		return Vehicle::where('id', '!=', $id)->with(['translations'])->get();
	}

	public function find($id) {
		return Vehicle::where('id', $id)->with('translations')->first();
	}

	public function save($data) {
		return Vehicle::create($data);
	}

	public function update($id, $data, $data_trans) {
		$vehicle = $this->find($id);
		$vehicle->update($data);

		foreach (\LanguageHelper::getLang() as $lang) {

			if ($vehicle->hasTranslation('' . $lang->lang)) {
			} else {
				$vehicle->translateOrNew('' . $lang->lang);
			}

			if (isset($data_trans[$lang->lang]['title'])) {
				$vehicle->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
				$vehicle->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
			}
			$vehicle->save();
		}
		return $vehicle;
	}

	public function delete($vehicle) {
		if ($vehicle->photo) {
			$file_path = public_path() . '/images/vehicle/' . $vehicle->photo;
			File::delete([$file_path]);
		}

		Vehicle::destroy($vehicle->id);
	}
}
