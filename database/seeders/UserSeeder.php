<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'System Administrator',
                'email' => 'admin@sjogu.edu',
                'role' => 'admin',
                'phone' => '+265 991 887 119',
                'department' => 'ICT',
                'bio' => 'System Administrator with full access to all features.',
            ],
            [
                'name' => 'ICT Team',
                'email' => 'ict@sjogu.edu',
                'role' => 'general_ict',
                'phone' => '+265 991 887 119',
                'department' => 'ICT',
                'bio' => 'ICT Team managing content and website updates.',
            ],
            [
                'name' => 'Admissions Officer',
                'email' => 'admissions@sjogu.edu',
                'role' => 'admission',
                'phone' => '+265 991 887 119',
                'department' => 'Admissions',
                'bio' => 'Admissions Office managing student applications.',
            ],
            [
                'name' => 'Librarian',
                'email' => 'library@sjogu.edu',
                'role' => 'librarian',
                'phone' => '+265 991 887 119',
                'department' => 'Library',
                'bio' => 'Librarian managing library resources and services.',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => Hash::make('password'),
                    'role' => $user['role'],
                    'is_active' => true,
                    'phone' => $user['phone'],
                    'department' => $user['department'],
                    'bio' => $user['bio'],
                    'password_changed' => false, // All users start with default password
                ]
            );
        }
    }
}