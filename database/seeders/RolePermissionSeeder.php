<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role jika belum ada
        $roles = ['admin', 'pegawai', 'operator'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        // Buat 2 admin
        for ($i = 1; $i <= 2; $i++) {
            $email = "admin{$i}@pntondano.go.id";
            $admin = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => "Admin {$i}",
                    'password' => Hash::make('password'),
                ]
            );
            $admin->assignRole('admin');
        }

        // Buat 6 pegawai
        for ($i = 1; $i <= 6; $i++) {
            $email = "pegawai{$i}@pntondano.go.id";
            $pegawai = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => "Pegawai {$i}",
                    'password' => Hash::make('password'),
                ]
            );
            $pegawai->assignRole('pegawai');
        }

        // Buat 2 operator
        for ($i = 1; $i <= 2; $i++) {
            $email = "operator{$i}@pntondano.go.id";
            $operator = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => "Operator {$i}",
                    'password' => Hash::make('password'),
                ]
            );
            $operator->assignRole('operator');
        }
    }
}
