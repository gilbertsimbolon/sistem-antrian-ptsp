<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\RolePermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin

        User::create([
            'name' => 'Admin 1 PN Tondano',
            'email' => 'admin1@pntondano.go.id',
            'password' => Hash::make('admin1'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin 2 PN Tondano',
            'email' => 'admin2@pntondano.go.id',
            'password' => Hash::make('admin2'),
            'role' => 'admin',
        ]);

        // Pegawai
        User::create([
            'name' => 'Umum',
            'email' => 'umum@pntondano.go.id',
            'password' => Hash::make('umum'),
            'role' => 'staff'
        ]);
        User::create([
            'name' => 'Inzage',
            'email' => 'inzage@pntondano.go.id',
            'password' => Hash::make('inzage'),
            'role' => 'staff',
        ]);
        User::create([
            'name' => 'Pidana',
            'email' => 'pidana@pntondano.go.id',
            'password' => Hash::make('pidana'),
            'role' => 'staff'
        ]);
        User::create([
            'name' => 'Perdata',
            'email' => 'perdata@pntondano.go.id',
            'password' => Hash::make('perdata'),
            'role' => 'staff'
        ]);
        User::create([
            'name' => 'Hukum',
            'email' => 'hukum@pntondano.go.id',
            'password' => Hash::make('hukum'),
            'role' => 'staff',
        ]);
        User::create([
            'name' => 'e-Court',
            'email' => 'e-court@pntondano.go.id',
            'password' => Hash::make('e-court'),
            'role' => 'staff'
        ]);

        // Operator
        User::create([
            'name' => 'Operator 1',
            'email' => 'operator1@pntondano.go.id',
            'password' => Hash::make('operator1'),
            'role' => 'operator',
        ]);
        User::create([
            'name' => 'Operator 2',
            'email' => 'operator2@pntondano.go.id',
            'password' => Hash::make('operator2'),
            'role' => 'operator'
        ]);
    }
}
