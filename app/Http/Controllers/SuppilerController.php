<?php

namespace App\Http\Controllers;

use App\Http\Services\SuppilerService;
use App\Models\Suppiler;
use Illuminate\Http\Request;

class SuppilerController extends Controller
{


    protected $suppilerService;

    public function __construct(SuppilerService $suppilerService)
    {
        $this->suppilerService = $suppilerService;
    }

    public function index()
    {
        $suppilers = $this->suppilerService->index();
        return view('admin.suppiler.list',compact('suppilers'));
    }


    public function create()
    {
        return view('admin.suppiler.create');
    }


    public function store(Request $request)
    {
      return  $this->suppilerService->store($request);
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
        return $this->suppilerService->destroy($id);
    }
}
