<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\{User,Category,Ad};
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    public function index()
    {
        $users=User::paginate(3);
        return view ('admin/users', ['users'=>$users]);
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view ('admin.editUser', ['user'=>$user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('password'));
        $user->email = $request->get('email');
        $user->is_admin = (int)$request->get('will_admin');
        $user->save();
        return redirect('/admin/user');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/user');
    }
    public function create()
    {
        return view ('admin.createUser');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'will_admin' => 'required'
        ]);

//        dd($request->get('will_admin'));

        $user = new User();
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('password'));
        $user->email = $request->get('email');
        $user->is_admin = (int) $request->get('will_admin');
        /*  $user->remember_token= $request->get('remember_token');*/
        $user->save();

        dd($user);
        /*return back()->with('message','Користувач доданий в базу');*/
    }
}






