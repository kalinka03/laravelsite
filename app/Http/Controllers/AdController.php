<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{User,Category,Ad};
use DB;
use Illuminate\Support\Facades\Auth;


class AdController extends Controller
{
	public function showAd( $id = null)
 {
        $ads = null;
        if( !$id ) {
            $ads = Ad::all();
        }
        else {
            $ads = Ad::findOrFail($id);
        }
         dump($ads);
        $user = Auth::user();
        return view('ads',
            [
                'ads' => Ad::all(),
                'ads' => $ads, 'user'=>$user
            ]
        );
      
    }











//     public function showAd( $id = null)
//     {
//          $users = User::all();
//           $ads = ad::all();

// //        foreach ($users->ads as $ad) {
// //            dump( $ad->text );

// // }
     
//         return view('ads', ['users'=>$users, 'ads' => $ads]);
//     }


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

















//   protected function create(array $data)
//     {
        
//  // dump( $ad->text );
//         return Categories::create([
//             'title' => $data['title'],
//             // 'user_id' => $data['email']
       
//         ]);
// }
// }

