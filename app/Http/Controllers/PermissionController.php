<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Session;

class PermissionController extends Controller
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
        $permission = Permission::orderBy('created_at', 'DESC')->paginate(10);
        return view('permissions.index', compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('name')) {
            \Validator::make($request->all(), [
                'name' => 'required|string|max:100'
            ])->validate();
    
            $permission = new Permission;
            $permission->name = $request->get('name');
    
            $permission->save();
            return redirect()->route('permissions.index')->with(['success', 'Role berhasil ditambahkan']);

        }elseif ($request->get('resource')) {
            \Validator::make($request->all(), [
            'resource' => 'required|string|max:100'
            ])->validate();

            $crud = explode(',', $request->crud_selected);
            if (count($crud) > 0) {
                foreach ($crud as $value) {
                    $name = ucwords($value . " " . $request->resource);

                    $permission = new Permission;
                    $permission->name = $name;

                    $permission->save();
                }
                return redirect()->route('permissions.index')->with(['success', 'Role berhasil ditambahkan']);
            }
        }else {
            return redirect()->route('permissions.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->route('permissions.index')->with('status', 'Permission
        successfully delete');
    }
}
