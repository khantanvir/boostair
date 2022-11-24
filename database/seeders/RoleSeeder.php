<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $str = 'admin,user,agent';
        $arr = explode(',',$str);
        foreach($arr as $row){
            Role::create([
                'name'=>$row,
            ]);
        }
        
    }
}
