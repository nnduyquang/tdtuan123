<?php

namespace App\Http\Controllers;

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

}

