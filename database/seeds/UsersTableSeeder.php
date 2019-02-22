<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        $data = $users->makeVisible(['password', 'remember_token'])->toArray();
        User::insert($data);

        $user = User::where('id', 1)->find(1);
        $user->name = 'siya@examplate';
        $user->password= bcrypt('123456');
        $user->name = 'siya';
        $user->email = 'siya@example.com';
        $user->is_admin = 1;
        $user->save();
    }
}
