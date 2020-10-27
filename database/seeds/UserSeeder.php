<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "Admin";
        $role->save();

        $role = new Role();
        $role->name = "Perawat";
        $role->save();  
        
        $role = new Role();
        $role->name = "Dokter";
        $role->save();        
        
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 1;
        $user->save();
        
        $user = new User();
        $user->name = "Perawat";
        $user->email = "perawat@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = "Dokter";
        $user->email = "dokter@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 3;
        $user->save();
    }
}
