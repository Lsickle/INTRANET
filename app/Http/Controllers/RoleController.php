<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();
        // return $roles;

        return view('roles.index', ['roles' => $roles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Role $role)
    {
        // return $request;
        $role = Role::Create($request->all());

        return redirect()->route('roles.index')->withStatus(__('Rol creado exitosamente.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        if ($role->name == 'admin') {
            return redirect()->route('roles.index');
        }

        $permissions = Permission::all();

        return view('roles.edit', compact(['role', 'permissions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {

        // se actualiza el rol 
        $role->update($request->except('permissions'));
        
        // se sincronizan los permisos del select multiple
        $role->syncPermissions($request->input('permissions'));

        return redirect()->route('roles.index')->withStatus(__('Rol actualizado exitosamente.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if ($role->name == 'admin') {
            return abort(403);
        }

        $role->delete();

        return redirect()->route('roles.index')->withStatus(__('Rol eliminado exitosamente.'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function permisosdelrol(Role $role)
    {

        $permissions = Permission::role($role->name);
        return $permissions;
        // $roles = Role::with('permissions');
        // return $roles;

        return view('permisos.index', ['permissions' => $permissions]);
    }
}
