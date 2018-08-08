<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getFrontend()
    {
        $data = [];
        $actionCompany = CategoryItem::where('id', 7)->first()->posts()->where('isActive', ACTIVE)->take(3)->get();
        foreach ($actionCompany as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 50);
        }
        $data['actionCompany'] = $actionCompany;
        $getIntroduce = Config::where('name', 'config-introduce')->first()->content;
        $data['getIntroduce'] = $getIntroduce;
        $allTuyenDung = CategoryItem::where('id', 8)->first()->posts()->where('isActive', ACTIVE)->get();
        foreach ($allTuyenDung as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 100);
        }
        $data['allTuyenDung'] = $allTuyenDung;
        return $data;
    }

    public function getAllTuyenDung()
    {
        $data = [];
        $allTuyenDung = CategoryItem::where('id', 8)->first()->posts()->where('isActive', ACTIVE)->get();
        foreach ($allTuyenDung as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 100);
        }
        $actionCompany = CategoryItem::where('id', 7)->first()->posts()->where('isActive', ACTIVE)->take(5)->get();
        foreach ($actionCompany as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 50);
        }
        $data['actionCompany'] = $actionCompany;
        $data['allTuyenDung'] = $allTuyenDung;
        return $data;
    }

    public function getDetailTuyenDung($path)
    {
        $data = [];
        $getDetailTuyenDung = CategoryItem::where('id', 8)->first()->posts()->where('path', $path)->first();
        $data['getDetailTuyenDung'] = $getDetailTuyenDung;
        $allTuyenDung = CategoryItem::where('id', 8)->first()->posts()->where('isActive', ACTIVE)->get();
        foreach ($allTuyenDung as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 100);
        }
        $data['allTuyenDung'] = $allTuyenDung;
        return $data;
    }

    public function getDetailHoatDong($path)
    {
        $data = [];
        $getDetailHoatDong = CategoryItem::where('id', 7)->first()->posts()->where('path', $path)->first();
        $data['getDetailHoatDong'] = $getDetailHoatDong;
        $other = CategoryItem::where('id', 7)->first()->posts()->where('id', '<>', $getDetailHoatDong->id)->take(4)->get();
        $data['other'] = $other;
        $allTuyenDung = CategoryItem::where('id', 8)->first()->posts()->where('isActive', ACTIVE)->get();
        foreach ($allTuyenDung as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 100);
        }
        $data['allTuyenDung'] = $allTuyenDung;
        return $data;
    }

    public function getAllHoatDong()
    {
        $data = [];
        $actionCompanyNew = CategoryItem::where('id', 7)->first()->posts()->where('isActive', ACTIVE)->orderBy('id', 'DESC')->take(2)->get();
        foreach ($actionCompanyNew as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 100);
        }

        $actionCompanyOld = CategoryItem::where('id', 7)->first()->posts()->where('isActive', ACTIVE)->whereNotIn('id', $actionCompanyNew->pluck('id'))->orderBy('id', 'DESC')->take(4)->get();
        foreach ($actionCompanyOld as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 100);
        }
        $data['actionCompanyNew'] = $actionCompanyNew;
        $data['actionCompanyOld'] = $actionCompanyOld;
        return $data;
    }


    public function getFrontendCommon()
    {
        $data = [];
        $configPhone = Config::where('name', 'config-phone')->first()->content;
        $data['configPhone'] = removeSpecialCharacter($configPhone) . '-' . $configPhone;
//        $configContact = Config::where('name', 'config-contact')->first();
//        $data['configContact'] = $configContact;
//        $categoryMain = CategoryItem::where('type', CATEGORY_PRODUCT)->where('level', MENU_GOC)->get();
//        $data['categoryMain'] = $categoryMain;
        return $data;
    }


}