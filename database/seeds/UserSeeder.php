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
        
        $role = new Role();
        $role->name = "Farmasi";
        $role->save();
        
        $user = new User();
        $user->nip = "111111";
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 1;
        $user->save();
        
        $user = new User();
        $user->nip = "222222";
        $user->name = "Perawat";
        $user->email = "perawat@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->nip = "333333";
        $user->name = "Dokter";
        $user->email = "dokter@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 3;
        $user->save();

        $user = new User();
        $user->nip = "444444";
        $user->name = "Farmasi";
        $user->email = "farmasi@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 4;
        $user->save();
    }
}
