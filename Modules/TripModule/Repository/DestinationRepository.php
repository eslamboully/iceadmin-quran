<?php

namespace Modules\TripModule\Repository;

use File;
use Modules\TripModule\Entities\Destination;


class DestinationRepository
{
    public function findAll($id = '')
    {
        return Destination::where('id' , '!=' , $id)->with(['translations','trips','trips.translations'])->get();
    }

    public function find($id)
    {
        return Destination::where('id', $id)->with('translations')->first();
    }

    public function findslug($slug) {
		return Destination::whereTranslation('slug', $slug)->with(['translations'])->first();
	}

    public function save($data)
    {
        return Destination::create($data);
    }

    public function update($id, $data, $data_trans)
    {
        $destination = $this->find($id);
        $destination->update($data);

        foreach (\LanguageHelper::getLang() as $lang) {

            if ($destination->hasTranslation('' . $lang->lang)) {
            } else {
                $destination->translateOrNew('' . $lang->lang);
            }

            if (isset($data_trans[$lang->lang]['title'])) {
                $destination->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
                $destination->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
                $destination->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
                $destination->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];
                $destination->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
                $destination->translate('' . $lang->lang)->slug = $data_trans[$lang->lang]['slug'];
            }

            $destination->save();
        }
          return $destination;
    }

    public function delete($destination)
    {
        if ($destination->photo) {
            $file_path = public_path() . '/images/destination/' . $destination->photo;
            File::delete([$file_path]);
        }
        
        Destination::destroy($destination->id);
    }
}
