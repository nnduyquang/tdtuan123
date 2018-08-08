<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontend();

    public function getFrontendCommon();

    public function getAllTuyenDung();

    public function getDetailTuyenDung($path);

    public function getDetailHoatDong($path);
}