<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Role,
    Permission
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [  'name'=>'user','email'=>'user@gmail.com','password'=>bcrypt('password')],
            ['name'=>'editor','email'=>'editor@gmail.com','password'=>bcrypt('password') ],
            ['name'=>'author','email'=>'author@gmail.com','password'=>bcrypt('password')]
            ,]);

          Role::insert(
            [
                ['name'=>'Editor','slug'=>'editor'],
                ['name'=>'Author','slug'=>'author'],
            ],
        );
        Permission::insert(
            [
                ['name'=>'Add Post','slug'=>'add-post'],
                ['name'=>'Delete Post','slug'=>'delete-post'],
            ],
        );


    }



}
