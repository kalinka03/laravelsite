<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\{User,Category,Ad};
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;
class AdController extends Controller
{
    public function index()
    {

        $ads = Ad::paginate(5);
        return view('admin/ads', [
            'ads' => $ads]);


    }
    public function edit($id)
    {
      $ads= Ad::findOrFail($id);
      $categories=Category::all();
        return view ('admin.editAd', ['ads'=>$ads,  'categories'=>$categories]);
    }
    public function update(Request $request, $id)
    {
        if( $_FILES['picture'] ) {
            $fileName = 'picture_' . $id . '.jpg';
            move_uploaded_file($_FILES['picture']['tmp_name'], 'ads_files/pictures/' . $fileName);
        }

        $ads = Ad::findOrFail($id);
        $ads->title = $request->get('title');
        $ads->text= $request->get('text');
        $ads->category_id= $request->get('category_id');
        $ads->save();
        return redirect('/admin/ad');
    }
    public function destroy($id)
    {
            $ads = Ad::findOrFail($id);
            $ads->delete();
            return redirect('/admin/ad');

    }
    public function create()
    {
       $categories=Category::all();
       return view ('admin.createAd', ['categories'=>$categories]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'text' => 'required'
        ]);
        $user = Auth::user();
        $ads = new Ad();
        $ads->title = $request->get('title');
        $ads->text= $request->get('text');
        $ads->user()->associate($user);
        $ads->category_id= $request->get('category_id');
        $ads->save();

        if( $_FILES['picture'] ) {
            $fileName = 'picture_' . $ads->id . '.jpg';
            move_uploaded_file($_FILES['picture']['tmp_name'], 'ads_files/pictures/' . $fileName);
        }

        return redirect('/admin/ad');

    }
}






