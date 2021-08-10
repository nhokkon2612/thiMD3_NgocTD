<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('suppilers')->insert([
            [
                'name'=>'Lebaodaily',
                'phone'=>'0135356',
                'email'=>'bao@gmail.com',
                'address'=>'Cau giay,hanoi',
                'manager'=>'Tran Tong',
            ],
            [
                'name'=>'baodaily',
                'phone'=>'013215356',
                'email'=>'namthaibao@gmail.com',
                'address'=>'Long bien,hanoi',
                'manager'=>'Tran Tong',
            ],
            [
                'name'=>'Baohihi',
                'phone'=>'1231242',
                'email'=>'baohi@gmail.com',
                'address'=>'Cau re,hanoi',
                'manager'=>'Tran Tong',
            ],
            [
                'name'=>'Bac giang',
                'phone'=>'25622102',
                'email'=>'bacgiang1@gmail.com',
                'address'=>'Tu lien,hanoi',
                'manager'=>'Tran Tong',
            ],
        ]);
    }
}
