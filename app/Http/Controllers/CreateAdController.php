<?php
namespace App\Http\Controllers;
use App\Category;
use App\{User,Ad};
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class CreateAdController extends Controller
{
    public function createAd(Request $request)
    {
        $categories = Category::all();
//  foreach ($categories as $category) {
//             $category->select ('title')->get();
//         }

        return view('createAd', ['categories' => $categories]);
      }
public function store(Request $request){
//dump ($request->all());
$this ->validate($request,[
        'category' => 'required',
        'title' => 'required',
        'text' => 'required',]);
    $user = Auth::user();

    $ad = new Ad();
    $ad->title = $request->get('title');
    $ad->text = $request->get('text');
    $ad->category_id = $request->get('category');
    $ad->user()->associate($user);
//    dump($ad);
    $ad->save();
    return redirect('/');

}
}













// {



//     public function SelectCatalog()
//     {

// $categories2 = Category::select('title', 'created_at')->get();

// dump( $categories2 );



//     }






//     public function showCatalog()
//     {


//         $categories = Category::all();
//         // $ads = ad::all();
//  $ads2 = DB::table('ads')
//                     ->orderBy('id', 'ads')
//                     ->groupBy('count')
//                     ->having('count', '>', 5)
//                     ->get();

//         return view('catalog', ['categories' => $categories, 'ads'=>$ads]);
//     }

//     // public function showAd()
//     // {

//     // $ads2 = DB::table('ads')
//     //                 ->orderBy('id', 'ads')
//     //                 ->groupBy('count')
//     //                 ->having('count', '>', 5)
//     //                 ->get();
//     //  return view('catalog', ['ads'=>$ads2]);
//     //             }
















