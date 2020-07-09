<?php

namespace Modules\WidgetsModule\Repository;

use File;
use Modules\WidgetsModule\Entities\Office;
use Modules\WidgetsModule\Entities\OfficeTranslation;

/**
 * SliderRepository Class, will deal with all data of Slider,
 * Including its images and relations.
 */
class OfficeRepository
{

  public function find($id)
  {
    $office =Office::where('id', $id)->first();

    return $office;
  }

  public function findAll()
  {
    $office = Office::all();

    return $office;
  }

  public function save($data)
  {
    $office = Office::create($data);
    return $office;
  }

  public function delete($office)
  {
    if ($office->icon) {
      $file_path = public_path() . '/images/offices/' . $office->icon;

      File::delete($file_path);
    }

    Office::destroy($office->id);
  }

    public function update($id, $data, $data_trans)
    {
        $office = Office::find($id);
        $office->update($data);

        foreach (\LanguageHelper::getLang() as $lang) {

          if ($office->hasTranslation('' . $lang->lang)) {
          } else {
            $office->translateOrNew('' . $lang->lang);
                }

            $office->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
            $office->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];

            $office->save();
        }
        return $office;
    }
}
