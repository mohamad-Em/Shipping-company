<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Mohamad',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'fullName' => 'Mohamad Emrle',
            'phone' => '01094975264',
            'image' => asset('images/mohamad.jpg'),
            'role' => 'Super Admin',
        ]);
        $role = Role::create(['name' => 'Super Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
