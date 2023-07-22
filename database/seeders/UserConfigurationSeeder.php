<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $adminRole = Role::create(['name' => 'Admin']);
        $studentRole = Role::create(['name' => 'Student']);
        $LecturerRole = Role::create(['name' => 'Lecturer']);

        Permission::firstOrCreate(['name' => 'dashboard index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'assignment index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'report index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'student index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'lecture index', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'user index', 'guard_name' => 'web']);

        $adminRole->givePermissionTo([
            'dashboard index',
            'assignment index',
            'report index',
            'lecture index',
            'user index',
            'student index'
        ]);

        $studentRole->givePermissionTo([
            'dashboard index',
            'student index',
            'assignment index'
        ]);

        $LecturerRole->givePermissionTo([
            'dashboard index',
            'assignment index',
            'report index',
            'lecture index',
            'student index'
        ]);

        $user = User::firstOrCreate([
            'name' => "dilshanpasindu719@gmail.com",
            'email' => "dilshanpasindu719@gmail.com",
            'password' => Hash::make("dilshanpasindu719@gmail.com"),
        ]);

        $user->assignRole('Super Admin');

        $user = User::firstOrCreate(
            [
                'name' => 'admin@gmail.com',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@gmail.com')
            ]
        );

        $user->assignRole('Admin');
    }
}
