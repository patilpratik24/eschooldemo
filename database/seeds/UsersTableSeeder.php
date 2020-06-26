<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $principalRole = Role::where('name', 'principal')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $studentRole = Role::where('name', 'student')->first();
        $parentRole = Role::where('name', 'parent')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@eschool.com',
            'password' => bcrypt('admin1234')

        ]);

        $principal = User::create([
            'name' => 'Principal',
            'email' => 'principal@eschool.com',
            'password' => bcrypt('principal1234')

        ]);

        
        $teacher = User::create([
            'name' => 'Teacher',
            'email' => 'teacher1@eschool.com',
            'password' => bcrypt('teacher11234')

        ]);

        $student = User::create([
            'name' => 'Student1',
            'email' => 'student1@eschool.com',
            'password' => bcrypt('student11234')

        ]);

        $parent = User::create([
            'name' => 'Parent',
            'email' => 'parent1@eschool.com',
            'password' => bcrypt('parent11234')

        ]);

        $admin->roles()->attach($adminRole);
        $principal->roles()->attach($principalRole);
        $student->roles()->attach($studentRole);
        $teacher->roles()->attach($teacherRole);
        $parent->roles()->attach($parentRole);

    }
}
