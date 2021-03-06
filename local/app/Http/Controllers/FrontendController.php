<?php

namespace App\Http\Controllers;

use App\Config;
use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function getFrontend()
    {
        $data = $this->frontendRepository->getFrontend();
        return view('frontend.home.index', compact('data'));
    }

    public function getAllTuyenDung(){
        $data = $this->frontendRepository->getAllTuyenDung();
        return view('frontend.danhmuccv.index', compact('data'));
    }

    public function getDetailTuyenDung($path){
        $data = $this->frontendRepository->getDetailTuyenDung($path);
        return view('frontend.tuyendung.index', compact('data'));
    }

    public function getDetailHoatDong($path){
        $data = $this->frontendRepository->getDetailHoatDong($path);
        return view('frontend.hoatdong_chitiet.index', compact('data'));
    }

    public function getAllHoatDong(){
        $data = $this->frontendRepository->getAllHoatDong();
        return view('frontend.hoatdong.index', compact('data'));
    }

    public function getPage($type)
    {
        if($type==2){
            $configs = Config::whereIn('name', ['config-introduce'])->first();

            $data['content']=$configs->content;

        }else{
            $companyName=Config::whereIn('name', ['config-company-name'])->first();
            $data['companyName']=$companyName->content;
        }
        $data['type'] = $type;
        return view('frontend.page.index', compact('data'));
    }

    public function getPageGioiThieu(){
        $configs=Config::whereIn('name', ['config-introduce-page'])->first();
        $data['content']=$configs->content;
        return view('frontend.gioithieu.index', compact('data'));
    }

}

