<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Permissions\PermissionsRepository;

class PermissionsController extends Controller
{
    private $repository;

    public function __construct(PermissionsRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        try {
            //code...
            $data = $this->repository->getAll();
            return view('policies.permissions.index', ['data' => $data]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['message' => $th->getMessage()]);
        }
    }
    public function show($id)
    {
        try {
            //code...
            $data = $this->repository->getById($id);
            return response()->json($data);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['message' => $th->getMessage()]);
        }
    }
    public function create()
    {
        return view('policies.permissions.create');
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
