<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        
        return view ('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::orderBy('name', 'ASC')->get();
        return view('users.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(),[
        "name" => "required|min:4|max:100",
        "username" => "required|min:4|max:20",
        "email" => "required|email|unique:users",
        "password" => "required",
        ])->validate();

        $user = User::firstOrCreate([
            'email' => $request->email
        ], [
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        // $user = new User;
        // $user->name = $request->get('name');
        // $user->username = $request->get('username');
        // $user->email = $request->get('email');
        // $user->bio = $request->get('bio');
        // $user->address = $request->get('address');
        // $user->phone = $request->get('phone');
        // $user->password = \Hash::make($request->get('password'));
        
        // if($request->file('avatar')){
        //     $file = $request->file('avatar')->store('avatars', 'public');
        //     $user->avatar = $file;
        //     }
    
        // $user->save();
        
        $user->assignRole($request->role);

        return redirect(route('users.index'))->with(['success' => 'User: <strong>' . $user->name . '</strong> berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('status', 'User
        successfully delete');
    }
}
