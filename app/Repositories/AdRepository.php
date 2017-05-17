<?php
namespace App\Repositories;
use DB;
class AdRepository
{
    public function getAds()
    {
        $res = DB::select('select * from ads');
        return $res;
    }
}