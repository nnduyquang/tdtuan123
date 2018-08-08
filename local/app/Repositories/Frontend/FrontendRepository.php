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
        $actionCompany=Post::where('category_item_id',7)->where('isActive', ACTIVE)->take(3)->get();
        foreach ($actionCompany as $key=>$item){
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 200);
            $item->title = cat_chuoi_dai_thanh_ngan($item->title, 50);
        }
        $data['actionCompany'] = $actionCompany;
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