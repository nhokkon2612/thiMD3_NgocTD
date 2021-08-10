<?php

namespace App\Http\Repositories;

use App\Models\Suppiler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SuppilerRepository
{
    protected $suppiler;

    public function __construct(Suppiler $suppiler)
    {
        $this->suppiler = $suppiler;
    }

    public function getAll()
    {
        return Suppiler::all();
    }

    public function store($suppiler)
    {
        $insert = ['name' => $suppiler->name, 'email' => $suppiler->email,
            'phone' => $suppiler->phone, 'status' => $suppiler->status, 'manager' => $suppiler->manager,
            'address' => $suppiler->address,];
        Suppiler::query()->insert($insert);
        return redirect()->route('suppiler.list');
    }

    public function delete($id)
    {
        DB::table('suppilers')->where('id',$id)->delete();
        return redirect()->route('suppiler.list');
    }

}
