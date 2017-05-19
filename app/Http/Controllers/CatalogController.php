<?php
namespace App\Http\Controllers;
use App\Category;
use App\{User,Ad};
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class CatalogController extends Controller
{
    public function showCategory($id = null)
    {
        $ads = null;
        $category=null;
        if (!$id) {
            $ads = Ad::all();
            $categories=Category::all();
        } else {
            $categories[] = Category::findOrFail($id);
            $category= $categories[0];
            $ads=$category->ads;
        }
//        dump($ads);

        return view('catalog',
            [

                'categories' =>$categories,
                'ad' => $ads
            ]
        );

    }
}

//
//
//    public function createCategory( Request $request )
//    {
//        $this->validate($request, [
//            'title' => 'required'
//        ]);
//        $user = Auth::user();
//        $category = new Category();
//        $category->title = $request->post('title');
//        $category->user()->associate($user);
//        $category->save();
//    }
//}


//        $ads = null;
//        if (!$id) {
//            $ads = Ad::all();
//        } else {
//            $category = Category::findOrFail($id);
//        }
//        return view('catalog',
//            [
//                'categories' => Category::all(),
//                'ads' => $ads ?? $category->ads
//            ]
//        );













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
















