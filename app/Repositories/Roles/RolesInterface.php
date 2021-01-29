<?php

namespace App\Repositories\Roles;

use Illuminate\Http\Request;
use \Spatie\Permission\Models\Role as Role;

interface RolesInterface
{
    public function setDataPayload(Request $request);
    public function getAll();
    public function getById(Role $role);
    public function store(Request $request);
}
