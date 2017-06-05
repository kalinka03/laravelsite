<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{User,Category,Ad};
use DB;
use Illuminate\Support\Facades\Auth;


class AdController extends Controller
{
    public function showAd($id)
    {

        $user = null;
        $ads = Ad::findOrFail($id);

        $user = $ads->user;

        return view('ads', [
                'ads' => $ads,
                'user' => $user]
        );
    }
}







