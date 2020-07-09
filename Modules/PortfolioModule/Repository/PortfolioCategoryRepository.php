<?php

namespace Modules\PortfolioModule\Repository;

use Modules\PortfolioModule\Entities\PortfolioCategory\PortfolioCategory;


class PortfolioCategoryRepository
{
    public function find($id)
    {
        $portfolioCateg = PortfolioCategory::where('id', $id)->first();

        return $portfolioCateg;
    }

    public function findAll()
    {
        $portfolioCategs = PortfolioCategory::orderBy('id','desc')->get();

        return $portfolioCategs;
    }

    public function save($data)
    {
        $portfolio = PortfolioCategory::create($data);

        return $portfolio;
    }

    public function update($id, $data, $portofolio_trans)
    {
        $categ = PortfolioCategory::find($id);
        $categ->update($data);

        foreach (\LanguageHelper::getLang() as $lang) {

            if ($categ->hasTranslation('' . $lang->lang)) {
			} else {
				$categ->translateOrNew('' . $lang->lang);
            }
            if (isset($portofolio_trans[$lang->lang]['title'])) {
                $categ->translate('' . $lang->lang)->title = $portofolio_trans[$lang->lang]['title'];
                $categ->translate('' . $lang->lang)->description = $portofolio_trans[$lang->lang]['description'];

                $categ->translate('' . $lang->lang)->meta_title = $data[$lang->lang]['meta_title'];
                $categ->translate('' . $lang->lang)->meta_desc = $data[$lang->lang]['meta_desc'];
                $categ->translate('' . $lang->lang)->slug = $data[$lang->lang]['slug'];
                $categ->translate('' . $lang->lang)->meta_keywords = $data[$lang->lang]['meta_keywords'];
            }

            $categ->save();
        }
        return $categ;
    }

    public function delete($categ)
    {
        PortfolioCategory::destroy($categ->id);
    }
}
