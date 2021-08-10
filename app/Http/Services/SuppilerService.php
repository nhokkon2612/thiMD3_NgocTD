<?php

namespace App\Http\Services;

use App\Http\Repositories\SuppilerRepository;
use App\Models\Suppiler;
use Illuminate\Http\Request;

class SuppilerService
{
    protected $suppilerRepository;

    public function __construct(SuppilerRepository $suppilerRepository)
    {
        $this->suppilerRepository = $suppilerRepository;
    }


    public function index()
    {
        return $this->suppilerRepository->getAll();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $suppiler = new Suppiler();
        $suppiler->name=$request->name;
        $suppiler->email=$request->email;
        $suppiler->phone=$request->phone;
        $suppiler->address=$request->address;
        $suppiler->manager=$request->manager;
        $suppiler->status=$request->status;
       return $this->suppilerRepository->store($suppiler);
    }


    public function show(Suppiler $suppiler)
    {
        //
    }


    public function edit(Suppiler $suppiler)
    {
        //
    }


    public function update(Request $request, Suppiler $suppiler)
    {
        //
    }

    public function destroy($id)
    {
        return $this->suppilerRepository->delete($id);
    }

}
