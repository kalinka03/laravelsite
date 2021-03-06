<?php
namespace App\Http\Controllers;
use App\{User,Category,Ad};
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
class MainController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
      public function showMain( CategoryRepository $catRepo )
    {
        $categories = Category::all();
 foreach ($categories as $category) {
            $category->mainPageAds = $category->ads()->orderBy('created_at', 'desc')->take(5)->get();
        }

        return view('main', ['categories' => $categories]);
    
    }

}












$category = new Category();
//        $category->title = 'auto';
//        $category->save();

//        $user = new User;
//        $user->name = 'Katya';
//        $user->email = 'katya@mail.com';
//        $user->password = bcrypt(123);
//        $user->save();





//        $ad = new Ad();
//        $ad->title = 'Продам гараж';
//        $ad->text = 'В хор. стані';
// //        $ad->category_id = 1;
//        $ad->category()->associate( 1 );
//        $ad->user()->associate( $user );
//        $ad->save();
// $user = User::findOrFail(1);
// dump( $user->ads->first()->category->title );

// foreach ($user->ads as $ad) {
//     dump( $ad->text );
// }