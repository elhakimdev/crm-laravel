<?php

namespace App\Repositories\Permissions;

use Illuminate\Http\Request;

interface PermissionInterface
{
    public function setDataPayload(Request $request);
    public function getAll();
    public function getById($id);
    public function store(Request $request);
}
