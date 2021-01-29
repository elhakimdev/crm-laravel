<?php

namespace App\Repositories\Permissions;

use Illuminate\Http\Request;
use \Spatie\Permission\Models\Permission as Permission;


class PermissionsRepository implements PermissionInterface
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
        return Permission::all();
    }
    public function getById($id)
    {
        $data = Permission::all();
        return $data->find($id);
    }
    public function store(Request $request)
    {
        $data = $this->setDataPayload($request);
        $permission = new Permission();
        $permission->fill($data);
        $permission->save();
    }
}
