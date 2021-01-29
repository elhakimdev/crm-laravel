<?php

namespace App\Repositories\Roles;

use Illuminate\Http\Request;
use \Spatie\Permission\Models\Role as Role;

class RolesRepository implements RolesInterface
{
    // set data payload for giving model
    public function setDataPayload(Request $request)
    {
        return [
            'name'          => $request->input('name'),
            'guard_name'    => 'web'
        ];
    }
    public function getAll()
    {
        return Role::with('permissions', 'users')->get();
    }
    public function getById(Role $role)
    {
        $data = Role::with('permissions', 'users')->get();
        return $data->find($role);
    }
    public function store(Request $request)
    {
        $data = $this->setDataPayload($request);
        $role = new Role();
        $role->fill($data);
        $role->save();
    }
}
