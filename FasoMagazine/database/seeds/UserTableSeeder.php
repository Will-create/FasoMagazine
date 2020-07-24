<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();


        DB::table('role_user')->truncate();


        $admin=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password')
        ]);

        $reporter=User::create([
            'name'=>'reporter',
            'email'=>'reporter@gmail.com',
            'password'=>Hash::make('password')
        ]);
        
        $user=User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('password')
        ]); 
        
        $adminRoles=Role::where('name','admin')->first();
        $userRoles=Role::where('name','user')->first();
        $reporterRoles=Role::where('name','reporter')->first();
        
        $admin->roles()->attach($adminRoles);
        $user->roles()->attach($userRoles);
        $reporter->roles()->attach($reporterRoles);

    }
}
