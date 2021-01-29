<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Roles\RolesRepository;
use \Spatie\Permission\Models\Role as Role;


class RolesController extends Controller
{

    private $repository;

    public function __construct(RolesRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $data = $this->repository->getAll();
        // return response()->json($data);
        return view('policies.roles.index', ['data' => $data]);
    }
    public function show(Role $role)
    {
        $data = $this->repository->getById($role);
        // return response()->json($data);
        return view('policies.roles.show', ['data' => $data]);
    }
    public function create()
    {
        return view('policies.roles.create');
    }
    public function store(Request $request)
    {
        try {
            $this->repository->store($request);
            return back();
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }
    }
}
