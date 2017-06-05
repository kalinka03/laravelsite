<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\{User,Category,Ad};
use App\Http\Controllers\Controller;
class CatalogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view ('admin/category', ['categories' => $categories]);
    }
    public function edit($id)
    {
        $categories = Category::findOrFail($id);

        return view ('admin.editCategory', ['categories'=>$categories]);
    }
    public function update(Request $request, $id)
    {
        if( $_FILES['avatar'] ) {
            $fileName = 'avatar_' . $id . '.jpg';
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'files/avatars/' . $fileName);
        }
        $categories = Category::findOrFail($id);
        $categories->title = $request->get('title');


        $categories->save();
        return redirect('/admin/catalog');
    }
    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect('/admin/catalog');
    }
    public function create()
    {
        return view ('admin.createCategory');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

//        dd($request->get('will_admin'));

        $category = new Category();
        $category->title = $request->get('title');
        $category->save();

        dd($category);
        /*return back()->with('message','Користувач доданий в базу');*/
    }
}






